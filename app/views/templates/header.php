<?php
if (isset($_SESSION['auth']) != 1) {
    header('Location: /home');
}
?>
<head>
        <link href= "/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="/favicon.png">
        <title>H M S..</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>     </head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="collapse navbar-collapse" id="navbarColor01">
  <a class="navbar-brand" href="/home"><?php echo $_SESSION['name']?></a>
</div>
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
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Add
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/manager/index">Manager Member</a>
          <a class="dropdown-item" href="/staff/index">Staff Member</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          See
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/userslist/index">Users List</a>
          <a class="dropdown-item" href="/clientslist/index">Clints List</a>
        </div>
      </li>
      <?php } ?>
      <?php if($_SESSION['role']==2){?>
      <li class="nav-item">
        <a class="nav-link" href="/clientslist/index">Clints List</a>
      </li>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="/staff/index">Add staff</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/staffreports/index">Staff reports</a>
      </li>
       <?php } ?>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          phone list
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/phonelist/staffphonelist">Staff List</a>
          <a class="dropdown-item" href="/phonelist/managerphonelist">Managers List</a>
          <a class="dropdown-item" href="/phonelist/clientsphonelist">Clients List</a>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="/customreports/index">Custom reports</a>
      </li>
    </div>
   </ul>
   <ul class="navbar-nav mr-auto">
   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          settings
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/profile/index">Profile</a>
          <a class="dropdown-item" href="/logout/index">Logout</a>
        </div>
      </li>
    </ul>
      <form class="form-inline my-2 my-lg-0" action="/search/index" method="post">
      <input class="form-control mr-sm-2" placeholder="Search*" name="Search" type="text">
      <button class="hide" name="search" type="submit"></button>
    </form>
</nav>