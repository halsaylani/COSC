     <?php
     $uname=$_POST['uname'];
     $pass=$_POST['pass'];
     //
     if(isset($_POST['submit'])){
     if($uname == "hussan"){
     if($pass == "123321"){
     
     session_start();
     $_SESSION['uname'] = $uname;
     //session_start();	
     echo "welcome " . $_SESSION['uname']."<br>";
     echo " password is: " . $_SESSION['pass']."<br>";
     echo " Today is " . date("Y/m/d") . "<br>";
     echo "<p><a href= ‘logout.php'> Press here to logout</a>";
     
     }
     
     else{
      echo "Invalid Password";
     
     }
     
     }
     else{
     echo "Invalid Username";
    
     }
     }
     
     ?>
