<?php

class manager extends Controller {
	
    public function index() {
    	$user=$this->model('User');
        $this->view('users/manager');  
        if(isset($_POST['add'])){

        	if($user->validate_age($_POST['mbdate'],18)==false){
        		header('Location: /home/managervalidateage');
        		dei();
        	}

        	$user->manager($_POST['mfname'],$_POST['mlname'],$_POST['memail'],$_POST['mpnumber'],$_POST['mbdate']);
        	header('location: /home/manageraddedsuccessfully');
        } 
    }
  
}
