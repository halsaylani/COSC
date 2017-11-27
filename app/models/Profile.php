<?php

class Profile {
    
    public function __construct() {   
    }
	public function personalDetails ($fname,$lname,$pnumber,$bdate) {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO personalDetails(firstname,lastname, phonenumber,birthdate) values (:fname,:lname,:pnumber,:bdate)");
        $statement->bindParam(':fname',$fname);
        $statement->bindParam(':lname',$lname);
        $statement->bindParam(':pnumber',$pnumber);
        $statement->bindParam(':bdate',$bdate);
        $statement->execute();
    }

    public function profileupdate() {
         $expiry = date("Y-m-d", time() + 0*24*60*60 );

        $today = date("Y-m-d", time());

            if( $today > $expiry)    {
                    $profile=true;
                }else{   
            $profile=false;
           }
         return $profile;
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

}
