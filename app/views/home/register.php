<?php require_once '../app/views/templates/headerPublic.php' ?>
<html>
<body>
    <form method="post" action="/login/register">
      <fieldset>
    <h1>sing up here</h1>
    <div class="form-group">
      <label for="exampleInputUsername">Username</label>
      <input class="form-cotrol" placeholder="Username" type="username" name="name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input class="fom-control" placeholder="Password" type="password" name="pass">
    </div>
    <button type="submit" name = "rig" class="btn btn-primary">Register</button>
    <a href= "../app/views/login.php"> login</a>
  </fieldset>
</form>
</body>
</html>
    <?php require_once '../app/views/templates/footerPublic.php' ?>
