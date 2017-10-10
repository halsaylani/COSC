     <?php
     session_start();
     //global $count=0;
     $uname=$_POST['uname'];
     $pass=$_POST['pass'];
     $arrayuname=("hussan");
     $arraypass=("123321");
     
     if(!isset($_SESSION['attempts'])){
     $_SESSION['attempts']=0;
     }
    
     if(isset($_POST['submit'])){
     if(($uname == $arrayuname) && ($pass == $arraypass)){
   

     $_SESSION['uname'] = $uname;
     $_SESSION['pass'] = $pass;
     
 	$_SESSION['is authenticated']= true;
     header("Location:welcome.php");
     
     }
     
     else{ 
      echo "Invalid Username/Password";
       $_SESSION['attempts']++;
     echo "<br>"."attempts are ".$_SESSION['attempts'];
      echo "<p><a href= 'index.php'> try again</a>";
     
     }
     
     }
     /*
     else{
     echo  "Invalid Username";
      $_SESSION['attempts'] = $_SESSION['attempts'] +1;
     echo "<br>"."attempts are ".$_SESSION['attempts'];
     echo "<p><a href= 'index.php'> try again</a>";
    
     }
     */

// session_start();
if(isset( $_POST['attempts'])){
     echo "attempts are ".$_SESSION['attempts']; 
}
     
     ?>

	

