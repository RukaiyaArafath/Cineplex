

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




 
<title> Booking</title>
 </head>

<body>

<!--header start-->

<section class="header"style="background-image: url('image/about4.jpg'); >
    
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
         You do not have an account?<a href="register.php" >Sign up</a>
      </p>

      <a href="#" class="login-forgot"> Forgot password? </a>

<button type="submit" class="login-button">Login In</button>

   </div>
   </form>

   <i class="fas fa-times login--close" id="login-close"></i>

</div>

</section>



<section class="reserve">


<h2>Book now</h2>

<form action="datebooking.php" method="post" class="booking">


<div class="movie-name">


<select id="movie" class="movie"name="movie">
    <option  value="Captain Miller" >Captain Miller </option>
    <option  value="Upgraded" >Upgraded</option>
    <option  value="Shaitaan" >Shaitaan</option>
    <option  value="Dunki" >Dunki</option></select>


    
</div>





<div class="date">
<label for="date" class="date-label">Date :</label>

<select id="date" class="date"name="date">
    <option  value="16th march" >16th march</option>
    <option  value="17th march" >17th march</option>
    <option  value="18th march" >18th march</option></select>


    
</div>






    <div class="time" >

    <label for="time" class="Time-label">Time :</label>
    <div class="time-list">
    <input type="radio" id="time" name="time" value="9:00pm" >
    <label for="time">9:00pm</label><br>
    <input type="radio" id="time" name="time" value="2:00pm">
    <label for="time">2:00pm</label><br>
    <input type="radio" id="time" name="time" value="10:30am">
    <label for="time">10:30am</label><br>
</div>
</div>


<div class="seat-btn">
<label for="number" class="seat-num">No of Seats :</label>


<div class="quantity">
        <button class="btn minus-btn disabled" type="button">-</button>
        <input type="text" id="quantity" value="1" name="quantity">
        <button class="btn plus-btn" type="button">+</button>
    </div>
</div>


<div class="ticket-total">
   <span >Total price :</span>
<p class="total-price">

<span id="price" >1000</span>
</p>

</div>
<button  class="btn-3">Book now</button>


</form>

 


</section>




<script>

        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");

        var valueCount

        
        var price = document.getElementById("price").innerText;

        
        function priceTotal() {
            var total = valueCount * price;
            document.getElementById("price").innerText = total
        }

       
        document.querySelector(".plus-btn").addEventListener("click", function() {
          
            valueCount = document.getElementById("quantity").value;

            valueCount++;

       
            document.getElementById("quantity").value = valueCount;

            if (valueCount > 1) {
                document.querySelector(".minus-btn").removeAttribute("disabled");
                document.querySelector(".minus-btn").classList.remove("disabled")
            }

           
            priceTotal()
        })

      
        document.querySelector(".minus-btn").addEventListener("click", function() {
         
            valueCount = document.getElementById("quantity").value;

            valueCount--;

            document.getElementById("quantity").value = valueCount

            if (valueCount == 1) {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
            }

            priceTotal()
        })
    </script>









































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