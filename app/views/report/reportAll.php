<?php require_once '../app/views/templates/header.php'?>
<h2>Members of Most Reminders</h2>
<table class='table table-striped table-condensed'>
	<tr>
		<th>username</th>
        <th>/emailaddress</th>
        <th>/birthdate</th>
        <th>/phonenumber</th>
        <th>/count</th>
	</tr>
    <?echo $data['list']?>
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            <td><?=$items['username']?></td>
            <td><?=$items['emailaddress']?></td>
            <td><?=$items['birthdate']?></td>
            <td><?=$items['phonenumber']?></td>
            <td><?=$items['count']?></td>
            <td><a href="/remind/edit/<?=$items['id']?>"><button type="button" class="btn btn-outline-info">See username Reminders</button></a>
			</td>
        </tr>
    <?php }?>
</table>
    <a href="/report/index"><button type="button" class="btn btn-outline-fist">Back to Reports</button></a>
<?php require_once '../app/views/templates/footer.php' ?>