 <?php 
	include("dbconnect.php");
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Insert</title>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 </head>
 <body bgcolor="#ffffff">
 	<form method="post" action="insert_post.php" enctype="multipart/form-data">
 	<table width="400">
 		<tr>
 			<td><h2>Insert new Post</h2></td>
 		</tr>

 		<tr>
 			<td>
 				<h4>Category</h4>
 				<select style="border-radius: 10px;" name="cat">
 					<option value="null">Select category</option>
 					<?php 
 						$mq = "SELECT * FROM category";
 						$query = mysqli_query($conn,$mq);
 
 						while ($row = mysqli_fetch_array($query)) {
	 						$catid = $row['cat_id'];
	 						$cattitle = $row['cat_title'];
	 						echo "<option value= '$catid'>$cattitle</option>";
	 					}	
 					?>
 				</select>
 			</td>
 		</tr>

 		<tr>
 			<td>
 				<h4>Title</h4>
 				<input style="border-radius: 10px;" type="text" name="post_title">
 			</td>
 		</tr>

 		<tr>
 			<td>
 				<h4>Author</h4>
 				<input style="border-radius: 10px;" type="text" name="post_author">
 			</td>
 		</tr>

 		<tr>
 			<td>
 				<h4>Keywords</h4>
 				<input style="border-radius: 10px" type="text" name="post_keywords">
 			</td>
 		</tr>

 		<!--<tr>
 			<td>
 				<h4>Date</h4>
 				<input type="date" name="post_date">
 			</td>
 		</tr>-->

 		<tr>
 			<td>
 				<h4>Image</h4>
 				<input type="file" name="post_image">
 			</td>
 		</tr>

 		<tr>
 			<td>
 				<h4>Text</h4>
 				<textarea style="border-radius: 30px" name="post_content" cols="80" rows="20"></textarea>
 				<input style="border-radius: 10px; background-color: #e8e8e8;" type="submit" name="post" value="Publish post">
 			</td>
 		</tr>
 	</table>
 	</form>
 </body>
 </html>


<?php
if (isset ($_POST['post'])){
	$post_title = $_POST['post_title'];
	/*$post_date = date("M.d.y");*/
	$post_cat = $_POST['cat'];
	$post_author = $_POST['post_author'];
	$post_keywords = $_POST['post_keywords'];
	$post_image = $_FILES['post_image']['name'];
	$post_image_tmp = $_FILES['post_image']['tmp_name'];
 	
 	$post_content = $_POST['post_content'];
 

 if ($post_title == '' or $post_cat =='null' or $post_author == '' or $post_keywords == '' or $post_image == '' or $post_content == '') {
 	echo "<script>alert('Push failed')</script>";
 	exit();	
 }
 else{
 	move_uploaded_file($post_image_tmp, "../news_images/$post_image");
 	$insert = "INSERT INTO post(category_id, post_title, post_date, post_author, post_keywords, post_image, post_content) VALUES ('$post_cat','$post_title',now(),'$post_author','$post_keywords','$post_image','$post_content')";
 	$q = mysqli_query($conn,$insert);
 	if($q){
 		echo "<script>alert('Succesfully added')</script>";
 		header('location: ../index.php');
 	}
 	else{
 		echo "<script>alert('Something wrong! Not added')</script>";
 	}
 }
}
?>