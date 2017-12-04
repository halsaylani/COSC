<?php require_once '../app/views/templates/header.php'?>
<h2>staff list</h2>
<table class='table table-striped table-condensed'>
	<tr>
        <th>manager name</th>
        <th>/manager lastname</th>
        <th>/manager email</th>
        <th>/manager phone num</th>
        <th>/manager birth date</th>
        <th>/manager role</th>
    </tr>
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            <td><?=$items['firstname']?></td>
            <td><?=$items['lastname']?></td>
            <td><?=$items['emailaddress']?></td>
            <td><?=$items['phonenumber']?></td>
            <td><?=$items['birthdate']?></td>
            <td><?=$items['role']?></td>
            
        </tr>
    <?php }?>
</table>
    <a href="/userslist/index"><button type="button" class="btn btn-outline-fist">Back </button></a>
<?php require_once '../app/views/templates/footer.php' ?>