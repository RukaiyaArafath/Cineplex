
<?php
session_start();

@include 'config.php';

if(!isset($_SESSION['isUserLoggedIn'])){
    echo "<script>window.location.href='home.php?user_not_logged_in';</script>";
    }
    if($_SESSION['role']!='admin'){
        echo "<script>window.location.href='home.php';</script>";}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" charset="utf-8"></script>
    <title>Admin Dashboard</title>
</head>
<body>

<div class="admin-top">

        <a href="#" class="logo"><span>C</span>ineplex.</a>
    <div class="r-side">

                <div class="bell">
                    <i class='bx bxs-bell'></i>
                </div>

             <div class="profile"> 

                <div class="profile-img">
                    <img src="image/man.png" alt="">
                </div>

                    <div class="profile-button">
                             
                                <span> <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : $_SESSION['email']; ?></span>
                                <span><?php echo $_SESSION['email'] ?></span>
                        
                    </div>
                    <i class='bx bx-chevron-down profile-btn '   onclick="toggleDropdown()" ></i>

                    <div id="dropdown-menu" class="dropdown-content">
                    <a href="">View Profile Details</a>
                    <a href="">Create Accounts</a>
                        <a href="">Change Password</a>
                        <a href="">Logout</a>
                    </div>
              </div>
              <!-- <div class="signout">
              <i class='bx bx-log-out'></i><a href="logout.php">Log out</a>
            </div> -->
    </div>
</div>

<section class="side-bar">

<div class="top-bar">
   
       
    <div class="item"><a href="#" class="dash"><i class='bx bx-home-heart '></i>Dashboard</a></div>
     <div class="item">  <a href="" class="user"><i class='bx bx-group '></i>Customer</a></div> 

       <div class="item"> <a  class="movie" ><i class='bx bx-movie-play '></i>Movie 
       <i class="bx bx-chevron-down " id="movie-icon"></i></a>
       <div class="options" >
            <a href="#">Add movie listing</a>
            <a href="#">Update move details</a>
            <a href="#">Delete listing</a>
        </div>
    </div>
<div class="item"><a href="#"  class="book"><i class='bx bx-book-add book'></i>Booking </a></div>
        <div class="item"><a href="#"  class="inquiry"><i class='bx bx-message-rounded-dots '></i>Inquiry System</a></div>
       <div class="item"><a href="#"  class="content"><i class='bx bxs-message-square-edit '></i>Content System</a></div>

        
</div>


</section>

<section class="main">

    <div class="side-card">
        

        <div class="card1">

        <h3>Total Revenue</h3>
        <span>per day</span>
        <span>20,000</span>
        <span>LKR</span>
        </div>


        <div class="card2">

        <h3>Total New Users</h3>
        <span>per day</span>
        <span>10</span>
        </div>

        <div class="car32">

            <h3>Total booking</h3>
            <span>per day</span>
            <span>10</span>
        </div>
    </div>
    






</section>











    
   <script src="script.js"></script>

   <script type="text/javascript">
  $(document).ready(function() {
  $('.movie').click(function(event) {
      event.preventDefault(); // Prevents navigation
      $(this).next('.options').slideToggle(); // Toggles the next sibling .options
  });
});

</script>
</body>
</html>