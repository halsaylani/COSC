<?php require_once '../app/views/templates/headerPublic.php' ?>
<html>
<body>
<form method="post" action="login/index">
  <fieldset>
    <legend>welcome to the website</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input class="form-control" placeholder="Username" type="username" name="name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input class="form-control" placeholder="Password" type="password" name="pass">
    </div>
    <button type="submit" name = "submit" class="btn btn-primary">Login</button>
    <a href= "/login/register"> Create an account</a>
  </fieldset>
</form>
</body>
</html>

    <?php require_once '../app/views/templates/footer.php' ?>
