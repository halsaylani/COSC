<?php

class Home extends Controller {

    public function index($name = '') {		
        $user = $this->model('User');
		
		
		
        $this->view('home/index');
    }

    public function login($name = '') {
        $this->view('home/login');
    }

}
