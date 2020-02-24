<?php
class View{
    public function render($task){
        //todo print all of the page.
    }
  
    public function printTasks(){
    require_once "../TODOLIST/templates/head.php";
    require_once "../TODOLIST/templates/body.php";

    //foreach ($task as $row){
  /*   while($row = $stmt->fetchAll())
        echo "id" . $row [id];
        echo "task" . $row [task]; 
    } */

    /*while ($rows = $stmt->fetchAll();))
    echo "<tr>";
    echo "<td>$row ['id']</td>";
    echo "<td class='task'>$row ['task']</td> ";
    echo "<td class='delete'><a href='#'>x</a></td> "; 
    echo "</tr>"; */
} 
}