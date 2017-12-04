<?php require_once '../app/views/templates/header.php'?>

<h2>Update Your Reminder</h2>


<form method="post" action="remind/update">
<label for="id">Id</label>
<input class="form-control" placeholder="Id" type="text" name="id" value="<?=$data['item'][0]['id']?>">

<label for="Subject">Subject</label>
<input class="form-control" placeholder="Subject" type="text" name="subject" value="<?=$data['item'][0]['subject']?>">
<label for="Description">Description</label>
<input class="form-control" placeholder="Description" type="text" name="description" value="<?=$data['item'][0]['description']?>">
<button type="submit" name = "update" class="btn btn-outline-secondary">Update</button>
</form>
<?php require_once '../app/views/templates/footer.php'?>