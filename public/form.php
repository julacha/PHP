<form action="form.php" method="get">
<input type="date" name ="mydate" id = "">
<input type="number" name ="mynumber" id = "">
<input type="text" name ="mytext" id = "">
<button type="submit">Submit</button>
</form>
<?php
if (isset($_GET['mydate'])){ 
    echo "your data is:" . $_GET["mydate"] . "<br>";
}
    if (isset($_GET['mynumber'])){ 
        echo "your data is:" . $_GET["mynumber"] . "<br>";
    }
        if (isset($_GET['mytext'])){ 
            echo "your data is:" . $_GET["mytext"] . "<br>";
        }