<?php require_once '../app/views/templates/headerPublic.php' ?>
<html>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>You are not logged in! haha</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="/login/index" method="post"> <fieldset>
				<label for="username">Username</label>
  <input type="username"  name="name"><br>
  Password <input type="text" name="pass"><br/>
  <input type = "submit" name = "submit" value="login!">
  <input type = "submit" name = "attempts" value = "attempts">
   <?php echo "<p><a href= "/login/register"> Create an acount</a>";?>
</form>
</body>
</html>

    <?php require_once '../app/views/templates/footer.php' ?>
