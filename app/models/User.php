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
		 try {
    $db = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
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
    }
catch(PDOException $e)
    {
    $message = $e->getMessage();
    }
    //$db = null;


    }
	public function register ($name, $pass, $email) {
		try {
    $db = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
    $insert=$db->prepare("INSERT INTO users(username, password, email)values(:name,:pass,:email)");
    $insert->bindParam('name',$name);
    $insert->bindParam('email',$email);
    $insert->bindParam('pass',$pass);
    $insert->execute();
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    $db = null;
}

}
