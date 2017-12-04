<?php

class staffreports extends Controller {
	
    public function index() {
    	$user=$this->model('User');
        	$list=$user->staffreports();
            $this->view('users/staffreports',['list'=>$list]); 
    }
  
}
