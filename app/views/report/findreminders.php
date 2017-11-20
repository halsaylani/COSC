
<?php require_once '../app/views/templates/header.php'?>
<h2> As Requested</h2>
<table class='table table-striped table-condensed'>
	<tr>
		<th>Subject</th>
		<th>/descrsssssiption</th>
		<th>/username</th>

	</tr>

	<?php echo $data['list']?>
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            <td><?=$items['subject']?></td>
            <td><?=$items['description']?></td>
            <td><?=$items['username']?></td>
            <td><a href="/remind/edit/<?=$items['id']?>"><button type="button" class="btn btn-outline-info">Edit</button></a>
			</td>
        </tr>
    <?php }?>
</table>
<?php require_once '../app/views/templates/footer.php' ?>