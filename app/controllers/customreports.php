<?php

class customreports extends Controller {
	
    public function index() {
        $this->view('users/customreports'); 
    }
    public function allnames() {
    	$user=$this->model('User');
    	$list=$user->allnames();
        $this->view('users/allnames',['list'=>$list]); 
    }
    public function allages() {
    	$user=$this->model('User');
    	$list=$user->allages();
        $this->view('users/allages',['list'=>$list]); 
    }
  
}
