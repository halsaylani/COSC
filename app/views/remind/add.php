<?php require_once '../app/views/templates/header.php'?>
<html>
<head>
    <title>Add New Reminder</title>
</head> 
<body>
    <br/><br/>
    <form action="/remind/add" method="post" >
        
            <div class="form-group">
      <label for="Subject">Subject</label>
      <input class="form-control" placeholder="Subject" type="text" name="subject">
    </div>
    <div class="form-group">
      <label for="Description">Description</label>
      <input class="form-control" placeholder="Description" type="text" name="description">
    </div>
    <button type="submit" name = "add" class="btn btn-outline-secondary">Add</button>
        <a href="/remind/index"><button type="button" class="btn btn-outline-secondary">To Reminders</button></a> 
    </form>
</body>
</html>
<?php require_once '../app/views/templates/footer.php' ?>