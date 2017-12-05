<?php require_once '../app/views/templates/header.php' ?>

  <?php if(isset($data['successfully'])){ ?>
    <div class="alert alert-dismissible alert-success"><?=$data['successfully']?></div>
  <?php } ?>
  <?php if(isset($data['message'])){ ?>
    <div class="alert alert-dismissible alert-danger"><?=$data['message']?></div>
  <?php } ?>
  <script src="/js/emailvalidation.js"></script>
  <script src="/js/phonevalidation.js"></script>
<form method="post" action="clientsinfo/index" >
<fieldset>
    <h1> Enter client informations</h1>
    <h2>your role is: <?=$_SESSION['role']?></h2>
    <div class="form-group">
      <label for="exampleUsername">Client's Name</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Client's Name" type="text" name="cname" >
    </div>
  </div>
     <div class="form-group">
      <label for="emailaddress">Email Address</label>
      <div class="col-lg-3">
      <input  class="form-control" placeholder="Email Address" type="text" name="cemail" id="txtEmail" onchange="ValidateEmail(this.value);"> 
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Password" type="text" name="cpass" required>
    </div>
    <div class="form-group">
      <label for="phonenumber">Phone Number</label>
      <div class="col-lg-3">
      <input class="form-control" id="phone" onchange="ValidatePhone(this.value);" placeholder="Phone Number" type="tel" name="cpnumber" >
    </div>
    div class="col-lg-2">

                        <select class="form-control" id="province" name="province" onchange="fetch_city(this.value);">

<option>Select Province</option>

<option value="Ontario">Ontario</option>

<option value="NS">Nova Scotia</option>

<option value="Alberta">Alberta</option>                        

</select>

                    </div>

                </div>
    <div class="form-group">
      <label for="birthdate">Birth Date</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Birth Date" type="date" name="cbdate" >
       <div class="form-group">
        <textarea rows="4" cols="50" name="comments">comments...
</textarea>
  </fieldset>
  <button type="submit" name = "add" class="btn btn-primary" >add</button>
</form>
    <?php require_once '../app/views/templates/footer.php' ?>
    
