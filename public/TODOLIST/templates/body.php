<!DOCTYPE html>
<html lang="en">
<body>
<div class="outer_container">
<div class="tasks_img">
<img src="/TODOLIST/Images/To-Do-List-Heading.PNG)">
</div>    
<div class="tasks_cont">
<form action="index.php" method="POST">
    <label for="task">Task</label>
    <input type="text" name="task" class="task_input">
    <button type="submit" class="task_btn" name="submit">Add Task</button>
</form>
</div>
</div>
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
</body>
</html>