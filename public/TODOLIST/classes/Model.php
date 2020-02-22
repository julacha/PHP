<?php
class Model{   
    private $conn = null;
    //private $view;//vizivaem

    public function __construct($config) {
        $server = $config['server'];
        $db = $config['db'];
        $user = $config['user'];
        $pw = $config['pw'];
        $this->conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pw);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<hr>Connected Successfully!<hr>";
    }
        public function addSongs(){
            $stmt = $this->conn->prepare ("INSERT INTO tracks (name, artist, user_id) VALUES (:songname,:artist,1)");
            //$stmt->bindParam(':songname',$_POST ['songname']);
            //$stmt->bindParam(':artist',$_POST ['artist']);
            //$stmt->execute();
            //$this->getSongs();
        }

    }
  

