<?php 
$conn = new mysqli("localhost","root","","demo");

if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}
?>