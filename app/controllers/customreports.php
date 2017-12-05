<?php

class customreports extends Controller {
	
    public function index() {
    	$user=$this->model('User');
        $this->view('users/customreports'); 
    }
    public function allnames() {
    	$user=$this->model('User');
    	$list=$user->getallnames();
        $this->view('users/customreports',['list'=>$list]); 
    }
    public function allages() {
    	$user=$this->model('User');
    	$list=$user->getallages();
        $this->view('users/customreports',['list'=>$list]); 
    }
  
}
