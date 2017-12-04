<?php require_once '../app/views/templates/header.php'?>
<h2>client list</h2>
<table class='table table-striped table-condensed'>
	<tr>
        <th>client name</th>
        <th>/client phone num</th>
    </tr>
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            <td><?=$items['clientsname']?></td>
            <td><?=$items['phonenumber']?></td>
            
        </tr>
    <?php }?>
</table>
    <a href="/phonelist/index"><button type="button" class="btn btn-outline-fist">Back </button></a>
<?php require_once '../app/views/templates/footer.php' ?>