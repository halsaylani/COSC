<?php

class Home extends Controller {

    public function index($name = '') {		
        $user = $this->model('User');
		
		$message='welcome '.$_SESSION['name'].' Today is' . date("Y/m/d") .' your email is: '.$_SESSION['name']' right' ;
		
        $this->view('home/index', ['message' => $message]);
    }

    public function login($name = '') {
        $this->view('home/login');
    }

}
