<?php
echo "<h1>TODO LIST</h1><hr>";
require_once "config.php";
require_once "classes/Model.php";
require_once "classes/View.php";
//require_once "../src/classes/Controller.php";

$view = new View();
$model = new Model($config,$view);//podkluchaemsa
//$controller = new Controller ($model);
//$controller->route();//vizov cherez funkciju */
