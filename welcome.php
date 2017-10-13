<?php
session_start();


if(isset($_SESSION['name'])){
    echo "welcome " . $_SESSION['name']."<br>";
     echo " Today is " . date("Y/m/d") . "<br>";
     echo "<p><a href= 'logout.php'> logout</a>";

}else{
    header("location:index.php");
}
      if(!isset($_SESSION['is authenticated'])){
      header("location:index.php");
      }
?>