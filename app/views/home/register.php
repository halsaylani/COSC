<?php require_once '../app/views/templates/headerPublic.php' ?>
 <head>
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head> 
        <div class="row">
            <div class="col-lg-12">
                <h1>sing up here</h1>
           
    <form method="post" action="/login/register">
  Username <input type="username"  name="name"><br>
  Password <input type="text" name="pass"><br/>
  email <input type="text" name="email"><br/>
   <input type = "submit" name = "rig" value = "Register">
   <a href= "../app/views/login.php"> login</a>
</form>
    </div>

    <?php require_once '../app/views/templates/footer.php' ?>
