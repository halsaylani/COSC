<?php

class Reports {
    
    public function __construct() {   
    }
	public function get_reports () {
        $db = db_connect();
        $statement = $db->prepare("SELECT count(description) FROM notes
                                WHERE username = :name;");
        $statement->bindValue(':name', $_SESSION['name']);
        
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


}
