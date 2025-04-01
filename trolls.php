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
 
<title> Trolls Band Togather</title>
 </head>

<body>

<!--header start-->

<section class="header">
    
    <a href="home.php" class="logo"><span>C</span>ineplex.</a>



<nav class="navbar">
        <a href="home.php">Home</a>
        <a href="movies.php">Movies</a>
        <a href="promotion.php">Deals & Events</a>
        <a href="#">About us</a>
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
   <input type="search" placeholder="  Search movie" class="search-input">
</form>


<i class="fas fa-times search-close" id="search--close"></i>
</div>
<!--search screen end-->

<!--Login-->

<div class="login"  id="login">
   <form action="" class="login-form">
   <h2 class="login-title">Log in</h2>


<div class="login-group">
  
   <div class="login-detail">

    <label for="email" class="login-label">Email</label>
    <input type="email" placeholder="Enter Email" id ="email" class="login-input">

   </div>


     <div class="login-detail">

        <label for="password" class="login-label">Password</label>
        <input type="password" placeholder="Enter Password" id ="password" class="login-input">

      </div>

</div>

   <div class="login-function">
      <p class="login-signup">
         You do not have an account?<a href="#" >Sign up</a>
      </p>

      <a href="#" class="login-forgot"> Forgot password? </a>

<button type="submit" class="login-button">Login In</button>

   </div>
   </form>

   <i class="fas fa-times login--close" id="login-close"></i>

</div>

</section>




<section class="design">


<div class="img" >   

<img src="image/trollhome.jpg">

</div>

<div class="content" >  

<span class="troll">Trolls Band Together</span>
<p>Poppy discovers that Branch was once part <br>of the boy band 'BroZone' with his brothers,<br> Floyd, John Dory, Spruce and Clay. 
    When Floyd is kidnapped, <br>
    Branch and Poppy embark on a journey to<br> reunite his two other brothers and rescue Floyd..</p>

     </div>
     



</div>

     <div class="cast">
      <h3  class="tcast">Cast </h3>
      
      <span>Anna Kendrick</span>
      <strong>.</strong>
      <span>Justin Timbelake</span>
      <strong>.</strong>
     <span>Ken Thompson</span>
     <strong>.</strong>
     <span>Walt Dohrn</span>
     </div>














</section>


























<section class="footer">
    <div class="box-container">

    <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
        <a href="movies.php"> <i class="fas fa-angle-right"></i>Movies</a>
        <a href="promotions.php"> <i class="fas fa-angle-right"></i>Deals & Events </a>
        <a href="#"> <i class="fas fa-angle-right"></i> About us</a>
</div>





<div class="box">
        <h3>Additional links</h3>
  
        <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
</div>




<div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +94 011-253-612-68</a>
        <a href="#"> <i class="fas fa-phone"></i> +94 011-777-610-68</a>
        <a href="#"> <i class="fas fa-envelope"></i> zero36@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i> 25th lane colombo, srilanka</a>
</div>

<div class="box-icons">
        <h3>Follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i></a>
        <a href="#"> <i class="fab fa-twitter"></i></a>
        <a href="#"> <i class="fab fa-instagram"></i></a>
       
</div>

</div>

<div class="credit">created by<span> ms rukaiya</span> | all rights reserved.</div>


</section>
<script  src="script.js"></script>
</body>
</html>