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
    if (isset($_POST['submit'])) {
        $this->model->addTask($_POST['task']);
        } else {
        $this->model->addTask();
        }
    //zadachi zapisivajutsa v bazu dannih
    public function addTask($task){
        $stmt = $this->conn->prepare ("INSERT INTO tasks (task) VALUES (:task)");
        $stmt->bindParam(':task',$_POST ['task']);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        //$Rows = $stmt->fetchAll();
        $this->view->printTasks($task);

//v okne polzovatelj vvodit zadachu v okno
  /*$stmt = $this->conn->prepare ("SELECT*FROM tasks");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $allRows = $stmt->fetchAll();
    $this->view->printTasks($allRows);
    if($task == ""){
        echo "New task";
        exit();
    } */



    }
}


  