
<h1/> welcome to the website<h1 /h1>
<html>
<body>
<form method="post" action="try.php">
  <label for="username">Username</label>
  <input type="username"  name="uname"><br>
  Password <input type="text" name="pass"><br/>
  <input type = "submit" name = "submit" value="login!">
  <input type = "submit" name = "attempts" value = "attempts">
  
</form>
</body>
</html>
<?php
if(isset($_SESSION['is authenticated'])){
header("Location:welcome.php");
}
?>



