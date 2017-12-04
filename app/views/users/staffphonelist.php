<?php require_once '../app/views/templates/header.php'?>
<h2>staff list</h2>
<table class='table table-striped table-condensed'>
	<tr>
        <th>Staff name</th>
        <th>/Staff phone num</th>
    </tr>
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            <td><?=$items['firstname']?></td>
            <td><?=$items['phonenumber']?></td>
            
        </tr>
    <?php }?>
</table>
    <a href="/phonelist/index"><button type="button" class="btn btn-outline-fist">Back </button></a>
<?php require_once '../app/views/templates/footer.php' ?>