<?php
class Model{  
    const MODELNAME = "Our data store and methods";
    private $conn = null;
    private $view;
//podklucilasj k baze
    public function __construct($config, View $view) {
        $this->view=$view;
        $server = $config['server'];
        $db = $config['db'];
        $user = $config['user'];
        $pw = $config['pw'];
        $this->conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pw);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<hr>Connected Successfully!<hr>";
    }

     //zadachi zapisivajutsa v bazu dannih
    public function addTask($task){
        $stmt = $this->conn->prepare ("INSERT INTO tasks (task) VALUES (:task)");
        $stmt->bindParam(':task',$_POST ['task']);
        $stmt->execute();
        $this->view->printTasks($task);
    }

 public function getTask(){
        //v okne polzovatelj vvodit zadachu, zadacha vpisivaetsa v bd i vivoditsa vnizu formi
        $stmt = $this->conn->prepare ("SELECT *FROM tasks");
        //$stmt->bindParam(':id',$_POST ['id']); 
        //$stmt->bindParam(':task',$_POST ['task']);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        print_r($result);
        $this->view->printTasks($result);
        $stmt->execute(); 
}
}

 






  