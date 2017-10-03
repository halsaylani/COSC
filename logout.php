<?php
	session_start();
	session_destroy();
	echo "I hope you enjoy our website " . $_SESSION['uname'];
	echo "<p><a href= 'index.php'> Press here to login again</a>";
	


?>