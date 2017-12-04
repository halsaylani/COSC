<?php

class Profile extends Controller {
	
    public function index() {
    	$user=$this->model('Reminders');
        $this->view('profile/index');
        if(isset($_POST['update'])){

        	if(empty($_POST['fname'])||empty($_POST['lname'])||empty($_POST['email'])||empty($_POST['pnumber'])||empty($_POST['bdate'])){
        		header('Location: /home/profile');
        		dei();
        	}else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        		header('Location: /home/emailvalidation');
        		dei();
        	}else if($user->validate_age($_POST['bdate'],18)==false){
        		header('Location: /home/validateage');
        		dei();
        	}
        	
        	$user->personalDetails($_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['pnumber'],$_POST['bdate']);
        	header('location: /home/addedsuccessfully');
       
         }
    }
}
