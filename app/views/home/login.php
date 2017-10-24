<?php require_once '../app/views/templates/headerPublic.php' ?>
<div>
                <h1>You are not logged in! haha</h1>
               
    </div>

    <div class="row">
        <h1/> welcome to the website<h1 /h1>
<html>
<body>
<form method="post" action="login/index">
  <label for="username">Username</label>
  <input type="username"  name="name"><br>
  Password <input type="text" name="pass"><br/>
  <input type = "submit" name = "submit" value="login!">
  <input type = "submit" name = "attempts" value = "attempts">
     <a href= "/login/register"> Create an account</a>
</form>
</div>

    <?php require_once '../app/views/templates/footer.php' ?>
