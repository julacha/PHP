<?php
echo "<h1>Arrays </h1>";
$myarr = [1, 2, 3, 4, 5, 6, 7, 8];
for ($myarr as $val) {
    echo "Nuber is $val<br>";
}
for each ($myarr as $key => $val) {
    echo "Key: $key is $val<br>";
}
$cars = [
    "BWW"
]