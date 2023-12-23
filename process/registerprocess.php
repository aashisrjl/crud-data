

<?php 
include('../connection/dbconnect.php');

$username = $_POST["username"];
$contact = $_POST["contact"];
$gender = $_POST["gender"];
$password = $_POST["password"];
$about = $_POST["about"];
$is_active = $_POST["is_active"];

$query = "INSERT INTO info(username,contact,gender,password,about,is_active)
 VALUES('$username','$contact','$gender','$password','$about','$is_active')";

 if(mysqli_query($conn,$query)){
    echo " <h1>CONGRATULATION</h1>-";
    echo "===Your data Inserted====";
 }
 else{
    die("Sorry ! The process can't be Continue");
 }
?>
