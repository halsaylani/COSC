<?php 
class logout extends Controller{
	public function index(){
		$user=$this->model('User');
		//$LastVisit=date('Y-m-d H:i:s');
		$user->LastVisit($_SERVER['REMOTE_ADDR'],$_SESSION['name']);
		session_destroy();
	header ('location:/');
	}
}
?>