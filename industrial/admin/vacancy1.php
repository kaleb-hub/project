<?php
$server="localhost";
$user="root";
$pass="";
$db_name="industrial";
$name="";
$conn=new mysqli($server,$user,$pass,$db_name);
if($conn->connect_error)
{
	die('connection error'.$conn->connect_error);
}

else
{
	if(isset($_POST['submit']))
	{
	$name=$_POST['name'];
	$file1=$_FILES['file']['name'];
	$sq1="INSERT INTO vacancy(User_name,File) values('$name','$file1')";
	if($conn->query($sq1))
	{
		header("location: admin_page.php");
	}
	else
	{
		echo 'error during creating database';
	}
}
else
{
	echo "error";
}
}

?>