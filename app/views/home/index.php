<?php require_once '../app/views/templates/header.php' ?>
<?php
if(isset($_SESSION['name'])){
     echo "welcome " . $_SESSION['name']."<br>";
     echo " Today is " . date("Y/m/d") . "<br>";
     echo "<p><a href= 'logout.php'> logout</a>";
}
?>

    <?php require_once '../app/views/templates/footer.php' ?>
