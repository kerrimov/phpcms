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
					<p style="font-size: 30px">For cooperation issues:</p>
					<li style="font-size: 25px">Email: ✉ phpcms@gmail.com</li>
					<li style="font-size: 25px">Phone: ☎ +380660770777</li>
					<p style="font-size: 25px">Our office:<br> Phpcms street, 7 </p>
					<img  src="img/map.png" id="map">
				
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