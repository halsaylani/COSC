<?php require_once '../app/views/templates/header.php' ?>
<h1> choose a phone list </h1>
<?php if($_SESSION['role']==2||$_SESSION['role']==1 ){?>
<a href="/phonelist/staffphonelist"><button type="button" class="btn btn-outline-secondary">staffs list</button></a> 
<?php }?>
<?php if(!$_SESSION['role']==1 ){?>
<a href="/phonelist/managerphonelist"><button type="button" class="btn btn-outline-secondary">managers list</button></a> 
<?php }?>
<a href="/phonelist/clientsphonelist"><button type="button" class="btn btn-outline-secondary">clints list</button></a> 

<?php require_once '../app/views/templates/footer.php' ?>