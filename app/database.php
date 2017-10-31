<?php

/* database connection stuff here
 * 
 */

function db_connect() {
    try {
        $dbh = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
        return $dbh;
        
    } catch (PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
        //We should set a global variable here so we know the DB is down
    }
}
