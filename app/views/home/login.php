<?php require_once '../app/views/templates/headerPublic.php' ?>
<html>
<body>
<form method="post" action="login/index">
  <fieldset>
    <h3>-welcome to the website</h3>
    <div class="form-group">
      <label for="exampleUsername">Username</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Username" type="username" name="name" required>
    </div>
  </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Password" type="password" name="pass" required>
    </div>
  </div>
    <button type="submit" name = "submit" class="btn btn-primary">Login</button>
  </fieldset>
</form>
</body>

</html>

    <?php require_once '../app/views/templates/footerPublic.php' ?>
