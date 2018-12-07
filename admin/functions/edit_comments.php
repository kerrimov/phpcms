<?php
	$query = mysqli_query($conn, "SELECT * FROM comments");
	while ($row = mysqli_fetch_array($query)) {
	 	$id =$row['comment_id'];
	 	echo '<div class = "comm">';
	 	echo "<hr>";
	 	echo "<a class='deletecomm'href = 'functions/delete_comments.php?delete=$id'>Delete</a>";
	 	echo "<br>";
	 	echo "<span style='color:red;'>ID: </span>".$row['comment_id'];
	 	echo "<br>";
	 	echo "<span style='color:red;'>Name: </span>".$row['comment_name'];
	 	echo "<br>";
	 	echo "<span style='color:red;'>Email: </span>".$row['comment_email'];
	 	echo "<br>";
		echo "<span style='color:red;'>Comment: </span>".$row['comment_text'];;
	 	echo "<br>";
	 	echo "<span style='color:red;'>Date: </span>".$row['comment_date'];
	 	echo "<hr>";
	 	echo "</div>";
	 	echo "<br>";
	 } 
?>