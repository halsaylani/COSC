<?php

class Login extends Controller {
    public function index() {
        $user = $this->model('User');

        if(isset($_POST['submit'])){
      $user->name=$_POST['name'];
      $user->pass=$_POST['pass'];
  }


        $user->authenticate();

        if ($user->auth == TRUE) {
            $_SESSION['auth'] = true;
        }
        
        header('Location: /home');
    }
	
	public function register () {
		$user = $this->model('User');
		
		if(isset($_POST['rig'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass1=$_POST['pass'];
    $hash=password_hash($pass1,PASSWORD_DEFAULT);
			
			$user->register($name,$pass1,$email);
			$_SESSION['auth'] = true;
		}
		
		$this->view('home/register');
	}
}
