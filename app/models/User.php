<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate() {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		 $db=db_connect();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query="SELECT * FROM users WHERE username=:name AND password=:pass";
        $statement=$db->prepare($query);
        $statement->execute(array(
            'name' => $_POST['name'],
            'pass' => $_POST['pass']
        ));
        $count=$statement->rowCount();
        if($count>0){
            //$this->auth=true;
            $_SESSION['name']=$_POST['name'];
            $_SESSION['auth'] = true;
        }
    
    //$db = null;
    }
	public function register ($name, $pass, $email) {
		
    $db=db_connect();
    $insert=$db->prepare("INSERT INTO users(username, password, email)values(:name,:pass,:email)");
    $insert->bindParam('name',$name);
    $insert->bindParam('email',$email);
    $insert->bindParam('pass',$pass);
    $insert->execute();
   
}

}
