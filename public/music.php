<?php
require_once "../config/config.php";
require_once "../src/classes/View.php";
require_once "../src/classes/Model.php";//podvesili fail

$view = new View();
$model = new Model($config, $view); //podkluchaemsa
require_once "../src/template/head.php";
echo "<h1>My Music</h1><hr>";
echo "My data store is called :" . Model::MODELNAME . "<hr>";
$model->getSongs();
require "../src/template/footer.php";