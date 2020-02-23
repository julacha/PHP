<?php
class View{
    public function render(){
        //todo print all of the page.
    }
  
    public function printTasks($tasks){
    require_once "../TODOLIST/templates/head.php";
    require_once "../TODOLIST/templates/body.php";
    
    while ($row = $stmt->fetchAll()){ 
    echo "<tr>";
    echo "<td> $row ['id'] </td>";
    echo "<td class='task'>$row ['task']</td> ";
    echo "<td class='delete'><a href='#'>x</a></td> ";
    echo "</tr>";
    }  
}
}

