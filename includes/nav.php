<!--<li><a href="">Home Page</a></li>
	<li><a href="">Menu</a></li>
	<li><a href="">Comments</a></li>
	<li><a href="">Log in</a></li>-->

 <a href="index.php">Home Page</a>

<?php
	$mq = "SELECT * FROM category";
	$query = mysqli_query($conn,$mq);

	while ($row = mysqli_fetch_array($query)) {
	 	$catid = $row['cat_id'];
	 	$cattitle = $row['cat_title'];
	 	echo "<li><a href='index.php?cat=$catid'>$cattitle</a></li>";
	 }
?>

<a href="contact.php">Contact</a>

<a class="login" href="admin/index.php">Log in</a>
