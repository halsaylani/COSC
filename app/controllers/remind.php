<?php

class Remind extends Controller {
	
    public function index($id = '') {		
        $r = $this->model('Reminders');
		$list = $r->get_reminders();
		if ($id) {
			$item = $r->get_reminder($id);
			print_r ($item);
			//$this->view('remind/view', ['item' => $item] );
			die;
		}
		$this->view('remind/index',[
		'list' => $list
		] );
    }/////////////////////////////////////////////////
    public function edit($id='') {
		$r = $this->model('Reminders');
			$item = $r->get_reminder($id);
		$this->view('remind/edit', [
		'item' => $item
		] );	
    }////////////////////////////////////////////////
    public function add($id='') {
		$r = $this->model('Reminders');
		$this->view('remind/add');
		if(isset($_POST['submit'])){
        	$subject=$_POST['subject'];
        	$description=$_POST['description'];
        	$r->addReminder($subject,$description);
        }
    }//////////////////////////////////
	public function update($id) {
		$r = $this->model('Reminders');
        $item = $r->get_reminder($id);
        if(isset($_POST['submit'])){
        	$subject=$_POST['subject'];
        	$description=$_POST['description'];
        	$item->updateReminder($id,$subject,$description);
        }
		$this->view('remind/update', ['item' => $item] );
    }
	public function remove($id = '') {
		$r = $this->model('Reminders');
		$r->removeItem($id);
		header('Location:/remind');
    }
	
	
}