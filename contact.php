<?php 
	include("functions/dbconnect.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title> Contact</title>
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
				<input style="border-radius: 10px;"type="text" name="searchquery">
				<input style="border-radius: 10px; background-color: #e8e8e8;" type="submit" name="search" value="Search">
			</form>
			</div>	
		</div>	

		<div class="postarea">
			<div class="contact">
					<p style="font-size: 25px">For cooperation issues:</p>
					<li style="font-size: 20px">Email: ✉ phpcms@gmail.com</li>
					<li style="font-size: 20px">Phone: ☎ +380660770777</li>
					<p style="font-size: 20px">Our office:<br> Phpcms street, 7 </p>
					<img  src="img/map.png" id="map">
					<hr>
					<h2>Send us your feedback</h2>
					<form action="contact.php" name="feedback" method="post">
						<p><input style="border-radius: 15px" type="email" name="email" placeholder="  Your email"></p>
						<textarea style="border-radius: 15px" name="message" cols="70" rows="10" placeholder=" Write your feedback here"><?php $message ?></textarea><br>
						<button style="border-radius: 15px; background-color: #e8e8e8" name="send">Leave feedback</button>
					</form>
					<?php include("includes/feedback.php")?>
					<?php
						echo "$answer";
						unset($answer);
					?>
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