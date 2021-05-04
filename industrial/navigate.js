/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}


//notification
          <?php
            $conn=new mysqli("localhost","root","","industrial");
            if($conn->connect_error)
            {
              die("connection error:".$conn->connect_error);
            }
            else
            {
            $sql="select * from notification";
            $result=mysqli_query($conn,$sql);
            
    echo "<table class='tab' border='2'><thead> <tr><th>ID</th><th>email</th><th>message</th><th>file</th><th>date</th><th>feedback</th></tr></thead>";
            
              while($row=mysqli_fetch_array($result))
              {
                ?>
 <tr>
    <td><?php echo $row['id'];  ?> </td>
    <td><?php echo $row['email'];  ?> </td>
    <td><?php echo $row['message'];  ?> </td>
     <td><img src="<?php echo $row['File']; ?>" width="50" height="50"></td>
    <td><?php echo $row['day'];  ?> </td>
    <td><a href="mukera.html">send feedback</a></td>
</tr>
    <?php
              }
          echo "</table>";
          
            }
            mysqli_close($conn);

            ?>