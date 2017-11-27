<?php require_once '../app/views/templates/header.php'?>
<h2>Choose a date to finde a reminder</h2>
    
    <form action="/report/remindersdates" method="post" >
    <input class="form-control" placeholder="2017/1/3" type="text" name="year">
    <input class="form-control" placeholder="2017/2/3" type="text" name="hours">
    <button type="submit" name = "find" class="btn btn-outline-secondary">Find</button>
</form>
<a href="/report/index"><button type="button" class="btn btn-outline-fist">Back to Reports</button></a>
<?php require_once '../app/views/templates/footer.php' ?>