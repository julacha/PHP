<?php
class Model //otvechaet za bazu dannih, shablon dla zapisi dopolnitelnih zaprosov
{   
    const MODELNAME = "Our data store and methods";
    //no need be public connection
    private $conn = null;
    private $view;//vizivaem

    public function __construct($config, View $view) {//view podan, type hinting that we need to pass View
        $this->view=$view;//dobavili
        $server = $config['server'];
        $db = $config['db'];
        $user = $config['user'];
        $pw = $config['pw'];//ctobi ne povtorjalisj s music.php, oforlae tak! Model.php dolzhen raspakovatj.
        //we could skip the above 4 and just put the $config[key] directly below
        $this->conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pw);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "<hr>Connected Successfully!<hr>";
    }
    public function getSongs($songname = null)
    {
        if ($songname) {
            $songname = "%$songname%";
            $stmt = $this->conn->prepare("SELECT * FROM tracks WHERE name LIKE (:songname)");
            $stmt->bindParam(':songname', $songname);
            //NOT SAFE!! https://xkcd.com/327/
            // $stmt = $this->conn->prepare("SELECT * FROM tracks WHERE name LIKE '%$songname%'");

        } else {
            $stmt = $this->conn->prepare("SELECT * FROM tracks");
        }

$stmt = $this->conn->prepare ("SELECT*FROM tracks");
//prepare goes here
$stmt->execute();//zapros vipolnitj i ustanovitj rezhim i rspechatatj
//rezhim
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$allRows = $stmt->fetchAll();
//var_dump($allRows);
$this->view->printSongs($allRows);

}
}
