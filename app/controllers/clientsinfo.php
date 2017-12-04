<?php

class clientsinfo extends Controller {

     public function index() {
        $user = $this->model('User');
        $age=$this->model('Reminders');
        $this->view('home/newuser');
           if(isset($_POST['add'])){

           if($age->validate_age($_POST['cbdate'],18)==false){
        		header('Location: /home/clientvalidateage');
        		dei();
        	}
        	// elseif($age->phnumber($_POST['cpnumber'])==true){
        	// 	header('Location: /home/clientvalidatenumber');
        	// 	dei();
        	// }
          $user->clients($_POST['cname'],$_POST['cemail'],$_POST['cpnumber'],$_POST['cbdate'],$_POST['comments']);

          header('location: /home/clientaddedsuccessfully');
        


         }
       }


}
