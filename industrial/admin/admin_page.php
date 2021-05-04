<?php 
session_start();
if(isset($_SESSION['name'])&& isset($_SESSION['pwd']))
{
  ?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../admin/navigate.css" type="text/css"/>
        <link rel="stylesheet" href="fontawesome.min.css">
        <script src="navigate.js"></script>
        <style type="text/css">
          body
          {
          background-position: center;
            background-size: cover;
            box-sizing: border-box;
            font-family: sans-serif;
          }
          .container p
          {
            padding-top: 60px;
            padding-right: 100px;
            word-spacing: 12px;
          }
          .container
          {
            background-color: #EFF0F1;

          }
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
            padding: 15px;
          }
          .topnav ul li a
          {
           text-decoration: none;
           color: #fff; 
          }
          .active,.topnav ul li:hover
          {
            background:#2bab0d;
            border-radius: 3px;
          } 
  
        </style>
    </head>
    <body>
        
        <div class="Container_All">
        <div class="header">
            <span class="hadiya">
                <table class="table">
                    <tr>
                        <td><p style="text-indent: 30px;">ደ/ብ/ብ/ህ/ክ መንግስት<br/> ሀድያ ዞን  ሳይንሰና ኢንፎርመሽን
                        ተክኖሎጅ
                        መምሪያ
                         </p></td>
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
                
                <li ><a  href="../admin/register.php">Update_Admin</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                
            </ul>
        </div>
        <div class="container">
         <p>  Hadiya (also transliterated Hadiyya) is a Zone in the Ethiopian Southern Nations, Nationalities, and Peoples' Region (SNNPR). This zone is named after the Hadiya of the Hadiya Kingdom, whose homeland covers part of the administrative division. Hadiya is bordered on the south by Kembata Tembaro (KT), on the southwest by the Dawro Zone, on the west by the Omo River which separates it from Oromia Region and the Yem Special Woreda, on the north by Gurage, on the northeast by Silte, and on the east by the Alaba special woreda; the woredas of Mirab Badawacho and Misraq Badawacho form an exclave separated from the rest of the zone by KT. The administrative center of Hadiya is Hosaena.
<br/><br/>
Hadiya has 294 kilometers of all-weather roads and 350 kilometers of dry-weather roads, for an average road density of 169 kilometers per 1000 square kilometers.[3] According to the Central Statistical Agency (CSA) 8,364.00 tons of coffee were produced in Gurage, Hadiya and KT combined in the year ending in 2005, representing 8.33% of the SNNPR's output and 3.36% of Ethiopia's total output. 
 Hadiya Zone Information and technology (HZIT) is one of the government higher Organization or institution which was found in 2009 G.C. The HZIT is found at a town HOSSANA, which is around 230 kilometers away towards South from the capital Addis Ababa. Meanwhile, the HZIT has gone through a series of developments since its establishment. Its ICT center is present at the HZA main Building and which provides the primary management and support for computing and technology services within the Zone. The rapid growth of the website users and the demands in the HZIT requires easiyness of the service. 
 Science Information and Technology of Hadiya Zone, like all other institutions, have a minimum package of rules and regulations for a smooth and orderly functioning. 
The Science of Information and Technology of Hadiya Zone has been working hard in providing network facilities, office machine (printer and other) and other information technology.
Finally, Science of Information and Technology of Hadiya Zone is playing immense role to achieve the national growth and transformation plan (GTP) via the Science of Information and Technology vision, mission and goals.

</p>
           
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
                    <li><a href="image.html" target="_parent" >IMAGE</a></li>
                    
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