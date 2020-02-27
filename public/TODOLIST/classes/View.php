<?php
class View{
    public function render(){
        //todo print all of the page.
    }
  
    public function printTasks($todo){
    require_once "../TODOLIST/templates/head.php";
    require_once "../TODOLIST/templates/body.php";
//var_dump($todo);
echo "<div class='todo'>";
//$areColumnSet = false;
foreach ($todo as $index => $row){
 /*    if (!$areColumnSet){
        echo "<div class='task_header'>";
        foreach ($row as $colname => $cell){ 
            echo "<span class='todo_header'>$colname</span>";  
    }
    echo "</div>"; 
$areColumnSet = true;
}*/
    echo "<div class='task_cont'>";
    //echo "Row: $index;

    foreach ($row as $colname => $cell){
        echo "<span class='task-cell'>$cell</span>";   
    }

    echo "<form action='index.php' method='POST'>";
    $rowid = $row['id'];
    echo "<button type='submit' name='delBtn' value='$rowid'>Delete</button>";
    echo "<button type='submit' name='updateBtn' value='$rowid'>Edit</button>";
    echo "<i class='fa fa-pencil-square-o' aria-hidden='true'></i>";
    echo "<i class='fa fa-times' aria-hidden='true'></i>";
    echo "</form>";
    echo "</div>";
}
echo "</div>";
}
}
