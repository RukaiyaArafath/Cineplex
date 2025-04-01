
<?php

@include 'config.php';
if(!isset($_SESSION['isUserLoggedIn'])){
    echo "<script>window.location.href='home.php?user_not_logged_in';</script>";
    }
    if($_SESSION['role']!='user'){
        echo "<script>window.location.href='home.php';</script>";}


        
if(isset($_POST['submit'])){
        $feedback=$_POST["inquiry"];
        $email=$_POST["Email"];

        $insert = "INSERT INTO feedback_form(email, feedback) VALUES('$email','$feedback')";
        mysqli_query($conn, $insert);
        echo "<div class='message'>
        <p>Feedback sent!</p>
    </div> <br>";


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Customer Dashboard</title>
</head>
<body  >
    <h1>Welcome Customer</h1>
    <h2 ><?=$_SESSION['email']?></h2>

    <a href="logout.php">logout</a>



    <div class="feedback">


<p>Got something on your mind ? let us know.</p>

<form action="" method="post">
<div class="email">
<label for="email" class="signin-label">Email</label>
    <input type="email" name="Email" placeholder="Enter Email" id ="email" >
</div>
<textarea id="inquiry" name="inquiry" rows="4" cols="50" placeholder="Add your inquiry"></textarea>



<input type="submit" name="submit" value="register now" class="form-btn">
    </form>



    </div>
</body>
</html>