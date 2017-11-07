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
    $insert=$db->prepare("UPDATE notes SET username=:name,subject=:subject,description=:description) ");
    $insert->bindValue(':name', $_SESSION['name']);
    $insert->bindParam('subject',$subject);
    $insert->bindParam('description',$description);
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
