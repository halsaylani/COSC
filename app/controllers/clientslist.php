<?php

class clientslist extends Controller {

     public function index() {
         $user = $this->model('User');
        $list = $user->clientslist();
        $this->view('users/clientslist',[
        'list' => $list
        ] );   
       }
}
