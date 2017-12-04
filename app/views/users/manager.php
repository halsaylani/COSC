<?php require_once '../app/views/templates/header.php' ?>
<html>

<body>
  <?php if(isset($data['message'])){?>
     <div class="alert alert-dismissible alert-danger"><?=$data['message']?></div>
      <?php } ?>
      <?php if(isset($data['successfully'])){?>
     <div class="alert alert-dismissible alert-success"><?=$data['successfully']?></div>
      <?php } ?>
      <script src="/js/emailvalidation.js"></script>
  <form method="post" action="manager/index">
  <fieldset>
    <h1> New manager</h1>
 
    <div class="form-group">
      <label for="exampleUsername">First Name</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="First Name" type="text" name="mfname" required>
    </div>
  </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Last Name</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Last Name" type="text" name="mlname" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Password" type="text" name="mpass" required>
    </div>
     <div class="form-group">
      <label for="exampleInputPassword1">Email Address</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Email Address" type="text" id="txtEmail" name="memail"onchange="ValidateEmail(this.value);" >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Phone Number</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Phone Number" type="tel" name="mpnumber" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Birth Date</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Birth Date" type="date" name="mbdate" required>
    </div>
  </div>
  </fieldset>
     <button type="submit" name = "add" class="btn btn-primary">add Manager</button>
     
</form>
</body>
</html>
    <?php require_once '../app/views/templates/footer.php' ?>
