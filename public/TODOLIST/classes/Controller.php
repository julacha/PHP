<?php
class Controller{
    private $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
  private function postReq()    {
        $this->model->addTask();
    } 

    private function getReq()
    {
        if (isset($_GET['task'])) {
            $this->model->getTask($_GET['task']);
        } else {
            $this->model->getTask();
        }
    }
    public function route()
    {   
         //GETS are for retrieval only
         if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->getReq();
        }
        //POSTs are for changing something
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->postReq();
        }
        

    }
}
