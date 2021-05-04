<?php

session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" type="text/css"/>
      
    </head>
    <body>
        <div class="login-page">
  <div class="form">
    
    <form name="login"  class="register-form login-form" action="validate_login.php" method="POST">
      <input type="text" placeholder="username" id="name" name="fname" />
      <input type="password" placeholder="password" id="pass" name="pass" />
      <input type="submit" value="login" name="login">
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>
    </form>
  </div>
</div>
        <script src="js.js"></script>
    </body>
</html>


