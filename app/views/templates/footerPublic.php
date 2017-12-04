<?php
require_once('../app/core/utils.php');

if (isset($_SESSION['auth']) == 1) {
    header('Location: /home');
}
?>
<footer class="footer-Center"
<div class="footer">
	 <p>Copyright &copy; <?php echo date('Y'); ?> </p>
	 <p>Your total attempts are: <?=$data['message']?> </p>
  <h1 class="display-3">Find Us</h1>
  <p>welcome to the website - for any further questions - Please email us exampl@hotmail.com.</p>
  </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
</body>
</html>
