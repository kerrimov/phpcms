<?php
	session_start();
?>
<?php 
	include("../../functions/dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../../css/adminstyle.css">
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
</head>
<body>
	<div class="container">
		<div class ="head">
			<img src="../../img/header.jpg" id="logo">
		</div>
		
		<div class="barmenu">
			<ul id="menu">
				<a href="../index.php">Home Page</a>
				<a href="add_article.php">Add article</a>
				<a href="edit_post.php">Edit article</a>
				<a href="add_category.php">Add category</a>
				<a href="../comment_page.php">Edit comments</a>					
			</ul>

			<div id="form">
				<form method="get" action="../../result.php" enctype="multipart/form-data">
				<input style="border-radius: 10px;"type="text" name="searchquery" placeholder="search article">
				<input style="border-radius: 10px; background-color: #e8e8e8;" type="submit" name="search" value="Search">
			</form>
			</div>	
		</div>	

		<div class="postarea">
			<h1 align="center" style="color: #1a9e5a; font-family:MV Boli">Welcome! Login, please</h1>
			<div class="login">
				<form action="login.php" method="post">
					<p><input type="text" name="login" placeholder="Your login"></p>
					<p><input type="password" name="password" placeholder="Your password"></p>
					<input style="border-radius: 10px; background-color: #e8e8e8;" type="submit" name="submit" value="Log In">

					<?php include("checkadmin.php")  ?>
				</form>
			</div>
		</div>
		<div class="foterarea">
			<p align="center"> 2018 &copy; <a href="../index.php">designed by kerrimov</a> </p>
		</div>
	</div>
	
</body>
</html>