     <?php
     session_start();
     //global $count=0;
     $uname=$_POST['uname'];
     $pass=$_POST['pass'];
     $arrayuname=("hussan");
     $arraypass=("123321");
    
     if(isset($_POST['submit'])){
     if($uname == $arrayuname){
     if($pass == $arraypass){
   

     $_SESSION['uname'] = $uname;
     $_SESSION['pass'] = $pass;
    
 	
     echo "welcome " . $_SESSION['uname']."<br>";
     echo " password is: " . $_SESSION['pass']."<br>";
     echo " Today is " . date("Y/m/d") . "<br>";
     echo "<p><a href= 'logout.php'> logout</a>";
     
     }
     
     else{ 
      echo "Invalid Password";
      echo "<p><a href= 'index.php'> try again</a>";
     
     }
     
     }
     else{
     echo  "Invalid Username";
     echo "<p><a href= 'index.php'> try again</a>";
    
     }
     
     }
// session_start();
	if(isset( $_POST['attempts'])){
	 //$_SESSION['attempts']++;
     $_SESSION['attempts'] = $_SESSION['attempts'] +1;
     echo "attempts are ".$_SESSION['attempts']; 
     echo "<br>"."Invalid UserName/Password";
}
     
     ?>
