<?php
session_start();
$server="localhost";
$user="root";
$pass="";
$db_name="industrial";
$pass1="";
$name="";
$conn=new mysqli($server,$user,$pass,$db_name);
if($conn->connect_error)
{
	die("connection error".$conn->connect_error);
}
else
{
	if(!isset($_SESSION['name'])&& !isset($_SESSION['pwd']))
	{
	if(isset($_POST['login']))
	{
		$name=$_POST['fname'];
		$pass1=$_POST['pass'];
$sql="select firstname, password from user where firstname='$name' AND password='$pass1'";
	$result=$conn->query($sql);
		if($result->num_rows >0)
		{
				if($row=$result->fetch_assoc())
				{
					
					$name=$row['firstname'];
					$pass1=$row['password'];
					$_SESSION['name']=$name;
					$_SESSION['pwd']=$pass1;
					if(isset($_SESSION['name']) &&isset($_SESSION['pwd']))
					{
					$_SESSION['name']=$name;
					$_SESSION['pwd']=$pass1;
					header("location:admin_page.php");	
					}
					else
					{
				      echo "welcome to error";
					}
			   }
		   else
		   {
		   	echo "while loop is not working";
		   }

		}
		else
		{
			echo "data not found in database";
		}
}
else
{
echo "check if condition";
}
}
else
{
	echo "session not working";
}
}



/*if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(empty($_POST['fname'])|| empty($_POST['pass']))
	{
		echo "name and password required";
	}
	else 
	{
		$con=new mysqli($server,$user,$pass,$db_name);
		if($con->connect_error)
		{
			die("connection err0r this".$con->connect_error);
		}
		else
		{
			$name=$_POST['fname'];
		   // $lname=$_POST['lname'];
		   // $email=$_POST['email'];
		    $pass=$_POST['pass'];
		    // $gender=$_POST['gender'];
		     // $age=$_POST['age'];
		     // $file=$_FILES['file']['name'];
		      $sql="SELECT firstname,password from user where firstname='$name' AND password='$pass'";
		      $result=$con->query($sql);
		      if($result->num_rows>0)
		      	{
		      		header("location:admin_page.php");

		      	}
		      	else
		      	{
		      		header("location:error_page.php");
		      	}
		      }
		  }
		}

		      ?>

		      <?php
		  //      $sq11="INSERT INTO user2(firstname,lastname,email,password,gender,age,file) values( '$name','$lname','$email','$pass','$gender','$age','$file')";
    //            if($con->query($sq11))
    //            {
    //             	echo "success";
    //             }
    //             else
    //             {
    //             	echo "error";
    //             }
    //         }
    //     }
    // }

              
		//$sq1="INSERT INTO user1(username,userpass) values( '$name','$pass')";

			
		// 	if($res->num_rows>0)
		// 		{
		// 		$row=$res->fetch_assoc();
		// 		echo "id".$row['id']." "."user".$row['username']." "."pass".$row['userpass'];
		// 		}
		// else{

		// 		echo "error during fetching from";
		// 		//header('location:admin_page.php');
		// 	}
// 	      }
	     
// 	  }

// 	}
// }*/
?>
