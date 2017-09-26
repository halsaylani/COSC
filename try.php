     <?php
     
     $myarray = array("hussan","ali"); 
     $i=0;
     while($i<$myarray){
     if($_POST["username"] ==$myarray[$i]){
echo "welcome";
break;
}else{
echo "try again";
break;

}

}
?>
