<?php
require_once 'Controller.php';

class Assignments extends Controller{
    public function __construct($names, $db)
    {
        parent::__construct($names, $db);
    }
    public function home(){
        $this->view->render('main/home');
    }
    public function get(){
        $arr = [
            'subject' => 'Math'
        ];

        $data = $this->assignment->id($arr);
        $this->view->render('main/start', $data);

    }

    public function add(){
        //$this->view->render('assignment/index');
        $this->name('main');

    }

    public function send(){
        $this->name('control');
    }
}
