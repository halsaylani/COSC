<?php

class Login extends Controller {
    public function index() {
        $user = $this->model('User');
       
        if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $pass=$_POST['pass'];
      $email=$_POST['email'];
      //$checkpass=password_verify($pass,$hash);
        $user->authenticate($name,$pass,$email);
        header('Location: /home');
    } else{
          echo "Invalid username/password";
          $_SESSION['attempts']++;
          echo "<br>"."attempts are ".$_SESSION['attempts'];
          echo " after 3 attempts you will be stoped";
          echo "<p><a href= '../app/views/login.php'> TRY AGAIN</a>";
    }
    if($_SESSION['attempts']>3){
      $_SESSION['attempts']=0;
      echo" you r out for 60 seconds";
    }
    }
	public function register () {
		$user = $this->model('User');
		$this->view('home/register');
		if(isset($_POST['rig'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass1=$_POST['pass'];
    if($pass1<8){
      echo 'password should at least contain 8 Characters';
      die();
    }
    $hash=password_hash($pass1,PASSWORD_DEFAULT);
			$user->register($name,$hash,$email);
			//$_SESSION['auth'] = true;
            //header("Location")
		}
	}
}
