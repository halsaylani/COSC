<?php require_once '../app/views/templates/header.php'?>

<h2>edit Reminder </h2>

<table class='table table-striped table-condensed'>
	<tr>
		<th>Subject</th>
		<th>description</th>
		<th>Action</th>
	</tr>
	
    <?php foreach ($data['item'] as $items){ ?>
        <tr>
            <td><?=$items['subject']?></td>
            <td><?=$items['description']?></td>
			<td><a href="/remind/remove/<?=$items['id']?>">Remove</a> | 
				<a href="/remind/<?=$items['id']?>">View</a> | 
				<a href="/remind/update/<?=$items['id']?>">Update</a>

			</td>
        </tr>

    <?php }?>
</table>
<a href="/home/index">back</a>
