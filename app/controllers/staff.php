<?php

class staff extends Controller {
	
    public function index() {
    	$user=$this->model('User');
        $this->view('users/staff');  
        if(isset($_POST['add'])){

        	if($user->validate_age($_POST['sbdate'],18)==false){
        		header('Location: /home/staffvalidateage');
        		dei();
        	}else if(empty($_POST['mname'])){
        		header('location: /home/managername');
        		dei();
        	}

        	$user->staff($_POST['sfname'],$_POST['slname'],$_POST['semail'],$_POST['spnumber'],$_POST['sbdate'],$_POST['mname']);
        	header('location: /home/staffaddedsuccessfully');
        } 
    }
  
}
