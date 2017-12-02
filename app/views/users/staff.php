<?php require_once '../app/views/templates/header.php' ?>
<html>
<body>
  <?php if(isset($data['message'])){?>
     <div class="alert alert-dismissible alert-danger"><?=$data['message']?></div>
      <?php } ?>
      <?php if(isset($data['successfully'])){?>
     <div class="alert alert-dismissible alert-success"><?=$data['successfully']?></div>
      <?php } ?>
  <form method="post" action="staff/index">
  <fieldset>
    <h1> New staff</h1>
    <div class="form-group">
      <label for="exampleUsername">First Name:</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="First Name" type="text" name="sfname"  required>
    </div>
  </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Last Name:</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Last Name" type="text" name="slname" required>
    </div>
     <div class="form-group">
      <label for="exampleInputPassword1">Email Address:</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Email Address" type="text" name="semail" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Phone Number:</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Phone Number" type="tel" name="spnumber" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Birth Date:</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Birth Date" type="date" name="sbdate" required>
    </div>
    Assing Manager for The staff:
    <div class="form-group">
      <label for="exampleInputPassword1">Manager Name:</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Manager Name" type="text" name="mname" >
    </div>
  </div>
  </fieldset>
     <button type="submit" name = "add" class="btn btn-primary">add Staff</button>
</form>
</body>
</html>
    <?php require_once '../app/views/templates/footer.php' ?>
