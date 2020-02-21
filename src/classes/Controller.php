<?php
class Controller {
    private $model;
    public function __construct (Model $odel){  
    
    $this->model = $model;
    }
    public function route (){
        if (isset($_GET['songname'])) {
            $this ->model ->getSongs($_GET['mydate']);
        }else {
            
        }
        $this ->model ->getSongs();
    }
}