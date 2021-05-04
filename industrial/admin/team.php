<?php 
session_start();
if(isset($_SESSION['name'])&& isset($_SESSION['pwd']))
{
  ?>
  <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TEAM MEMBERS</title>
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
         .thead
           {
            background-color: darkblue;
            color: #ffffff;
           }
          tbody tr:nth-child(even)
         {
            background-color: #f5f5f5;
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
            <div class="team">
           <table border="0" class="table1">
                  <thead ><td colspan="4" style="text-align: center;">Group Member</td>
                  </thead>
                  <thead>
                  <tr class="thead">
                    <td>NAME</td>
                    <td>PHONE</td>
                    <td>EMAIL</td>
                    <td>Responsilbility</td>
                  </tr>
              </thead>
         <tbody>
                  <tr>
                    <td>Taso washo</td>
                    <td>0984262852</td>
                    <td>gutasoft@gmail.com</td>
                    <td>Designer</td>
                  </tr>
                  <tr class="team">
                    <td>Kaleb kaja </td>
                    <td>0948210261</td>
                    <td>kalebbekele72@gmail.com</td>
                    <td>Manager</td>
                  </tr>
                  <tr>
                    <td>Eshetu Yonas</td>
                    <td>0991031234</td>
                    <td>esheyon11swe@gmail.com</td>
                    <td>Tester</td>
          </tr>
          <tr>
            <td>Muluken Shobiso</td>
            <td>0963345678</td>
            <td>muler@gmail.com</td>
            <td>Analyser</td>
          </tr>
          <tr id="seven">
            <td>Muluken Admasu </td>
            <td>0945367890</td>
            <td>mulertinishu@gmail.com</td>
            <td>Programmer</td>
          </tr>
          <tr>
            <td>Melkamu merkeb</td>
            <td>0930587890</td>
            <td>melketinishu@gmail.com</td>
            <td>Data Collector</td>
          </tr>
          <tr>
            <td>Tefer G/meskel</td>
            <td>0930587890</td>
            <td>melketinishu@gmail.com</td>
            <td>Data Collector</td>
          </tr>
          </tbody>
        </table>
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
                    <li><a href="vacancy.php">Vacancy</a></li>
                    <li><a href="about.html">South Region</a></li>
                    <li><a href="image.php" target="_parent" >IMAGE</a></li>
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