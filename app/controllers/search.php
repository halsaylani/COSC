<?php

class search extends Controller {

     public function index() {
        $user=$this->model('User');
        if(isset($_POST['search'])){
        $list=$user->searchlist($_POST['Search']);
        $this->view('users/searchlist',['list'=>$list]);
            }
       }
       
}
