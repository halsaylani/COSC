<?php require_once '../app/views/templates/header.php'?>
<h2>phone or name list</h2>
<table class='table table-striped table-condensed'>
	<tr>
        <th>client name</th>
        <th>/client email</th>
        <th>/client phone num</th>
        <th>/client birth date</th>
        <th>/roled by </th>
        <th>/added by</th>
        <th>/since</th>
    </tr>
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            <td><?=$items['clientsname']?></td>
            <td><?=$items['emailaddress']?></td>
            <td><?=$items['phonenumber']?></td>
            <td><?=$items['birthdate']?></td>
            <td><?=$items['byrole']?></td>
            <td><?=$items['byusername']?></td>
            <td><?=$items['timedate']?></td>
        </tr>
    <?php }?>
</table>
    <a href="/home/"><button type="button" class="btn btn-outline-fist">home </button></a>
<?php require_once '../app/views/templates/footer.php' ?>