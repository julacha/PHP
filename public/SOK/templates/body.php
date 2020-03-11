<!DOCTYPE html>
<html lang="en">
<header>
<nav>
<ul>
<li>Home</li>
<li>About</li>
<li><a href="register.php">Register</a></li>
</ul>
</nav>
</header>
<body>
<div class="outer_container">
<div class="tasks_img">
<!-- image -->
</div>    
<div class="logcontainer">
<form action="index.php" method="POST" class="log">
    <label for="task">NEW TASK</label>
    <input type="text" name="task" class="task_input">
    <button type="submit" class="task_btn" name="addBtn">ADD</button>
 <div id="date"></div>   
</form>
</div>
</div>
</body> 
</html> 