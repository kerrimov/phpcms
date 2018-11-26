<?php
if (isset($_POST['logout'])) {
	unset($_SESSION['login']);
	session_destroy();
	echo "<script>window.open('../index.php','_self')</script>";
}
?>