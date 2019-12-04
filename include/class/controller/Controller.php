<?php

include SALAM_QURAN_INC_DIR."class/model/Model.php";
include SALAM_QURAN_INC_DIR."class/view/View.php";

class Controller
{
    private $model;
    private $view;
    public function __construct()
    { 
        $this->model = new Model();
        $this->view = new View();
    }

    public function test()
    {
        
        $this->view->test("Test");
    }
}
