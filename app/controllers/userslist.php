<?php

class userslist extends Controller {

     public function index() {
        
        $this->view('users/index');   
       }
        public function staff() {
        $user = $this->model('User');
        $list = $user->stafflist();
        $this->view('users/stafflist',[
        'list' => $list
        ] );   
       }
        public function manager() {
        $user = $this->model('User');
        $list = $user->managerlist();
        $this->view('users/managerlist',[
        'list' => $list
        ] );   
       }

}
