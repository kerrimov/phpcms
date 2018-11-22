<?php
	include("functions/dbconnect.php");
?>

<?php 
$result="";
if (isset($_POST['send'])) {
	$email = $_POST['email'];
	$message = $_POST['message'];
	if ((strlen($email)<5) or (strlen($message)<10)) {
		$result=1;
	}
	else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		#$subject = "from yout site phpcms";
		$subject= "from<".$email.">\r\nContent-type:text\plain: charset=utf-8";
		mail("phpcms@gmail.com", $subject, $message);
		$result=3;
	} else {
		$result=2;
	}
}

$answer="";
if ($result) {
	switch ($result) {
		case 1:
			$answer="<script>alert('Short message or email!')</script>";
			break;
		case 2:
			$answer="<script>alert('Wrong email!')</script>";
			break;
		case 3:
			$answer="<script>alert('Successfully! Thanks for the feedback!')</script>";	
				break;	
		default:
			"Something wrong!";
			break;
	}
}
else $answer="";
?>