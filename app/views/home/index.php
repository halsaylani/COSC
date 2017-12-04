<?php require_once '../app/views/templates/header.php' ?>
		<div>	
            <p> <?=$data['message']?> </p>
        </div>
        <br>
<?php if($_SESSION['role']==1 || $_SESSION['role']==2||$_SESSION['role']==3){?>
<a href="/clientsinfo/index"><button type="button" class="btn btn-outline-secondary">add a new Client</button></a> 
<?php } ?>
    <?php require_once '../app/views/templates/footer.php' ?>
