<?php
require_once '../src/util.php';
require '../src/template/head.php';
$myname = " Julia ";
echo "My name is" . $myname;
$favourite = "melon";
echo "<hr>";
echo "I am " . $myname. "and I like " . $favourite;
echo "<hr>";
$num = 18;
echo "I am $num";
echo "<hr>";
echo "I am " . ($num + 20);
echo "<hr>";
add(5,10);
echo "<hr>";
require '../src/template/footer.php';
?>

