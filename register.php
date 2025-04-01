<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['Cpassword']);  //MD5 algorithm is an old and weak method for hashing passwords.
                                       //stronger hashing method like bcrypt or password_hash() should be used instead.
  

   $select = " SELECT * FROM user_form WHERE email = '$email' &&  name='$name' ";

   $result = mysqli_query($conn, $select);


   if(mysqli_num_rows($result) > 0){

      $error[] = 'Email already exists';

   }
     else if (empty( $name)) {
      $error[] ="Name is required";
  }
  
  else if ( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error[] ='Valid email is required';
  }
  
 else  if ($pass < 4) {
    $error[] ='Password must be at least 4 characters';
  }


      else if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password,role) VALUES('$name','$email','$pass','user')";
         mysqli_query($conn, $insert);
   //       echo "<div class='message'>
   //       <p>Registration successfully!</p>
   //   </div> <br>";

   $success[] ='Registration successfully!';
      }
   

};


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="style.css"/>
    <title> Sign In</title>
 </head>

 <body>
    
<section class="sign-in">

<div class="signin-container">



<h1>Register</h1>

<form action="" method="post" class="signin-form" novalidate>


     <div class="signin-detail">
   <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
    <?php
      if(isset($success)){
         foreach($success as $success){
            echo '<span class="success-msg">'.$success.'</span>';
         };
      };
      ?>
      <label for="name" class="signin-label">Name</label>
      <input type="name" name="name" placeholder="Enter Name" id ="name" class="signin-input">

    </div>

  
   <div class="signin-detail">

    <label for="email" class="signin-label">Email</label>
    <input type="email" name="email" placeholder="Enter Email" id ="email" class="signin-input">

   </div>


    <div class="signin-detail">

        <label for="password" class="signin-label"> Password</label>
        <input type="password" name="password" placeholder="Enter Password" id ="password" class="signin-input">

    </div>

      <div class="signin-detail">

        <label for="password" class="signin-label">Confirm Password</label>
        <input type="password" name="Cpassword"  placeholder="Confirm Password" id ="Cpassword" class="signin-input">

      </div>
   

      <input type="submit" name="submit" value="register now" class="form-btn">
      </form>
      </div>


<a href="home.php">
<i class="fa fa-arrow-left signin-close " id="signin-close"></i></a>




</section>




 </body>
 </html>