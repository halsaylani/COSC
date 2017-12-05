<?php require_once '../app/views/templates/header.php'?>
<h2>who are over 18</h2>
<table class='table table-striped table-condensed'>
    <tr>
        <th>first name </th>
        <th>last name </th>
        <th>phone number </th>
        <th>birth date </th>
    </tr>
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            
            <td><?=$items['fisrname']?></td>
            <td><?=$items['lastname']?></td>
            <td><?=$items['phonenumber']?></td>
            <td><?=$items['birthdate']?></td>
        </tr>
    <?php }?>
</table>
    
<?php require_once '../app/views/templates/footer.php' ?>