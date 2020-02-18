<?php
require '../src/template/head.php';
$mybool = true;
echo $mybool;
var_dump($mybool);
$mynum = 38;
var_dump($mynum);
$myname = "cat";
var_dump($myname);
$needle = "c";
$pos = stripos($myname,$needle);
echo "<hr>$needle is first found in ('$myname') at position $pos";
echo "<hr>";
for ($i = 0; $i<5; $i++) {
    echo "<p id = 'p$i'> Some text for P $i</p>";
}
$myfood = ["Bread", "Milk", "Potatoes", "Brocolli"];
var_dump($myfood);
echo "<hr>";
foreach ($myfood as $value){
    echo "My food is $value <br>";
}
echo "<hr>";
echo "<ol class='my_list'>";
foreach ($myfood as $value){
echo "<li>My food is $value </li>";
}
echo "</ol>";
echo "<hr>";
$a = 5;
if ($a > 10) {
    echo "Bigger than 10";
} elseif ($a > 5) {
    echo "Bigger than 5";
} else {
    echo "Equal of smaller than 5";
}
echo "<hr>";
require '../src/template/footer.php';