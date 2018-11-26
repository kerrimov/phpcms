<?php 
	include("../../functions/dbconnect.php");
?>

<?php 
	if (isset($_POST['submit'])) {
		$login = $_POST['login'];
		$password =$_POST ['password'];
		$_SESSION['login']=$login;
		$check = "SELECT * FROM admins WHERE login='$login' AND password='$password'";
		$query = mysqli_query($conn, $check);

		if (mysqli_num_rows($query)>0) {
			echo "<script>window.open('../index.php','_self')</script>";
		}
		if (mysqli_num_rows($query)<1) {
			echo "<script>alert('Unable to log in. Please check that you have entered your login and password correctly.')</script>";
		}
	}
?>