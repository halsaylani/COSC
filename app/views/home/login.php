<?php require_once '../app/views/templates/headerPublic.php' ?>
<head>
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head> 
    <div class="row">
        <h1/> welcome to the website<h1 /h1>
<html>
<body>
<form method="post" action="login/index">
  <label for="username">Username</label>
  <input type="username"  name="name"><br>
  Password <input type="text" name="pass"><br/>
  Email <input type="text" name="email"><br/>
  <input type = "submit" name = "submit" value="login!">
     <a href= "/login/register"> Create an account</a>
</form>
</div>

    <?php require_once '../app/views/templates/footer.php' ?>
