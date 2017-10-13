<?php

try {
    $conn = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
    if(isset($_POST['rig'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $insert=$conn->prepare("INSERT INTO users(username, password, email)
    						 values(:name,:pass,:email)");
    $insert->bindParam('name',$name);
    $insert->bindParam('email',$email);
    $insert->bindParam('pass',$pass);
    $insert->execute();
    header("location:index.php");
    
    }
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
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