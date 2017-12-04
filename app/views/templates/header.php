<?php
if (isset($_SESSION['auth']) != 1) {
    header('Location: /home');
}
?>
<head>
        <link href= "/css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="/favicon.png">
        <title>COSC 4806</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
    </head>



<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="/home"><?php echo $_SESSION['name']?>/</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../app/view/home/index">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/remind/index">Reminders</a>
      </li>
      <?php if($_SESSION['role']==1){?>
      <li class="nav-item">
        <a class="nav-link" href="/report/index">Reports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/manager/index">Add manager</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="/staff/index">Add staff</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/userslist/index">Users List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/clientslist/index">Clints List</a>
      </li>
      <?php } ?>
      <?php if($_SESSION['role']==2){?>
      <li class="nav-item">
        <a class="nav-link" href="/clientslist/index">Clints List</a>
      </li>
       <?php } ?>
       <li class="nav-item">
        <a class="nav-link" href="/profile/index">Custom reports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/phonelist/index">phone list</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/profile/index">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout/index">Logout</a>
      </li>
                     </ul>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" placeholder="Search" type="text">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>

</nav>

                      
         
