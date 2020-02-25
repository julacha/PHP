<?php
class View{
    public function render(){
        //todo print all of the page.
    }
  
    public function printTasks($todo){
    require_once "../TODOLIST/templates/head.php";
    require_once "../TODOLIST/templates/body.php";
//var_dump($todo);
$areColumnSet = false;
foreach ($todo as $index => $row){
    if (!$areColumnSet){
        echo "<div class='task_header'>";
        foreach ($row as $colname => $cell){ 
            echo "<span class='todo_header'>$colname</span>";  
    }
    echo "</div>";
$areColumnSet = true;
}
    echo "<div class='task-cont'>";
 
    foreach ($row as $colname => $cell){
        echo "<span class='task-cell'>$cell</span>";
    }
    echo "</div>";
}
}
}