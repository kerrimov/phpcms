<?php 
	include("functions/dbconnect.php");
?>
<?php 
	if (isset($_GET['post'])){
		$post_id = $_GET['post'];
		$get_post = "SELECT * FROM post WHERE post_id = '$post_id'";
		$run = mysqli_query($conn,$get_post);

		while ($row = mysqli_fetch_array($run)) {
			$post_new_id = $row['post_id'];
			$post_title = $row['post_title'];
			$post_date = $row['post_date'];
			$post_author = $row['post_author'];
			$post_image = $row['post_image'];
			$post_content = $row['post_content'];
			
			echo "<div class='sta'>
			<h2 style='color: #000000;'>$post_title</h2>
			<img src='news_images/$post_image'width='650'height='400'>
			<p>$post_content</p>
			<span style ='color: #000000;'>Publish by: <i><b>$post_author</b></i> &nbsp;&nbsp;</span>
			</div>";
			}	
		}
?>