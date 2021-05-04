          <?php
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$message=$_POST['message'];
$file=$_FILES['image']['name']; 

$con=new mysqli("localhost","root","","industrial");
if ($con->connect_error) {
    die("connection problem".$con->connect_error);
}
else
{
$sql="insert into notification(email, message,file)
 VALUES('$email','$message','$file')";
    if($con->query($sql))
    {
        header('location:user.html');
    }
    else
    {
        echo ("insertition error".$con->connect_error);
    }
}

}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="navigate.css" type="text/css"/>
        <link rel="stylesheet" href="fontawesome.min.css">
        <script src="navigate.js"></script>
        <style type="text/css">
           .topnav
          {
            background:blue;
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
            .team
            {
                padding-left: 200px;
                padding-top: 150px;
                color: black;
                

            }
           .table1
           {
            width: 70%;
            border-collapse: collapse;

           }
           .table1 td, .table1 th
           {
            padding: 12px 15px;
            border:1px solid #ddd;
            text-align: center;
            font-size: 16px;
           }
         .thead ,.me,.fi, .se 
           {
            background-color: darkblue;
            color: #ffffff;
           }
           input[type=text]
           {
            width: 300px;
            border:2px solid #aaa;
            box-sizing: border-box;
            border-radius: 15px;
            height: 50px;
           }
           input[type=text]:focus
           {
            border-color: yellow;
            box-shadow: 0 0 8px 0 yellow;
           }
           textarea
           {
            width: 300px;
            height:50px;
           }
           .topnav
           {
            padding-bottom:  20px;
           }
        </style>
    </head>
    <body>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <div class="Container_All">
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
                <li> <a href="user.html" >HOME</a></li>
                <li><a href="#woreda">WOREDA </a>
                   <div class="sub-menu-1">
     	      <ul>
            <li class="hover-me"><a href="">LEMO</a><img class="imgi" src="download (2).png" width="10" height="10" f></i>
            
                <div class="sub-menu-2">
                    <ul>
                     <li><a href="kode.html"> 1st KODE</a></li>
                     <li><a href="">2nd KODE</a></li>
                      <li><a href="">Ambicho</a></li>
                     <li><a href="">Hayise</a></li>
                      <li><a href="">Ashe</a></li>
                    </ul>
                    
                </div>
            </li>
            <li class="hover-me"><a href="">ANALEMO</a><img class="imgi" src="download (2).png" width="10" height="10" f></i>
            
                <div class="sub-menu-2">
                    <ul>
                     <li><a href="kode.html">tib</a></li>
                     <li><a href=""> wugula</a></li>
                      <li><a href="">zala </a></li>
                    </ul>
                    
                </div>
            </li>
            <li class="hover-me"><a href="">gombora</a><img class="imgi" src="download (2).png" width="10" height="10"></i>
            
                <div class="sub-menu-2">
                    <ul>
                     <li><a href="kode.html">gofa</a></li>
                     <li><a href="">Gammo</a></li>
                     <li><a href="">hadiya</a></li>
                      <li><a href="">Hossana</a></li>
                    </ul>
                </div>
            </li>
             <li class="hover-me"><a href="">SORO</a><img class="imgi" src="download (2).png" width="10" height="10"></i>
            
                <div class="sub-menu-2">
                    <ul>
                     <li><a href="kode.html">gofa</a></li>
                     <li><a href="">Gammo</a></li>
                     <li><a href="">hadiya</a></li>
                      <li><a href="">Hossana</a></li>
                    </ul>
                </div>
            </li>
             <li class="hover-me"><a href="">SHAHSHOGO</a><img class="imgi" src="download (2).png" width="10" height="10"></i>
            
                <div class="sub-menu-2">
                    <ul>
                     <li><a href="kode.html">gofa</a></li>
                     <li><a href="">Gammo</a></li>
                     <li><a href="">hadiya</a></li>
                      <li><a href="">Hossana</a></li>
                    </ul>
                </div>
            </li>
             <li class="hover-me"><a href="">GIBE</a><img class="imgi" src="download (2).png" width="10" height="10"></i>
            
                <div class="sub-menu-2">
                    <ul>
                     <li><a href="kode.html">gofa</a></li>
                     <li><a href="">Gammo</a></li>
                     <li><a href="">hadiya</a></li>
                      <li><a href="">Hossana</a></li>
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
                <li> <a href="image.html" target="_parent" >IMAGE</a></li>
                <li><a href="feedback.php" >FEEDBACK</a></li>
                 <li><a href="tourist.php" >TOURIST SITE</a></li>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"> click here </i>
                </a>
            </ul>
        </div>
        <div class="container">

<form action="feedback.php" method="POST" enctype="multipart/form-data">
<div class="team">
           <table border="0" class="table1">
                  <thead>
                  <tr class="thead">
                    <td>Email</td>
                    <td><input type="text" name="email" ></td>
                  </tr>
              </thead>
          <tbody>
                  <tr class="me">
                    <td>Message</td>
                    <td><textarea name="message"></textarea></td>
                    
                  </tr>
                
                  <tr class="fi">
                    <td>File:</td>
                    <td><input type="file" name="image"></td>
                  
                 </tr>
          <tr class="se">
            <td colspan="2"><input  type="submit" name="submit" value="send"></td>
          </tr>
         
          </tbody>
        </table>
        </div>
</form>
           
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
                    <li><a href="vacancy.php">Vacancy</a></li>
                    <li><a href="about.html">South Region</a></li>
                    <li><a href="image.html" target="_parent" >IMAGE</a></li>
                    <li><a href="about.html">About</a></li>
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
                    <li><a href="#contact">privacy and policy</a></li>
                    <li><a href="about.html">About us</a></li>
                  <li><a href="image.html" target="_parent" >term and condition</a></li>
                    <li><a href="login.html" >site map</a></li>
                    
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
  