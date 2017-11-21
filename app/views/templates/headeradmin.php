<?php
if (isset($_SESSION['auth']) != 1) {
    header('Location: /home');
}
?>




<link href= "/css/style.css" rel="stylesheet" type="text/css"/>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="/home"><?php echo $_SESSION['name']?></a>
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
      <li class="nav-item">
        <a class="nav-link" href="/report/index">Reports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout/index">Logout</a>
      </li>
    </ul>
    
  </div>
</nav>