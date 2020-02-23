<?php
class Controller{
    private $model;

    public function __construct(Model $model){
        $this->model = $model;
    }

  private function postReq()
    {
         //echo "POST Request<hr>";
         //var_dump($_POST);
        $this->model->addTask();
    } 

/*  if (isset($_POST['sendTask'])) {
    $this->model->addTask($_POST['task']);
    } else {
    $this->model->addTask();
    } */
}