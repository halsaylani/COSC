<?php

class Reminders {
    
    public function __construct() {
        
    }
	
	public function get_reminders () {
		$db = db_connect();
        $statement = $db->prepare("SELECT * FROM reminder
                                WHERE username = :name AND deleted = 0;");
        $statement->bindValue(':name', $_SESSION['name']);
		
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
	}
	
	public function get_reminder ($id) {
		$db = db_connect();
        $statement = $db->prepare("SELECT * FROM reminder WHERE
                                id = :id;");
        $statement->bindValue(':id', $id);
		
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
	}
	public function addReminder($subject,$description) {
		$db = db_connect();
    $insert=$db->prepare("INSERT reminder SET subject=:subject , description= :description ");
    $insert->bindParam('subject',$subject);
    $insert->bindParam('description',$description);
    $insert->execute();
	}
	public function updateReminder($id,$subject,$description) {
		$db = db_connect();
    $insert=$db->prepare("UPDATE reminder SET subject=:subject , description = :description WHERE id = :id");
    $statement->execute(array(
            'subject' => $_POST['subject'],
            'description' => $_POST['description'],
        ));
	}
	
	public function removeItem($id) {
		$db = db_connect();
        $statement = $db->prepare("UPDATE reminder SET deleted = 1 WHERE id = :id");
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