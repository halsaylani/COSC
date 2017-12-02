<?php require_once '../app/views/templates/header.php' ?>
		<div>	
            <p> <?=$data['message']?> </p>
        </div>
        <br>
<?php if($_SESSION['role']==1 || $_SESSION['role']==2||$_SESSION['role']==3){?>
<fieldset>
    <h1> Enter user information</h1>
    <h2>role is: <?=$_SESSION['role']?></h2>
    <div class="form-group">
      <label for="exampleUsername">Client's Name</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Client's Name" type="text" name="cname" >
    </div>
  </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Province</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Province" type="text" name="pro" >
    </div>
     <div class="form-group">
      <label for="exampleInputPassword1">Email Address</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Email Address" type="text" name="cemail" >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Phone Number</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Phone Number" type="tel" name="cnumber" >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Birth Date</label>
      <div class="col-lg-3">
      <input class="form-control" placeholder="Birth Date" type="date" name="cdate" >
       <div class="form-group">
      <label for="exampleSelect1">Province</label>
      <select class="form-control" id="">
        <option value="Ontario">ON</option>
        <option value="Alberta">AB</option>
        <option value="NS">NS</option>
      </select>
    </div>
  </div>
  <?php foreach ($data['list'] as $items){ ?>

      
   
        <option><?=$items['city']?></option>

      

    <?php }?>
   

  </div>

  </fieldset>
  <button type="submit" name = "add" class="btn btn-primary">add</button>
<?php } ?>
    <?php require_once '../app/views/templates/footer.php' ?>
