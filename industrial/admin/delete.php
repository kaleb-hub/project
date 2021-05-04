 <?php
$email=$_POST['id'];
 $conn=new mysqli("localhost","root","","industrial");
            if($conn->connect_error)
            {
              die("connection error:".$conn->connect_error);
            }
            else
            {
            $sql="delete from  notification where 
            email='$email'";
            if(mysqli_query($conn,$sql))
            {
            	header("Location: notification.php");
            }
            else
            {
            	echo "incorrect email";
            }
        }

 ?>