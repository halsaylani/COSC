<?php
require_once('../app/core/utils.php');

if (isset($_SESSION['auth']) == 1) {
    header('Location: /home');
}
?>
<html>
<head>
    <link href= "/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <title>H M S</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarColor01">
  <p class="text-center">H M S</p>
</div>

  <div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="text-success" href="../app/views/login.php">sing in</a>
      </li>
    </div>
      <li class="nav-item">
        <a class="text-success" href="/login/register">sing up</a>
      </li>
    </ul>
</nav>

</html>
