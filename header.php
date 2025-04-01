
<?php

session_start();

@include 'config.php';
if(isset($_POST['login'])){
 

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);


   $select = " SELECT * FROM user_form WHERE email='$email' && password = '$pass'  ";

   $result = mysqli_query($conn, $select);
   $data = mysqli_fetch_array($result);


   if($data){
    
   $_SESSION['isUserLoggedIn']=true;
   $_SESSION['email']=$email;
   $_SESSION['role']=$data['role'];
   $_SESSION['name']=$data['name'];
  
if($data['role']=="user"){
   echo "<script>window.location.href='user.php?user_loggedin';</script>";
}

if($data['role']=="admin"){
   echo "<script>window.location.href='admin.php?user_loggedin';</script>";
}


}else{

 echo'incorrect_email_or_password';
     }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="stylesheet" href="style.css"/>
<!-- cdn font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!--swiper css link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
 
<title> home</title>
 </head>

<body>

<!--header start-->

<section class="header">
    
    <a href="home.php" class="logo"><span>C</span>ineplex.</a>



<nav class="navbar">
        <a href="home.php">Home</a>
        <a href="movies.php">Movies</a>
        
        <a href="about us.php">About us</a>
</nav>

<div class="nav-action">

   <i class="fas fa-search nav-search" id="search-btn"></i>    
   <i class="fas fa-user nav-login" id="login-btn"></i>

<div id="menu-btn"  class="fas fa-bars"></div>

</div>

<!--search screen-->
<div class="search" id="search">

<form action="" class="search--form">
   <i class="fas fa-search search-icon"></i>
   <input type="search" placeholder="Search movie" class="search-input">
</form>


<i class="fas fa-times search-close" id="search--close"></i>
</div>
<!--search screen end-->

<!--Login-->

<div class="login"  id="login">






   <form action=""  method="post"  class="login-form">
   <h2 class="login-title">Log in</h2>
  
  
<div class="login-group">
  
   <div class="login-detail">

    <label for="email" class="login-label">Email</label>
    <input type="email" name="email" placeholder="Enter Email" id ="email" class="login-input">

   </div>


     <div class="login-detail">

        <label for="password" class="login-label">Password</label>
        <input type="password" name="password" placeholder="Enter Password" id ="password" class="login-input">

      </div>

</div>

   <div class="login-function">
      <p class="login-signup">
         You do not have an account?<a href="register.php" >Sign up</a>
      </p>

      <a href="#" class="login-forgot"> Forgot password? </a>

<button type="submit" class="login-button" name="login">Login In</button>

   </div>
   </form>
   

   <i class="fas fa-times login--close" id="login-close"></i>

</div>

</section>
<!--header ends-->