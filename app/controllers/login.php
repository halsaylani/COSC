<?php

class Login extends Controller {
    public function index() {
        $user = $this->model('User');
        
        if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $pass=$_POST['pass'];
        $user->authenticate($name,$pass);
        header('Location: /home');
    }else{
          echo "Invalid username/password";
          $_SESSION['attempts']++;
          echo "<br>"."attempts are ".$_SESSION['attempts'];
          //echo "<p><a href= 'index.php'> TRY AGAIN</a>";
    }
    }
	public function register () {
		$user = $this->model('User');
		$this->view('home/register');
		if(isset($_POST['rig'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass1=$_POST['pass'];
    $hash=password_hash($pass1,PASSWORD_DEFAULT);
			$user->register($name,$hash,$email);
			//$_SESSION['auth'] = true;
            //header("Location")
		}
	}
}
