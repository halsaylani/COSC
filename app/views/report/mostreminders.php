<?php require_once '../app/views/templates/header.php'?>
<h2>Members of Most Reminders</h2>
<table class='table table-striped table-condensed'>
	<tr>
		<th>username</th>
		<th>/Number Of Reminders</th>
	</tr>
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            <td><?=$items['username']?></td>
            <td><?=$items['numberofreminders']?></td>
            <td><a href="/remind/edit/<?=$items['id']?>"><button type="button" class="btn btn-outline-info">See username Reminders</button></a>
			</td>
        </tr>
    <?php }?>
</table>
<?php require_once '../app/views/templates/footer.php' ?>