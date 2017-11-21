
<?php require_once '../app/views/templates/header.php'?>
<h2> Total Of Users Logins are: <?php echo $data['list']?></h2>
<table class='table table-striped table-condensed'>
    <tr>
         <th>/username</th>
        <th>Num of logins</th>
        <th>Date</th>
       

    </tr>
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            <td><?=$items['username']?></td>
            <td><?=$items['islogin']?></td>
            <td><?=$items['timedate']?></td>
            
        </tr>
    <?php }?>
</table>
<?php require_once '../app/views/templates/footer.php' ?>