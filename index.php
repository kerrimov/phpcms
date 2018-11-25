<?php 
	include("functions/dbconnect.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title> Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">-->
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
				<input style="border-radius: 10px;"type="text" name="searchquery" placeholder="search article">
				<input style="border-radius: 10px; background-color: #e8e8e8;" type="submit" name="search" value="Search">
			</form>
			</div>	
		</div>	

		<div class="postarea">
			<div class="sta">
				<a class="addpost" href="functions/insert_post.php">Share new post</a>
				<?php include("includes/content.php")?>
			</div>			
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