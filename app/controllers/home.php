<?php

class Home extends Controller {

    public function index($name = '') {		
        $user = $this->model('User');
		
		$message='-welcome '.$_SESSION['name'].'<br>'.'-Today is ' . date("Y/m/d");
		
        $this->view('home/index', ['message' => $message]);
    }
    public function profile($name = '') {     
        //$user = $this->model('User');
        
        $message='ALL FILEDS ARE REQUIRED';
        
        $this->view('profile/index', ['message' => $message]);
    }
    public function emailvalidation($name = '') {     
        //$user = $this->model('User');
        
        $message='EMAIL SHOULD BE VALID';
        
        $this->view('profile/index', ['message' => $message]);
    }
    public function validateage($name = '') {     
        //$user = $this->model('User');
        
        $message='YOU MUST BE OVER 18';
        
        $this->view('profile/index', ['message' => $message]);
    }
     public function staffvalidateage($name = '') {     
        //$user = $this->model('User');
        
        $message='MUST BE OVER 18';
        
        $this->view('users/staff', ['message' => $message]);
    }
     public function managervalidateage($name = '') {     
        //$user = $this->model('User');
        
        $message=' MUST BE OVER 18';
        
        $this->view('users/manager', ['message' => $message]);
    }
    public function addedsuccessfully($name = '') {     
        //$user = $this->model('User');
        
        $message='UPDATED successfully';
        
        $this->view('profile/index', ['successfully' => $message]);
    }
     public function manageraddedsuccessfully($name = '') {     
        //$user = $this->model('User');
        
        $message=' Add successfully';
        
        $this->view('users/manager', ['successfully' => $message]);
    }
     public function staffaddedsuccessfully($name = '') {     
        //$user = $this->model('User');
        
        $message=' Add successfully';
        
        $this->view('users/staff', ['successfully' => $message]);
    }
    public function profileupdate($name = '') {     
        //$user = $this->model('User');
        
        $message='YOUR PROFILE NEEDE SOME UPDATES';
        
        $this->view('remind/index', ['message' => $message]);
    }
    public function managername($name = '') {     
        //$user = $this->model('User');
        
        $message=' MANAGER NAME SHOULD BE PROVIDED';
        
        $this->view('users/staff', ['message' => $message]);
    }
    public function admin($name = '') {     
        $user = $this->model('User');
        
        $message='-welcome '.$_SESSION['name'].'<br>'.'-Today is ' . date("Y/m/d").'<br>'.' you are the admin';
        
        $this->view('home/admin', ['message' => $message]);
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
