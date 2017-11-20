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
        $query="SELECT * FROM users WHERE username=:name AND password=:pass ";
        $statement=$db->prepare($query);
        $statement->execute(array(
            'name' => $_POST['name'],
            'pass' => $_POST['pass'],
        ));
        $count=$statement->rowCount();
        if($count){
            //$this->auth=true;
            $_SESSION['name']=$_POST['name'];

            $_SESSION['auth'] = true;

        }
    
    }
     public function getLastVisit () {
        
    $db=db_connect();
    $insert=$db->prepare("SELECT LastVisit FROM users WHERE username=:name");
    $insert->bindParam(':name',$_SESSION['name']);
    $insert->execute();
    $rows = $insert->fetchAll(PDO::FETCH_ASSOC);
     if($rows){
            //$this->auth=true;
            $_SESSION['LastVisit']=':LastVisit';

        }
        return $rows;
}
    public function LastVisit ($LastVisit) {
        
    $db=db_connect();
    $insert=$db->prepare("UPDATE users SET LastVisit =:LastVisit WHERE username=:name");
    $insert->bindParam(':name',$_SESSION['name']);
    $insert->bindParam(':LastVisit',$LastVisit);
    $insert->execute();
}
	public function register ($name, $pass) {
		
    $db=db_connect();
    $insert=$db->prepare("INSERT INTO users(username, password)values(:name,:pass)");
    $insert->bindParam('name',$name);
    $insert->bindParam('pass',$pass);
    $insert->execute();
   
}
public function get_amount () {
        $db = db_connect();
        $statement = $db->prepare("SELECT logtype FROM tuition WHERE username=:name;");
        $statement->bindValue(':name', $_SESSION['name']);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
        
        return $rows;
    }

}
