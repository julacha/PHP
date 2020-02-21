<?php
require_once "../config/config.php";
require_once "../src/classes/Model.php";//podvesili fail
require_once "../src/classes/View.php";
require_once "../src/classes/Controller.php";

$view = new View();
$model = new Model($config, $view); //podkluchaemsa
$controller = new Controller ($model);
$controller->route();//vizov cherez funkciju
//$model->getSongs();vizov na prjamuju
//echo "My data store is called :" . Model::MODELNAME . "<hr>";
