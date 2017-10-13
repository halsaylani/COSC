
 <?php
$servername = "localhost";
$username = "username";
$password = "password";

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 
<h1/> sing up form <h1 /h1>
<html>
<body>
<form method="post" action="rig.php">
  Username <input type="username"  name="uname"><br>
  Password <input type="text" name="pass"><br/>
  Repassword <input type="text" name="pass2"><br/>
  email <input type="text" name="email"><br/>
   <input type = "submit" name = "rig" value = "Register">
</form>
</body>
</html>