<?php 
$host = 'localhost:3306';
$user = 'root';
$pwd = '';

$conn = mysqli_connect($host,$user,$pwd,"notfb");
if(!$conn){
die('no connection');
}

mysqli_query($conn,'SET NAMES utf8');

?>