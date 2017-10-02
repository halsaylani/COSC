<?php
	session_start();
	session_destroy();
	echo “see you again " . $_SESSION['uname'];
	echo "<p><a href= 'index.php'> Press here to login again</a>";
	


?>