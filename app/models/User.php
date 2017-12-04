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
public function validate_age($bdate, $age) {
     
        $dates = explode("-", $bdate); 
         
        $year = date("Y") - $dates["0"]; 
        $month = date("m") - $dates["1"];   
        $day = date("d") - $dates["2"]; 
        if ($month < 0) {
            $year--;
        } elseif ($month == 0 && $day < 0) {
            $year--;
        }
        if ($year >= $age) { 
            $valid_age = TRUE;
        } else {
            $valid_age = FALSE;
        }
         
        return $valid_age;
    }
    
  public function manager ($fname,$lname,$email,$pnumber,$bdate) {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO Managers(firstname,lastname,emailaddress,phonenumber,birthdate,role) values (:mfname,:mlname,:memail,:mpnumber,:mbdate,2)");
        $statement->bindParam(':mfname',$fname);
        $statement->bindParam(':mlname',$lname);
        $statement->bindParam(':memail',$email);
        $statement->bindParam(':mpnumber',$pnumber);
        $statement->bindParam(':mbdate',$bdate);
        $statement->execute();
        $count=$statement->fetchAll(PDO::FETCH_ASSOC);
        if($count){
            $_SESSION['role']=$count[0]['role'];
        }
    }
    public function staff ($fname,$lname,$email,$pnumber,$bdate,$mname) {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO Staff(firstname,lastname,emailaddress,phonenumber,birthdate,managerName,role) values (:sfname,:slname,:semail,:spnumber,:sbdate,:mname,3)");
        $statement->bindParam(':sfname',$fname);
        $statement->bindParam(':slname',$lname);
        $statement->bindParam(':semail',$email);
        $statement->bindParam(':spnumber',$pnumber);
        $statement->bindParam(':sbdate',$bdate);
         $statement->bindParam(':mname',$mname);
        $statement->execute();
        if($count){
            $_SESSION['role']=$count[0]['role'];
        }
    }
    public function clients ($cname, $cemail,$cpnumber,$cbdate) {
        
    $db=db_connect();
    $insert=$db->prepare("INSERT INTO clients(
        clientsname, phonenumber,birthdate,emailaddress,byrole,byusername)values(:cname,:cpnumber,:cbdate,:cemail,:role,:name)");
        $insert->bindParam(':name',$_SESSION['name']);
        $insert->bindParam(':role',$_SESSION['role']);
        $insert->bindParam(':cname',$cname);
        $insert->bindParam(':cemail',$cemail);
        $insert->bindParam(':cpnumber',$cpnumber);
        $insert->bindParam(':cbdate',$cbdate);
        $insert->execute();
    
   
}
public function stafflist () {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM Staff ");

        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function managerlist () {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM Managers ");

        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
     public function clientslist () {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM clients ");

        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function staffphonelist () {
        $db = db_connect();
        $statement = $db->prepare("SELECT firstname,phonenumber FROM Staff ");

        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function managerphonelist () {
        $db = db_connect();
        $statement = $db->prepare("SELECT firstname,phonenumber FROM Managers ");

        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function clientsphonelist () {
        $db = db_connect();
        $statement = $db->prepare("SELECT clientsname,phonenumber FROM clients ");

        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
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
    $insert=$db->prepare("INSERT INTO users(username, password,role)values(:name,:pass,0)");
    $insert->bindParam(':name',$name);
    $insert->bindParam(':pass',$pass);
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
public function get_cities ($province) {

$db = db_connect();

        $statement = $db->prepare("SELECT city FROM cities

                                WHERE province=:province

ORDER BY city");

        $statement->bindValue(':province', $province);

        $statement->execute();

        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

return $rows;

}

}
