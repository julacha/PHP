<?php
function add($a, $b)
{
    $sum = $a + $b;
    $myclass = $a . "_" . $b;
    echo "<div class='mydisp-class $myclass'>a plus b = $sum </div>";
    echo <br>;
}