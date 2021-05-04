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
         
          .container
          {
            background-color: #EFF0F1;
            margin-top: -5px;
          }
          .error
          {
            padding: 150px;
            
          }
          .error a
          {
            padding-top: 5px;
          }
          .error button 
          {
            margin-left: 350px;
            text-decoration: none;
            color: white;
          }
          .error button:hover
          {
          background-color: green;
          font-size: 20px;
          color: white;
          font-family: sans-serif;
          font-weight: italic;  
          border-radius: 30px;
           }
          .error p
          {
             margin-left: 300px;
             color: red;
          }
        </style>
    </head>
    <body>
        
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
       
        <div class="container">
                    <div class="error">
                      <script>
                      window.alert("invalid user name and password");
                      </script>
                       <p>invalid user name and password!!!!!</p>
                      <button> <a href="login.php">please try again</a></button>
                     </div>
        </div>
        <div class="footer_conatiner">
          <div class="Footer_top">
            <div class="footer_left">
          
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