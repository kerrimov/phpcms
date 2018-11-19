<?php 
	include("functions/dbconnect.php");
?>
<?php 
	$query = "SELECT * FROM comments WHERE post_id ='$post_new_id'";
	$result = mysqli_query($conn,$query);
	$count = mysqli_num_rows($result);
	echo "(".$count.")";
?>