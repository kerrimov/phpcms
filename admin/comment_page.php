<?php
	session_start();
	if (!$_SESSION['login']) {
		echo "<script>window.open('functions/login.php','_self')</script>";
	}
?>
<?php 
	include("../functions/dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Comments</title>
	<link rel="stylesheet" type="text/css" href="../css/adminstyle.css">
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
</head>
<body>
	<div class="container">
		<div class ="head">
			<img src="../img/header.jpg" id="logo">
		</div>
		
		<div class="barmenu">
			<ul id="menu">
				<a href="index.php">Home Page</a>
				<a href="functions/add_article.php">Add article</a>
				<a href="edit_post.php">Edit article</a>
				<a href="add_category.php">Add category</a>
				<a href="comment_page.php">Edit comments</a>					
			</ul>

			<div id="form">
				<form method="get" action="../result.php" enctype="multipart/form-data">
				<input style="border-radius: 10px;"type="text" name="searchquery" placeholder="search article">
				<input style="border-radius: 10px; background-color: #e8e8e8;" type="submit" name="search" value="Search">
			</form>
			</div>	
		</div>	

		<div class="postarea">
			<h2 align="center" style="color: #00000; font-family:MV Boli">Edit comments</h2>
			<?php include("functions/edit_comments.php") ?>
		</div>
		<div class="foterarea">
			<p align="center"> 2018 &copy; <a href="../index.php">designed by kerrimov</a> </p>
		</div>
	</div>
	
</body>
</html>