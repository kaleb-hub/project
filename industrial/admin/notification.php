<?php 
session_start();
if(isset($_SESSION['name'])&& isset($_SESSION['pwd']))
{
  ?>
<!DOCTYPE html>
<html>
    <head>
        <title>NOTIFICATION</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="navigate.css" type="text/css"/>
          <style type="text/css">
              .topnav
          {
            background:gray;
            text-align: center;
          }
          .topnav ul
          {
            display: inline-flex;
            list-style: none;
            color: #fff;
          }
          .topnav ul li
          {
            width: 90px;
            margin: 10px;
            padding: 13px;
          }
          .topnav ul li a
          {
           text-decoration: none;
           color: #fff; 
          }
          .active,.topnav ul li:hover
          {
            background:green;
            border-radius: 3px;
          }
              .tab
              {
                color: white;
                padding-left: 100px;
                padding-top: 50px;
                border-collapse: collapse;
                background-color: darkblue;

              }
             
              .container
              {
                margin-top: 5px;
              }
              .notify
              {
                padding-top: 170px;
                padding-left: 300px;
              }
              .notify p
              {
                margin-left: -50px;
                padding-left:-90px;
                font-weight: bold;
                font-size: 30px;
              }
              .feed input[type="submit"]
              {
                background-color: darkblue;
                color: white;
              }
              .feed input[type="submit"]:hover
              {
                color: yellow;
                font-size: 20px;
              }
          </style>
        <script src="navigate.js"></script>
    </head>
    <body>
        <link rel="stylesheet" href="fontawesome.min.css">
        <div class="header">
            <span class="hadiya">
                <table class="table">
                    <tr>
                        <td><p>ደ/ብ/ብ/ህ/ክ መንግስት<br/> ሀድያ ዞን አስተዳደር ጽ/ቤት</p></td>
                        <td><img src="logo.png" alt="kaleb" width="80" height=65" margin-top="-5"></td>
                        <td><p>SNNPR STATE HADIYA<br/> ZONE ADMINISTRATIVE OFFICE</p></td>
                    <tr>
                </table>
            </span>

        </div>
       <div class="topnav" id="myTopnav">
            <ul>
                <li> <a href="admin_page.php" >HOME</a></li>
                <li><a href="#woreda">WOREDA </a>
                   <div class="sub-menu-1">
            <ul>
            <li class="hover-me"><a href="">LEMO</a><img class="imgi" src="download (2).png" width="10" height="10" f></i>
            
                <div class="sub-menu-2">
                    <ul>
                     <li><a href="kode.php"> 1st KODE</a></li>
                     <li><a href="kode.php">2nd KODE</a></li>
                      <li><a href="kode.php">Ambicho</a></li>
                     <li><a href="kode.php">Hayise</a></li>
                      <li><a href="kode.php">Ashe</a></li>
                    </ul>
                    
                </div>
            </li>
            <li class="hover-me"><a href="">ANALEMO</a><img class="imgi" src="download (2).png" width="10" height="10" f></i>
            
                <div class="sub-menu-2">
                    <ul>
                     <li><a href="kode.php">Ambicho</a></li>
                     <li><a href="kode.php"> Ambicho</a></li>
                      <li><a href="kode.php">ANALEMO </a></li>
                    </ul>
                    
                </div>
            </li>
            <li class="hover-me"><a href="">gombora</a><img class="imgi" src="download (2).png" width="10" height="10"></i>
            
                <div class="sub-menu-2">
                    <ul>
                     <li><a href="kode.php">ANALEMO</a></li>
                     <li><a href="kode.php">gombora</a></li>
                     <li><a href="kode.php">gombora</a></li>
                      <li><a href="kode.php">Soro</a></li>
                    </ul>
                </div>
            </li>
             <li class="hover-me"><a href="">SORO</a><img class="imgi" src="download (2).png" width="10" height="10"></i>
            
                <div class="sub-menu-2">
                    <ul>
                     <li><a href="kode.php">ANALEMO</a></li>
                     <li><a href="kode.php">gombora</a></li>
                     <li><a href="kode.php">gombora</a></li>
                      <li><a href="kode.php">Soro</a></li>
                    </ul>
                </div>
            </li>
             <li class="hover-me"><a href="">SHAHSHOGO</a><img class="imgi" src="download (2).png" width="10" height="10"></i>
            
                <div class="sub-menu-2">
                    <ul>
                     <li><a href="kode.php">ANALEMO</a></li>
                     <li><a href="kode.php">gombora</a></li>
                     <li><a href="kode.php">gombora</a></li>
                      <li><a href="kode.php">Soro</a></li>
                    </ul>
                </div>
            </li>
             <li class="hover-me"><a href="#">GIBE</a><img class="imgi" src="download (2).png" width="10" height="10"></i>
            
                <div class="sub-menu-2">
                    <ul>
                     <li><a href="kode.php">ANALEMO</a></li>
                     <li><a href="kode.php">gombora</a></li>
                     <li><a href="kode.php">gombora</a></li>
                      <li><a href="kode.php">Soro</a></li>
                    </ul>
                </div>
            </li>
      </ul>

     </div>
                </li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="#about">ABOUT</a>
                <div class="sub-menu-1">
                   <ul>
                       <li><a href="mission.php">mission</a></li>
                       <li><a href="vision.php">vision</a></li>
                       <li><a href="team.php">team</a></li>
                   </ul>

                </div>
                
                </li>
                <li> <a href="image.php" target="_parent" >IMAGE</a></li>
                <li><a href="notification.php" >NOTIFICATION</a></li>
                
                <li ><a  href="register.php">Update_Admin</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                
            </ul>
        </div>
        <div class="container">
          <div class="notify">
            <p>This is notification from user. give response for highest id.</p>
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
            
    echo "<table class='tab' border='1'>
    <thead>
     <tr>
     <th>ID</th>
     <th>email</th>
     <th>message</th>
     <th>date</th>
     <th>file</th>
     <th>feedback</th>
     <th>Update</th>
     <th>Delete</th>
     </tr>
     </thead>";
            
              while($row=mysqli_fetch_array($result))
              {
                ?>
 <tr>
    <td><?php echo $row['id'];  ?> </td>
    <td><?php echo $row['email'];  ?> </td>
    <td><?php echo $row['message'];  ?> </td>
    <td><?php echo $row['day'];  ?> </td>
    <?php echo "<td><a href='../admin/'.row['file']><img src='../admin/".$row['file']."'alt='image' ,width=200px, height=80px></a></td>";?>

    <td class="feed">
        <form action="response.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id'];  ?>">
            <input type="submit" class="btn btn-success" value="feedback" >
        </form>
    </td>

    <td class="feed">
        <form action="not_update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['email'];  ?>">
            <input type="submit" class="btn btn-success" value="Update" >
        </form>
    </td>

    <td class="feed">
        <form action="delete.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['email'];  ?>">
            <input type="submit" class="btn btn-success" value="Delete" >
        </form>
    </td>
</tr>
    <?php
              }
          echo "</table>";
          
            }

            ?>
          </div>
        </div>
                <div class="footer_conatiner">
          <div class="Footer_top">
            <div class="footer_left">
            <ul style="list-style-type: none">
                <li>NewsLetter </li>
                <li><a href="https://www.facebook.com/ኢየሱስ ጌታ ነዉ
                  "><img src="fb.png" height="20" width="40"><label style="padding-left: 5px;">facebook</label></a></li>
                <li><a href="https://t.me/gutasoftk"><img src="tg.png" height="20" width="40"><label style="padding-left: 5px;">Telegram</label></a></li>
                <li><a href="image.html" target="_parent" ><img src="inst.png" height="20" width="40"><label style="padding-left: 5px;">Instagram</label></a></li>
                <li><a href="https://www.Twitter.com" ><img src="tw.png" height="20" width="40"><label style="padding-left: 5px;">Twitter</label></a></li>
              
            </ul>
         </div>
            <div class="footer_left1">
                <ul style="list-style-type: none">
                    <li>NEWS </li>
                    <li><a href="Vacancy.php">Vacancy</a></li>
                    <li><a href="https://SNNPR.com">South Region</a></li>
                    <li><a href="image.php" target="_parent" >IMAGE</a></li>
                    
                </ul>
            </div>
            <div class="footer_left2">
                <ul style="list-style-type: none">
                    <li><u>SITES</u> </li>
                    <li><a href="http://sictda.gov.et">information technology agency</a></li>
                    <li><a href="http://snnprstrade.gov.et">Trade and Industry Bureau</a></li>
                    <li><a href="image.html" target="_parent" >FEDERAL</a></li>
                </ul>
            </div>

            <div class="footer_right">
                <ul style="list-style-type: none">
                    
                    <li><u>COMPANY</u> </li>
                    <li><a href="privacy.php">privacy and policy</a></li>
                    <li><a href="about.php">About us</a></li>
                  <li><a href="term.php" target="_parent" >term and condition</a></li>
                    <li><a href="map.php" >site map</a></li>
                    
                </ul>
            </div>

            

          </div>
          <hr/>
                      <div class="copyright"><p>&copy; copyright  all right reserved</p>
            </div>
        </div>
</div>
    </body>
</html>
<?php
}
else
{
  header("Location:login.php");
}