<?php

try {
    $db = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
    if(isset($_POST['rig'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass1=$_POST['pass'];
    $hash=password_hash($pass1,PASSWORD_DEFAULT);// hash password for security
    //$pass=md5($pass);// hash password
    $insert=$db->prepare("INSERT INTO users(username, password, email)
    						 values(:name,:pass,:email)");
    $insert->bindParam('name',$name);
    $insert->bindParam('email',$email);
    $insert->bindParam('pass',$pass1);
    $insert->execute();
    header("location:index.php");
    
    }
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    $db = null;
?> 

<h1/> sing up<h1 /h1>
<html>
<body>
<form method="post" action="rig.php">
  Username <input type="username"  name="name"><br>
  Password <input type="text" name="pass"><br/>
  email <input type="text" name="email"><br/>
   <input type = "submit" name = "rig" value = "Register">
</form>
</body>
</html>