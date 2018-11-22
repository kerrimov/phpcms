<?php 
	include("functions/dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Article</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
</head>
<body>
	<div class="container">
		<div class ="head">
			<img src="img/header2.jpg" id="logo2">
		</div>
		
		<div class="barmenu">
			<ul id="menu">
				<?php include ("includes/nav.php");?>	
			</ul>

			<div id="form">
				<form method="get" action="result.php" enctype="multipart/form-data"></form>
				<input style="border-radius: 10px;"type="text" name="searchquery" placeholder="search article">
				<input style="border-radius: 10px; background-color: #e8e8e8"type="submit" name="search" value="Search">
			</div>	
		</div>	

		<div class="postarea">
			<?php 
			include("includes/details_content.php")  
			?>
			<div class="comments">
				<h3 style="text-align: center;">Comments <?php include("includes/comments_count.php")?></h3>	
				<?php 
				include("functions/add_comments.php")
				?>
				<hr>
				<h4 style="text-align:left;">Write your comment</h4>
				<form action="details.php?post=<?php echo $post_new_id;?>" method="post">
				<p>Your name:</p> 
				<input style="border-radius: 10px" type="text" name="comment_name">
				<p>Your e-mail:</p>
				<input style="border-radius: 10px" type="text" name="comment_email">
				<p>Your comment:</p>
				<textarea style="border-radius: 15px" name="comment_text" cols="95" rows="10"></textarea>
				<input style="border-radius: 10px; background-color: #e8e8e8;" type="submit" name="submit" value="Add Comment">
				</form>
			</div>
		</div>	

		<div class="sbar">
			<?php include ("includes/sitebar.php")?>
		</div>
		<div class="foterarea">
			<?php include ("includes/footer.php")?>
		</div>
</body>
</html>