<?php require_once '../app/views/templates/header.php'?>
<h2>Members of Most Reminders</h2>
<table class='table table-striped table-condensed'>
	<tr>
		<th>username</th>
		<th>/Num of reminders</th>
	</tr>
         <?php   for ($i = 0; $i < sizeof($data['list']); $i += 1) { ?>
          <?php   if ($data['list'][$i]['username'] == $username) { ?>
              <?php  $data['list'] = $data['list'][$i];?>
            
        

<?php }?>
<?php }?>
    
</table>
    <a href="/report/index"><button type="button" class="btn btn-outline-fist">Back to Reports</button></a>
<?php require_once '../app/views/templates/footer.php' ?>