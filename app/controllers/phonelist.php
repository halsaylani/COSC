<?php

class phonelist extends Controller {

     public function index() {
        $this->view('users/phonelistindex' );   
       }
       public function staffphonelist() {
        $user = $this->model('User');
        $list = $user->staffphonelist();
        $this->view('users/staffphonelist',[
        'list' => $list
        ] );   
       }
       public function managerphonelist() {
        $user = $this->model('User');
        $list = $user->managerphonelist();
        $this->view('users/managerphonelist',[
        'list' => $list
        ] );  
       }
       public function clientsphonelist() {
       	$user = $this->model('User');
        $list = $user->clientsphonelist();
        $this->view('users/clientsphonelist',[
        'list' => $list
        ] );  
       }
}
