
<?php require_once '../app/views/templates/header.php'?>
<h2>Your Reminders</h2>
<table class='table table-striped table-condensed'>
	<tr>
		<th>Subject</th>
		<th>/description</th>
	</tr>
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            <td><?=$items['subject']?></td>
            <td><?=$items['description']?></td>
            <td><a href="/remind/edit/<?=$items['id']?>"><button type="button" class="btn btn-outline-info">Edit</button></a>
			</td>
        </tr>
    <?php }?>
</table>
<a href="/remind/add"><button type="button" class="btn btn-outline-success">New Reminder</button>
</a>
<?php require_once '../app/views/templates/footer.php' ?>