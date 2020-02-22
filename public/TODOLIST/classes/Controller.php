<?php
class Controller{
    private $model;

    public function __construct(Model $model){
        $this->model = $model;
    }

    if (isset($_POST['submit'])) {
    $this->model->addTask($_POST['task']);
    } else {
    $this->model->addTask();
    }


}