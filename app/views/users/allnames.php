<?php require_once '../app/views/templates/header.php'?>
<h2>all name</h2>
<table class='table table-striped table-condensed'>
    <tr>
        <th> client name</th>
    </tr>
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            
            <td><?=$items['clientsname']?></td>
             <td><?=$items['fisrname']?></td>
            <td><?=$items['lastname']?></td>
            <td><?=$items['phonenumber']?></td>
            <td><?=$items['birthdate']?></td>
            
        </tr>
    <?php }?>
</table>
    
<?php require_once '../app/views/templates/footer.php' ?>