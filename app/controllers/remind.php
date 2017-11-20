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
		if(isset($_POST['add'])){
        	$subject=$_POST['subject'];
        	$description=$_POST['description'];
        	$r->addReminder($subject,$description);
        }
    }//////////////////////////////////
	public function update($id) {
		if (isset($_POST['update'])) {
            $reminders = $this->model('Reminders');
            $subject=$_POST['subject'];
        	$description=$_POST['description'];
            $reminders->updateReminder($subject, $description);
            header('Location:/remind');
        } else {
            $reminders = $this->model('Reminders');
            $item = $reminders->get_reminder($id);
            
            $this->view('remind/update', ['item' => $item] );
        }
    }
	public function remove($id = '') {
		$r = $this->model('Reminders');
		$r->removeItem($id);
		header('Location:/remind');
    }
	
	
}