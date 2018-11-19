<?php 
	include("dbconnect.php");
?>

<?php 
	if (isset($_POST['comment_text'])) {
		$post_com_id = $post_new_id;
		$comment_name = $_POST['comment_name'];
		$comment_email = $_POST['comment_email'];
		$comment_text = $_POST['comment_text'];

		if ($comment_name == '' or $comment_email == '' or $comment_text == '') {
			echo "<script>alert ('Empty fields!')</script>";
		}
		else{
			$query_comment = "INSERT INTO comments (post_id, comment_name, comment_email, comment_text, comment_date) VALUES ('$post_new_id', '$comment_name', '$comment_email','$comment_text',now())"; 
			$run_query = mysqli_query($conn, $query_comment);	
			if ($run_query) {
				echo "<script>alert ('Comment successfully added!')</script>";
			}	
		}
	}
?>
 

<?php
	$query = "SELECT * FROM comments WHERE post_id = '$post_new_id'";
	$show_comment = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_array($show_comment)) { 
		$name = $row['comment_name'];
		$text = $row['comment_text'];
		$date = $row['comment_date'];

		echo "<hr><div style='width_350px; height:100%; background-color: #ffffff; border-radius: 10px; margin: 0 auto; padding: 10px 10px 10px 10px'>
			  <p><span style='color: red';>User: </span>$name<p>
			  <p><span style='color: red';>Date: </span>$date<p>
			  <p><span style='color: red';>Comment: </span><i>$text</i><p>
			  </div>
			  ";
	}
?>