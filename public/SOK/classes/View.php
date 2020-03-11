<?php
class View{
    public function render(){
    }
    public function categories ($struct){
    require_once "..SOK/templates/head.php";
    require_once "..SOK/templates/body.php";
//var_dump($struct);
echo "<h1>MY categories</h1><hr>";
    }



}