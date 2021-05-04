<?php
$dbname="industrial";
$server="localhost";
$user="root";
$pass="";
$con=new mysqli($server,$user,$pass,$dbname);
if($con->connect_error)
{
	die("Connection failed: " . $con->connect_error);
}
else
{
	if(isset($_POST['submit']))
	{
		$update=trim($_POST['update']);
		$name=$_POST['firstname'];
		$lname=$_POST['lastname'];
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		//$file=$_FILES['file']['name'];
		$sql="update user set firstname='$name',lastname='$lname',email='$email',password='$pass',gender='$gender',age='$age' where firstname='$update'";
		$result=mysqli_query($con,$sql);
		//	$sql1="insert into user(firstname,lastname,email,password,gender,age) VALUES('$name','$lname','$email','$pass','$gender','$age')";
			if(mysqli_query($con,$sql))
			{
				
				header("location:../admin/admin_page.php");
			}
			else
			{
				
      header("location:../admin/error_page1.php");

		
			}
	}
}



?>