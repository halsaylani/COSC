
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
            <td><a href="/remind/edit/<?=$items['id']?>">edit</a>
			</td>
        </tr>

    <?php }?>
</table>
<a href="../app/view/home/index">back</a> <br> <a href="/remind/add">New reminder</a>