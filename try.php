     <?php
     $uname=$_POST['uname'];
     $pass=$_POST['pass'];
     $arrayuname=("hussan");
     $arraypass=("123321");
     $_SESSION['attempts']=0;
    
     if(isset($_POST['submit'])){
     if($uname == $arrayuname){
     if($pass == $arraypass){
     
     session_start();
     $_SESSION['uname'] = $uname;
     $_SESSION['pass'] = $pass;
     $_SESSION['login']=true;
     
     //session_start();	
     echo "welcome " . $_SESSION['uname']."<br>";
     echo " password is: " . $_SESSION['pass']."<br>";
     echo " Today is " . date("Y/m/d") . "<br>";
     //echo "count" .$_SESSION['attempts'];
     echo "<p><a href= 'logout.php'> logout</a>";
     
     }
     
     else{
      echo "Invalid Password";
      echo "<p><a href= 'index.php'> try again</a>";
     
     }
     
     }
     else{
     echo "Invalid Username";
     echo "<p><a href= 'index.php'> try again</a>";
    
     }
     
     }
     
     ?>
