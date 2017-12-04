<?php require_once '../app/views/templates/headerPublic.php' ?>
<?php if(isset($data['message'])){ ?>
    <div class="alert alert-dismissible alert-danger"><?=$data['message']?></div>
  <?php } ?>
<html>
<body>
    <form method="post" action="/login/register">
      <fieldset>
    <h1>sing up here</h1>
    <div class="form-group">
      <label for="exampleInputUsername" > Username</label>
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
    <button type="submit" name = "rig" class="btn btn-primary">Register</button>
    <a href= "../app/views/login.php"> login</a>
  </fieldset>
</form>
</body>
</html>
    <?php require_once '../app/views/templates/footerPublic.php' ?>
