<?php 
session_start();
if(isset($_SESSION['name'])&& isset($_SESSION['pwd']))
{
  ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHOTO GALLERY</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="navigate.css" type="text/css"/>
        <link rel="stylesheet" href="fontawesome.min.css">
        <script src="navigate.js"></script>
                            <style>
                              .container
                              {
                                margin-top: 5px;
                              }
                              .topnav
                              {
                                height: 100px;
                                
                              }
                    div.gallery {
                      margin: 25px 10px;
                      border: 1px solid #ccc;
                      float: left;
                      width: 180px;
                    }

                    div.gallery:hover {
                      border: 1px solid #777;
                    }

                    div.gallery img {
                      width: 100%;
                      height: 50%;
                    }

                    div.desc {
                      padding: 15px;
                      text-align: center;
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
            width: 100px;
            margin: 10px;
            padding: 10px;
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
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <div class="Container_All">
        <div class="header">
            <span class="hadiya">
                <table class="table">
                    <tr>
                        <td><p style="text-indent: 20px;">ደ/ብ/ብ/ህ/ክ መንግስት<br/> ሀድያ ዞን  ሳይንሰና ኢንፎርመሽን
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
                  
                    <div class="gallery">
                      <a target="_blank" href="ocho.png">
                        <img src="ocho.png" alt="Mountains" width="600" height="400">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together</div>
                    </div>
                     <div class="gallery">
                      <a target="_blank" href="dinga.png">
                        <img src="dinga.png" alt="Mountains" width="600" height="400">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together <a href="Seemore.php">see more</a></div>
                    </div>
                     <div class="gallery">
                      <a target="_blank" href="buda.png">
                        <img src="buda.png" alt="Mountains" width="600" height="400">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together</div>
                    </div>
                    <div class="gallery">
                      <a target="_blank" href="ocho.png">
                        <img src="ocho.png" alt="Mountains" width="600" height="400">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together</div>
                    </div>
                     <div class="gallery">
                      <a target="_blank" href="water.png">
                        <img src="water.png" alt="Mountains" width="600" height="400">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together</div>
                    </div>
                     <div class="gallery">
                      <a target="_blank" href="seleme.png">
                        <img src="seleme.png" alt="Mountains" width="600" height="400">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together</div>
                    </div>
                     <div class="gallery">
                      <a target="_blank" href="habicho.png">
                        <img src="habicho.png" alt="Mountains" width="600" height="400">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together</div>
                    </div>
                     <div class="gallery">
                      <a target="_blank" href="dinga.png">
                        <img src="dinga.png" alt="Mountains" width="600" height="400">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together</div>
                    </div>
                     <div class="gallery">
                      <a target="_blank" href="wogna.png">
                        <img src="wogna.png" alt="Mountains" width="600" height="1200">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together</div>
                    </div>
                     <div class="gallery">
                      <a target="_blank" href="logo.png">
                        <img src="logo.png" alt="Mountains" width="600" height="400">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together</div>
                    </div>
                    <div class="gallery">
                      <a target="_blank" href="inset..png">
                        <img src="inset..png" alt="Mountains" width="600" height="1200">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together</div>
                    </div>
                     <div class="gallery">
                      <a target="_blank" href="wogna.png">
                        <img src="wogna.png" alt="Mountains" width="600" height="400">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together</div>
                    </div>
                     <div class="gallery">
                      <a target="_blank" href="habicho.png">
                        <img src="habicho.png" alt="Mountains" width="600" height="1200">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together</div>
                    </div>
                     <div class="gallery">
                      <a target="_blank" href="buda.png">
                        <img src="buda.png" alt="Mountains" width="600" height="400">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together</div>
                    </div>
                     <div class="gallery">
                      <a target="_blank" href="pilla.png">
                        <img src="pilla.png" alt="Mountains" width="600" height="1200">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together</div>
                    </div>
                     <div class="gallery">
                      <a target="_blank" href="b.jpg">
                        <img src="b.jpg" alt="Mountains" width="600" height="400">
                      </a>
                      <div class="desc">Ethiopia become Beauty when we live together</div>
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
                    <li><a href="vacancy.html">Vacancy</a></li>
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
<?php
}
else
{
  header("Location:login.php");
}