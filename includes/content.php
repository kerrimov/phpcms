<!--<h2 style="color: red;"><a href="">Stories</a></h2>
<img src="images/photo3.jpg"width="200"height="200">
<p>Он ушел, но обещал вернуться <a href="">Read more... </a></p>
<span style="color: black;">Publish: <i><b>Togrul Kerimov</b></i> &nbsp; &nbsp; </span><span style="color: black;">Date: 28/10/2018</span style="color: red;"><span>&nbsp;</span>-->
 <?php 
	include("functions/dbconnect.php");
?>
<?php
if (!isset($_GET['cat'])) {
	$select = "SELECT * FROM post ORDER BY rand() LIMIT 0,5";
	$q = mysqli_query($conn,$select);
	while($row = mysqli_fetch_array($q)){
		$category_id = $row['category_id'];
		$post_id = $row['post_id'];
		$title =$row['post_title'];
		$image = $row['post_image'];
		$content = substr($row['post_content'],0, 250);
		$author = $row['post_author'];
		$date = $row['post_date'];

		echo "<div style='background-color: #f9f9f9; width: 600px; margin: 0 auto; padding: 10px 10px 10px 10px; border-radius:22px;'>";
		echo "<h2><a style='color: #003791'; href='details.php?post=$post_id'>$title</a></h2>";
		echo "<img src='news_images/$image' width='500' height='300'>";
		echo "<p>$content<a style='color: black'; href='details.php?post=$post_id'><b> ...Read more</b></a></p>";
		echo "<p style='color: #2f3e42'><b>Name: $author <br> Date: $date</b></p></div>";
	}
}
else{
	include("includes/cat_post.php");
} 
?>