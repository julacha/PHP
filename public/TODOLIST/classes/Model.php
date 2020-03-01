<?php
class Model{  
   
    private $conn = null;
    private $view;
//connect to database
    public function __construct($config, View $view) {
        $this->view=$view;
        $server = $config['server'];
        $db = $config['db'];
        $user = $config['user'];
        $pw = $config['pw'];
        $this->conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pw);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "<hr>Connected Successfully!<hr>";
    }

     //tasks are recorded to database
    public function addTask($task=null){
   /*    if ($task == ''){
            echo 'Fill the form';
            exit();
        }else{ */
        $stmt = $this->conn->prepare ("INSERT INTO tasks (task) VALUES (:task)");
        $stmt->bindParam(':task',$_POST ['task']);
        $stmt->execute();
        //$this->view->printTasks();
        $this->getTask();
    }


 public function getTask(){
        //The users enters the task in the form, than task is added to database and is shown under the form
        $stmt = $this->conn->prepare ("SELECT * FROM tasks");
        $stmt->execute(); 
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $allRows = $stmt->fetchAll();
        //var_dump($allRows);
        $this->view->printTasks($allRows);
    
}

public function deleteTask(){
    $stmt = $this->conn->prepare("DELETE FROM tasks WHERE id = (:taskid)");
    $stmt->bindParam(':taskid',$_POST ['delBtn']);
    $stmt->execute();
    $this->getTask();
}

public function updateTask(){
    $stmt = $this->conn->prepare("UPDATE tasks SET task = (:taskname) WHERE id = (:taskid)");
    $stmt->bindParam(':taskid',$_POST ['updateBtn']);
    $stmt->bindParam(':taskname',$_POST ['task_update']);
    $stmt->execute();
    $this->getTask();
} 
}


 






  