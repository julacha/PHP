<?php
class Model
{   //no need be public connection
    private $conn = null;
    //private $view;

    public function __construct($config) {
        $server = $config['server'];
        $db = $config['db'];
        $user = $config['user'];
        $pw = $config['pw'];//ctobi ne povtorjalisj s music.php, oforlae tak! Model.php dolzhen raspakovatj.
        //we could skip the above 4 and just put the $config[key] directly below
        $this->conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pw);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<hr>Connected Successfully!<hr>";
    }


public function getSongs($userid = null){
$stmt = $this->conn->prepare ("SELECT*FROM tracks");
//prepare goes here
$stmt->execute();
//rezhim
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$allRows = $stmt->fetchAll();
var_dump($allRows);
}
}
