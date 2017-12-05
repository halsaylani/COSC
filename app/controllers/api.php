<?php
class api extends Controller {
    public function index($name = '') {
        $user = $this->model('User');
        $list = $user->reprtsAll();
        $print = ($list);
        echo $print;
        $this->view('/home/api',['list'=>$list]);
        
        
    }
}