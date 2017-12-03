<?php

class Reminders {
    
    public function __construct() {   
    }
	public function get_reminders () {
		$db = db_connect();
        $statement = $db->prepare("SELECT * FROM notes
                                WHERE username = :name AND deleted = 0;");
        $statement->bindValue(':name', $_SESSION['name']);
		
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
	}
    public function personalDetails ($fname,$lname,$email,$pnumber,$bdate) {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO personalDetails(username,firstname,lastname,emailaddress,phonenumber,birthdate) values (:name,:fname,:lname,:email,:pnumber,:bdate)");
        $statement->bindParam('name',$_SESSION['name']);
        $statement->bindParam(':fname',$fname);
        $statement->bindParam(':lname',$lname);
        $statement->bindParam(':email',$email);
        $statement->bindParam(':pnumber',$pnumber);
        $statement->bindParam(':bdate',$bdate);
        $statement->execute();
    }
    
    public function profileupdate() {
    $expiry = date("Y-m-d", time() + 0*24*60*60 );

$today = date("Y-m-d", time());

if( $today > $expiry)    {
   $profile=true;
   }
else
   {   
$profile=false;
   }
   return $profile;
}
public function phnumber($tel) {
if (preg_match('/(0[0-9]{9})/', $tel))

{

$phnumber =true;

}

else

{

$phnumber =false;

}
return $$phnumber;
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
    public function get_reports () {
        $db = db_connect();
        $statement = $db->prepare("SELECT username ,subject FROM notes
                                WHERE deleted =0;");
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
     public function findreminders ($year,$hours) {
        $db = db_connect();
        $statement = $db->prepare("SELECT subject, username, description FROM notes
                                WHERE cd between '$year' and '$hours'");

        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function totallogins () {
        $db = db_connect();
        $statement = $db->prepare("SELECT username ,islogin,timedate FROM tuition
                                WHERE islogin =1;");
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

	public function get_reminder ($id) {
		$db = db_connect();
        $statement = $db->prepare("SELECT * FROM notes WHERE
                                id = :id;");
        $statement->bindValue(':id', $id);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
	}
	public function addReminder($subject,$description) {
		$db = db_connect();
    $insert=$db->prepare("INSERT INTO notes (username,subject,description) VALUES(:name,:subject ,:description)");
    $insert->bindValue(':name', $_SESSION['name']);
    $insert->bindParam('subject',$subject);
    $insert->bindParam('description',$description);
    $insert->execute();
	}
	public function updateReminder($subject,$description) {
		$db = db_connect();
    $insert=$db->prepare("UPDATE notes SET subject=:subject,description=:description WHERE username=:name; ");
     $insert->bindValue(':name', $_SESSION['name']);
    $insert->bindValue(':subject', $subject);
        $insert->bindValue(':description', $description);
       
        $insert->execute();
	}
	public function removeItem($id) {
		$db = db_connect();
        $statement = $db->prepare("UPDATE notes SET deleted = 1 WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->execute();

	}
	
	public function get_amount () {
		$db = db_connect();
        $statement = $db->prepare("SELECT amount FROM tuition WHERE username=:username;");
        $statement->bindValue(':username', $_SESSION['username']);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
		
		return $rows;
	}

}
