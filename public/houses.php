<?php
require_once '../src/classes/House.php';
echo "Starting to bild my House!";
$myhouse = new House();
$myhouse->setAddress ("Rupniecības iela 32");
$myhouse->openWindows();
$secondhouse = new House();
$secondhouse->openWindows=6;
//echo "How I got $secondhouse->windows in my house!";
$secondhouse->openWindows();