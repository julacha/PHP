<?php
class View{
    public function render(){
    }
    public function printTasks($todo){
    require_once "../TODOLIST/templates/head.php";
    require_once "../TODOLIST/templates/body.php";
//var_dump($todo);
echo "<div class='todo'>";
foreach ($todo as $index => $row){
    echo "<div class='task_cont'>";
    echo "<form class='two' action='index.php' method='POST'>";
    foreach ($row as $colname => $cell){
        switch ($colname){
    case "id":
    break;
    case "task":
    echo "<input type='text' name='task_update' class='update_inp' value='$cell'></input>";
    break;
    
    default:
        echo "<span class='task-cell'>$cell</span>";
break;      
}
}
$rowid = $row['id'];

echo "<button class='btnone' type='submit' name='updateBtn' value='$rowid'><i class='far fa-edit'></i></button>";
echo "<br>";
echo "<button class='btntwo'type='submit' name='delBtn' value='$rowid'><i class='far fa-minus-square'></i></button>";
echo "</form>";
if ($cell == ''){
    echo "<p>'Fill the form'</p>";
    exit();
}
echo "</div>";
}
echo "</div>";
}
}
