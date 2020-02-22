<?php
class Model{   
    private $conn = null;
    private $view;

    public function __construct($config, View $view) {
        $server = $config['server'];
        $db = $config['db'];
        $user = $config['user'];
        $pw = $config['pw'];
        $this->conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pw);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<hr>Connected Successfully!<hr>";
    }
    public function addTask(){
        $stmt = $this->conn->prepare ("INSERT INTO tasks (task) VALUES (:task)");
        $stmt->bindParam(':task',$_POST ['task']);
        //$stmt->execute();
    }
}
   /*  $task = $_POST['task'];
    if($task == ""){
        echo "New task";
        exit();
    } */
  