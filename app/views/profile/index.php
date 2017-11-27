<?php require_once '../app/views/templates/header.php' ?>
<html>
<body>
<?php if(isset($data['message'])){?>
     <div class="alert alert-dismissible alert-danger"><?=$data['message']?></div>
      <?php } ?>
      <?php if(isset($data['successfully'])){?>
     <div class="alert alert-dismissible alert-success"><?=$data['successfully']?></div>
      <?php } ?>
  <form method="post" action="profile/index">
  <fieldset>
    <h1>update your profile</h1>
    <h1<?=$data['message']?></h1>
    <div class="form-group">
      <label for="exampleUsername">First Name</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="First Name" type="text" name="fname" >
    </div>
  </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Last Name</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Last Name" type="text" name="lname" >
    </div>
     <div class="form-group">
      <label for="exampleInputPassword1">Email Address</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Email Address" type="text" name="email" >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Phone Number</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Phone Number" type="tel" name="pnumber" >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Birth Date</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Birth Date" type="date" name="bdate" >
    </div>
  </div>
  </fieldset>
     <button type="submit" name = "update" class="btn btn-primary">update</button>
</form>
</body>
</html>
    <?php require_once '../app/views/templates/footer.php' ?>