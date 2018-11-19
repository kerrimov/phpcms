<?php 
	include("functions/dbconnect.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Searching results</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
</head>
<body>
	<div class="container">
		<div class ="head">
			<img src="img/header.jpg" id="logo">
		</div>
		
		<div class="barmenu">
			<ul id="menu">
				<?php include ("includes/nav.php") ?>	
			</ul>

			<div id="form">
				<form method="get" action="result.php" enctype="multipart/form-data">
				<input style="border-radius: 7px;"type="text" name="searchquery">
				<input style="border-radius: 7px; background-color: #e8e8e8"type="submit" name="search" value="Search">
			</form>
			</div>	
		</div>	

		<div class="postarea">

			<?php
			if (isset($_GET['search'])) {
				$get_query = $_GET['searchquery'];
				$select = "SELECT * FROM post WHERE post_title  LIKE '%$get_query%'";
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
			</form>		
		</div>

		<div class="sbar">
			<?php include ("includes/sitebar.php")?>
		</div>

		<div class="foterarea">
			<?php include ("includes/footer.php")?>
		</div>
	</div>
	
</body>
</html>

