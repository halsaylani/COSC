<?php
class logout extends Controller{
	public function index(){
		$user=$this->model('User');
		$LastVisit=date('Y-m-d H:i:s');
		$user->LastVisit($LastVisit);
		session_destroy();
	header ('location:/');
	}
}

?>