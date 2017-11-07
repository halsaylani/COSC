<?php require_once '../app/views/templates/header.php'?>

<h2>Update Reminder</h2>


<form method="post" action="remind/updateReminder">
Subject:
<input type="text" name="subject" value="<?=$data['item'][0]['subject']?>">
Description:
<input type="text" name="description" value="<?=$data['item'][0]['description']?>">

<button type="submit" name="update";> Update </button>
<a href="/home/edit">back</a>

</form>