
<?php
  if(isset($_POST['submit']))
  {
    $update=($_POST['update']);
    $name=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    if(empty($update)||empty($name)||empty($lname)||empty($email)||empty($pass)||empty($gender)||empty($age))
    {
      $error_mesage="fill all  field please! ";
    }
    else
    {
          $update=trim($_POST['update']);
          if(preg_match("/^[a-zA-Z -]*$/", $update))
          {
         $update=($_POST['update']);

          }
          else
          {
            $error_mesage="only letter and space is allowed";
          }

    }
  }
?>






<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>  Register Form</title>
    <link rel="stylesheet" href="first.css">
<script>
     
      
      function pass(){
         var pass=document.name.password.value;
      var pass1=document.name.confirm.value;
      if(pass!=pass1)
      {
        alert("password mismatch");
        return false;
      }
      else 
      {
        return true;
      }
      }
      var rangeLabel = document.getElementById("range-label");
      var experience = document.getElementById("experience");

      function change() {
      rangeLabel.innerText = experience.value + "K";
      }
    </script>
  </head>
  <body>
    <form class="signup-form" name="name" onsubmit="return pass()" action="update.php" method="post">

      <!-- form header -->
      <div class="form-header">
        <h1>update Account</h1>
      </div>

      <!-- form body -->
      <div class="form-body">
        <!--name to updated -->
         <div class="form-group">
          <label for="email" class="label-title">name to update</label>
          <input type="text" id="update" class="form-input" placeholder="enter name to update" name="update">
        </div>
        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="firstname" class="label-title"> new First name *</label>
            <input type="text" id="firstname" class="form-input" placeholder="enter your first name" name="firstname"  />
          </div>
          <div class="form-group right">
            <label for="lastname" class="label-title"> new Last name</label>
            <input type="text" id="lastname" class="form-input" placeholder="enter your last name"  name="lastname" />
          </div>
        </div>

        <!-- Email -->
        <div class="form-group">
          <label for="email" class="label-title">new Email*</label>
          <input type="email" id="email" class="form-input" placeholder="enter your email" name="email">
        </div>

        <!-- Passwrod and confirm password -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="password" class="label-title">Password *</label>
            <input type="password" id="password" class="form-input" placeholder="enter your password" name="password">
          </div>
          <div class="form-group right">
            <label for="confirm-password" class="label-title">Confirm Password *</label>
            <input type="password" class="form-input" id="confirm" placeholder="enter your password again" name="confirm">
          </div>
        </div>

        <!-- Gender and Hobbies -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">Gender:</label>
            <div class="input-group">
              <label for="male"><input type="radio" name="gender" value="male" id="male"> Male</label>
              <label for="female"><input type="radio" name="gender" value="female" id="female"> Female</label>
            </div>
          </div>
        </div>
        <div class="horizontal-group">
          <div class="form-group right">
            <label for="experience" class="label-title">Age</label>
            <input type="number" min="18" max="80"  name="age" class="form-input">
          </div>
        </div>

        <!-- Bio -->
       
      </div>

      <!-- form-footer -->
      <div class="form-footer">
        
        <input type="submit" name="submit" class="btn" value="update">
        <a class="btn" href="login.php">LOGIN</a>
      </div>

    </form>

    <!-- Script for range input label -->

  </body>
</html>
