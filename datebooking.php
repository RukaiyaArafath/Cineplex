
<?php
@include 'config.php';

$title=$_POST["movie"];
$date=$_POST["date"];
$time=$_POST["time"];
$seats=$_POST["quantity"];


if(mysqli_connect_errno()){
    die("connection error:".mysqli_connect_error());
}


$sql="INSERT INTO booking_form(movie_name,date,movie_time,seats) VALUES 
(?,?,?,?)";

$stmt= mysqli_stmt_init($conn);
if( ! mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt,"sssi",$title,$date,$time,
$seats);

mysqli_stmt_execute($stmt);
 echo "Booking Successful!!!";
        


     