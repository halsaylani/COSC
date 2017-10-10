<?php
SESSION_start();
	 echo "welcome " . $_SESSION['uname']."<br>";
     echo " password is: " . $_SESSION['pass']."<br>";
     echo " Today is " . date("Y/m/d") . "<br>";
     echo "<p><a href= 'logout.php'> logout</a>";
     if(!isset($_SESSION['is authenticated'])){
     header("location:index.php");
     }
?>