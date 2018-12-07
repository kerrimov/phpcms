<?php 
	include("../../functions/dbconnect.php");
?>
<?php
if (isset($_GET['delete'])){
	$delete = $_GET['delete'];
	$query = "DELETE FROM comments WHERE comment_id='$delete'";
	$remove = mysqli_query($conn, $query);
	echo "<script>alert('Comment deleted')</script>";
	echo "<script>window.open('../comment_page.php', '_self')</script>";
}
?>