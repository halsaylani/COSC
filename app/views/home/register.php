<?php require_once '../app/views/templates/headerPublic.php' ?>
<html>
<body>
    <form method="post" action="/login/register">
      <fieldset>
    <legend>sing up here</legend>
    <div class="form-group">
      <label for="exampleInputUsername">Username</label>
      <input class="form-control" placeholder="Username" type="username" name="name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input class="form-control" placeholder="Password" type="password" name="pass">
    </div>
    <button type="submit" name = "rig" class="btn btn-primary">Register</button>
    <a href= "../app/views/login.php"> login</a>
  </fieldset>
</form>
</body>
</html>
    <?php require_once '../app/views/templates/footer.php' ?>
