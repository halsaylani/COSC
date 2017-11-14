<?php

class Home extends Controller {

    public function index($name = '') {		
        $user = $this->model('User');
		
		$message='-welcome '.$_SESSION['name'].'<br>'.'-Today is ' . date("Y/m/d");
		
        $this->view('home/index', ['message' => $message]);
    }
     public function LasiVisit($name = '') { 
        $user = $this->model('User');
        $message2=$_SESSION['LasiVisit'];
        $this->view('templates/footer', ['message' => $message2]);
    }
    public function Attempts($name = '') { 
        $user = $this->model('User');
        $message3=$_SESSION['attempts'];
        $this->view('templates/footerPublic', ['message' => $message3]);
    }

    public function error() {     
        $message='password should contain at least 8 chars';
        $this->view('home/error', ['message' => $message]);
    }

    public function login($name = '') {
        $this->view('home/login');
    }

}
