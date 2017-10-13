 

<?php
session_start();
try {
    $db = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $pass=$_POST['pass'];
    if(empty($name) || empty($pass)){
        echo '<label>All fields are required</label>';
    }else{
        $query="SELECT * FROM users WHERE username=:name AND password=:pass";
        $statement=$db->prepare($query);
        $statement->execute(array(
            'name' => $_POST['name'],
            'pass' => $_POST['pass']
        ));
        $count=$statement->rowCount();
        if($count>0){
            $_SESSION['name']=$_POST['name'];
            header("location:welcome.php");
        }
        else{
            echo'<label>Wrong data</label>';
            echo "<p><a href= 'index.php'> home page</a>";
        }
    }
    
    }
    
    }
catch(PDOException $e)
    {
    $message = $e->getMessage();
    }
    //$db = null;
?> 