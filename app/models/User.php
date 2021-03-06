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
        $query="SELECT username,password,role FROM users WHERE username=:name;";
        $statement=$db->prepare($query);
        $statement->bindValue(':name', $this->username);
       
        $statement->execute();
        $count=$statement->fetchAll(PDO::FETCH_ASSOC);
        if($count){
            //$this->auth=true;
            if (password_verify($this->password, $count[0]['password'])){
            $_SESSION['name']=$this->username;
            $_SESSION['role']=$count[0]['role'];
            $_SESSION['auth'] = true;
        }

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
    
  public function manager ($fname,$lname,$email,$pnumber,$bdate,$mpass) {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO Managers(firstname,lastname,emailaddress,phonenumber,birthdate,managerpass,role) values (:mfname,:mlname,:memail,:mpnumber,:mbdate,:mpass,2)");
        $statement->bindParam(':mfname',$fname);
        $statement->bindParam(':mlname',$lname);
        $statement->bindParam(':memail',$email);
        $statement->bindParam(':mpnumber',$pnumber);
        $statement->bindParam(':mbdate',$bdate);
        $statement->bindParam(':mpass',$mpass);
        $statement->execute();
        $count=$statement->fetchAll(PDO::FETCH_ASSOC);
        if($count){
            //$_SESSION['mname']=$count[0]['managerName'];
            $_SESSION['role']=$count[0]['role'];
        }

         $statement = $db->prepare("INSERT INTO users (username,password, role) VALUES (:name,:pass, 2);");
        $statement->bindValue(':name', $fname);
        $statement->bindValue(':pass', $hash=password_hash($mpass,PASSWORD_DEFAULT));
        $statement->execute();
    
    
    }
    public function staff ($fname,$lname,$email,$pnumber,$bdate,$mname,$spass) {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO Staff(firstname,lastname,emailaddress,phonenumber,birthdate,staffpass,managerName,role) values (:sfname,:slname,:semail,:spnumber,:sbdate,:spass,:mname,3)");
        $statement->bindParam(':sfname',$fname);
        $statement->bindParam(':slname',$lname);
        $statement->bindParam(':semail',$email);
        $statement->bindParam(':spnumber',$pnumber);
        $statement->bindParam(':sbdate',$bdate);
         $statement->bindParam(':mname',$mname);
         $statement->bindParam(':spass',$spass);
        $statement->execute();
        if($count){
            $_SESSION['role']=$count[0]['role'];
        }

        $statement = $db->prepare("INSERT INTO users (username,password, role) VALUES (:name,:pass, 3);");
        $statement->bindValue(':name', $fname);
        $statement->bindValue(':pass', $hash=password_hash($spass,PASSWORD_DEFAULT));
        $statement->execute();
    }
    public function clients ($cname, $cemail,$cpnumber,$cbdate,$comments,$cpass) {
        
    $db=db_connect();
    $statement = $db->prepare("SELECT * FROM  clients WHERE clientsname=:cname;");
        $statement->bindValue(':cname', $cname);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        if ($rows) {
            return false;
        }else{
    $insert=$db->prepare("INSERT INTO clients(
        clientsname, phonenumber,birthdate,emailaddress,byrole,byusername,clientpass,comments)values(:cname,:cpnumber,:cbdate,:cemail,:role,:name,:cpass,:comments)");
        $insert->bindParam(':name',$_SESSION['name']);
        $insert->bindParam(':role',$_SESSION['role']);
        $insert->bindParam(':cname',$cname);
        $insert->bindParam(':cemail',$cemail);
        $insert->bindParam(':cpnumber',$cpnumber);
        $insert->bindParam(':cbdate',$cbdate);
        $insert->bindParam(':cpass',$cpass);
        $insert->bindParam(':comments',$comments);
        $insert->execute();

        $insert = $db->prepare("INSERT INTO users (username,password, role) VALUES (:name,:pass, 0);");
        $insert->bindValue(':name', $cname);
        $insert->bindValue(':pass', $hash=password_hash($cpass,PASSWORD_DEFAULT));
        $insert->execute();
    
   }
}
public function staffreports () {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM Staff where managerName=:mname");
        $statement->bindParam(':mname',$_SESSION['name']);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
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
    public function searchlist ($search) {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM clients where clientsname=:searchc or phonenumber=:searchn");
        $statement->bindParam(':searchc',$search);
        $statement->bindParam(':searchn',$search);
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
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM users WHERE username=:name;");
        $statement->bindValue(':name', $name);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        if ($rows) {
            return false;
        }
        else {
            $statement = $db->prepare("INSERT INTO users (username, password,role)
                     VALUES (:name,:pass,0); ");
            $statement->bindParam(':name',$name);
            $statement->bindParam(':pass',$pass);
            $statement->execute();
        }
    }
    public function reportAll() {
        $db = db_connect();
        $statement = $db->prepare("SELECT users.username, personalDetails.firstname, personalDetails.lastname, personalDetails.emailaddress, personalDetails.birthdate, personalDetails.phonenumber, COUNT(notes.id) as count FROM users, personalDetails, notes ;");
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }


public function get_amount () {
        $db = db_connect();
        $statement = $db->prepare("SELECT logtype FROM tuition WHERE username=:name;");
        $statement->bindValue(':name', $_SESSION['name']);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
        
        return $rows;
    }
    public function allnames () {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM clients");
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function allages () {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM personalDetails");
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
