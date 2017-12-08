<?php require_once '../app/views/templates/header.php' ?>
<html>
<h4>-New staff Member:</h4>
<body>
  <?php if(isset($data['message'])){?>
     <div class="alert alert-dismissible alert-danger"><?=$data['message']?></div>
      <?php } ?>
      <?php if(isset($data['successfully'])){?>
     <div class="alert alert-dismissible alert-success"><?=$data['successfully']?></div>
      <?php } ?>
      
       <script src="/js/emailvalidation.js"></script>
  <form method="post" action="staff/index">
  <fieldset>
    <div class="form-group">
    <div class="form-group">
      <div class="col-lg-3">
        <label for="exampleUsername">First Name:</label>
      <input class="form-control" placeholder="First Name" type="text" name="sfname"  required>
    </div>
  </div>

    <div class="form-group">
      <div class="col-lg-3">
         <label for="exampleInputPassword1">Last Name:</label>
      <input class="form-control" placeholder="Last Name" type="text" name="slname" required>
    </div>
     </div>

     <div class="form-group">
      
      <div class="col-lg-3">
        <label for="exampleInputPassword1">Email Address:</label>
      <input class="form-control" placeholder="Email Address" onchange="ValidateEmail(this.value);" id="txtEmail" type="text" name="semail" required>
      <small id="email" class="text-warning">
      Make suer its @algomau.ca
    </small>
    </div>
     </div>
     <div class="form-group">
      
      <div class="col-lg-3">
        <label for="exampleInputPassword1">Manager Name:</label>
      <input class="form-control" placeholder="Manager Name" type="text" name="mname"  >
      <small id="managerneeds" class="text-warning">
      Assign Manager for the staff Member.
    </small>
    </div>
  </div>

    <div class="form-group">
      <div class="col-lg-3">
        <label for="exampleInputPassword1">Phone Number:</label>
      <input class="form-control" placeholder="Phone Number" type="tel" name="spnumber" required>
      <small id="digits" class="text-warning">
      be sure its 10 digits.
    </small>
    </div>
     </div>
    
     <div class="form-group">
      <div class="col-lg-3">
         <label for="exampleInputPassword1">Password</label>
      <input class="form-control" placeholder="Password" type="text" name="spass" required>
      <small id="characters" class="text-warning">
      Must be 8-20 characters long.
    </small>
    </div>
     </div>

    <div class="form-group">
      <div class="col-lg-3">
           <label for="exampleInputPassword1">Birth Date:</label>
      <input class="form-control" placeholder="Birth Date" type="date" name="sbdate" required>
      <small id="over18" class="text-warning">
      Must be over 18.
    </small>
    </div>
     </div>
   </div>

  </fieldset>
     <button type="submit" name = "add" class="btn btn-primary">add Staff</button>
</form>
</body>
</html>
    <?php require_once '../app/views/templates/footer.php' ?>
