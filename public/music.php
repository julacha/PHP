<?php
require_once "../config/config.php";
//require_once "../src/classes/View.php";
require_once "../src/classes/Model.php";//podvesili fail

$model = new Model($config); //podkluchaemsa
require_once "../src/template/head.php";
echo "<h1>My Music</h1><hr>";
$model->getSongs();
require "../src/template/footer.php";