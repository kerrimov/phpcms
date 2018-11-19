<!--<h2 class="recent" style="color: #black;">Recent Stories</h2>
<h2 style="color: red;"><a href="detals.php?post=$post">News</a></h2>
<img src="images/photo2.jpg"width="100"height="100">-->
 <?php 
	include("functions/dbconnect.php");
?>

<?php
echo "<h2 class='recent' style='color:'#f9f9f9;'>Recent Stories</h2>";

$select = "SELECT * FROM post ORDER BY 1 DESC LIMIT 0,5";
$q = mysqli_query($conn,$select);

while($row = mysqli_fetch_array($q)){
	$category_id = $row['category_id'];
	$post_id = $row['post_id'];
	$title =$row['post_title'];
	$image = $row['post_image'];
	$content = substr($row['post_content'],0, 15);
	$author = $row['post_author'];
	$date = $row['post_date'];

	echo "<div style ='background: #f9f9f9'; width: 200px; margin: 0 auto; padding:5px, 5px, 5px,5px'>";	
	echo "<h2><a href='details.php?post=$post_id'>$title</a></h2>";
	echo "<img src='news_images/$image'width='150'height='100'>";
	echo "</div>";
	echo "<br>";
}
?>	
