<?php require_once '../app/views/templates/headerPublic.php' ?>
<html>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Please create an account</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="/login/register" method="post">
			    <fieldset>
		Username <input type="username"  name="name"><br>
  Password <input type="text" name="pass"><br/>
  email <input type="text" name="email"><br/>
   <input type = "submit" name = "rig" value = "Register">
</form>
</body>
</html>

    <?php require_once '../app/views/templates/footer.php' ?>
