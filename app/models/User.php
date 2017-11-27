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
        $query="SELECT username,password,role FROM users WHERE username=:name and password=:pass;";
        $statement=$db->prepare($query);
        $statement->bindValue(':name', $this->username);
        $statement->bindValue(':pass', $this->password);
        $statement->execute();
        $count=$statement->fetchAll(PDO::FETCH_ASSOC);
        if($count){
            //$this->auth=true;
            $_SESSION['name']=$this->username;
            $_SESSION['role']=$count[0]['role'];
            $_SESSION['auth'] = true;

        }

        $statement = $db->prepare("INSERT INTO tuition (username,islogin, ipaddress) VALUES (:name,true, :ipaddress);");
        $statement->bindValue(':name', $this->username);
        $statement->bindValue(':ipaddress', $_SERVER['REMOTE_ADDR']);
        $statement->execute();
    
    }
     public function checkifadmin () {
        
    $db=db_connect();
    $insert=$db->prepare("SELECT username,password FROM users WHERE role=1");
    $insert->execute();
    $rows = $insert->rowCount();
    if($rows){
    $role = $rows['role'];

$_SESSION['role'] = $role;
}
      
   
}

     public function getLastVisit ($name) {
        
    $db=db_connect();
    $insert=$db->prepare("SELECT timedate FROM tuition WHERE username=:name AND islogin=1");
    $insert->bindParam(':name',$name);
    $insert->execute();
      
   
}
    public function LastVisit ($address,$name) {
        
    $db=db_connect();
    $insert=$db->prepare("INSERT INTO  tuition(username,islogin,ipaddress) VALUES (:name,false,:ipaddress);");
    $insert->bindParam(':name',$name);
    $insert->bindParam(':ipaddress',$address);
    $insert->execute();
}
	public function register ($name, $pass) {
		
    $db=db_connect();
    $insert=$db->prepare("INSERT INTO users(username, password,role)values(:name,:pass,3)");
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
