<?php
class Controller{
    private $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
  private function postReq()    {
        $this->model->addTask();
    } 
}