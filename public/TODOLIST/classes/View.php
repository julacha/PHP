<?php
class View{
    public function render(){
        //todo print all of the page.
    }
  
    public function printTasks($todo){
    require_once "../TODOLIST/templates/head.php";
    require_once "../TODOLIST/templates/body.php";

var_dump($todo);
/*foreach ($todo as $tsk){
  print_r($tsk);
    } */
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


   /*   if ($result->num_rows > 0){
            while ($row = $result ->fetch_assoc()){
                echo "id" . $row [id];
                echo "task" . $row [task];
            }
        }else{
            echo "0 result";     
        } */
} 
}