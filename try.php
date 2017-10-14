 

<?php
session_start();
try {
    $db = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    if(!isset($_SESSION['attempts'])){
     $_SESSION['attempts']=0;
     }

    if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $pass=$_POST['pass'];

      $isCorrect=password_verify($pass,$_POST['hash']);

      //$pass=md5($pass);
    if(empty($name) || empty($pass)){
        echo "Username/Password are Required";
       $_SESSION['attempts']++;
     echo "<br>"."attempts are ".$_SESSION['attempts'];
      echo "<p><a href= 'index.php'> TRY AGAIN</a>";
    }else{
        $query="SELECT * FROM users WHERE username=:name AND password=:pass";
        $statement=$db->prepare($query);
        $statement->execute(array(
            'name' => $_POST['name'],
            'pass' => $_POST['pass']
        ));
        $count=$statement->rowCount();
        if($count>0){
            $_SESSION['name']=$_POST['name'];
            $_SESSION['is authenticated']= true;
            header("location:welcome.php");
        }else{
          echo "Invalid username/password";
          $_SESSION['attempts']++;
     echo "<br>"."attempts are ".$_SESSION['attempts'];
          echo "<p><a href= 'index.php'> TRY AGAIN</a>";

        }
        
    }
    
    }
    
    }
catch(PDOException $e)
    {
    $message = $e->getMessage();
    }
    //$db = null;
    if(isset( $_POST['attempts'])){
     echo "attempts are ".$_SESSION['attempts'];
     echo "<p><a href= 'index.php'> HOME PAGE</a>"; 
}
?> 