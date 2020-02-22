<?php
class View{
    public function render(){
        //todo print all of the page.
    }
  
    public function printTasks(){
    require_once "../templates/head.php";
    require_once "../templates/body.php";

    }
}
?>
<html>
<h1>TODO LIST</h1>
<div class="tasks_cont">
 <form action="index.php" method="POST">
    <label for="task">Task</label>
    <input type="text" name="task" class="task_input">
    <button type="submit" class="task_btn" name="submit">Add Task</button>
    </form>

    <table>
    <thead>
    <tr>
    <th>Nr</th>
    <th>Task</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td class="task">The firt task</td>
    <td class="delete">
    <a href="#">x</a>
    </td>
    </tr>
    </tbody>
    </table>

</div>
</html>