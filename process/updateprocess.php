<?php 
include("../connection/dbconnect.php"); 

$username = $_POST["username"];
$contact = $_POST["contact"];
$gender = $_POST["gender"];
$password = $_POST["password"];
$about = $_POST["about"];
$is_active = $_POST["is_active"];
$id= $_POST['id'];

$query = "UPDATE info SET username='$username', contact='$contact', gender='$gender',
password='$password', about='$about', is_active='$is_active' WHERE id='$id' ";
if(mysqli_query($conn,$query)){
   header('Location:result.php');
 }
else{
    die("Sorry ! The process can't be continue");
 }



/*if(isset($_POST['username'])&& isset($_POST['contact'])&& isset($_POST['gender'])&&
isset($_POST['password'])&& isset($_POST['about'])&& isset($_POST['is_active']))
{

}else{
   die("some data is missing");
}*/
 /*

    if($username =="")
    {
       echo "name cannot be null";
       die();
    }
    if($contact =="")
    {
       echo "contact cant be null";
       die();
    }
    if($gender =="")
    {
       echo "gender cant be null" ;
       die();
    }
    if($password=="")
    {
       echo "Password cant be null";
       die();
    }
    if($about=="")
    {
       echo "about cant be null";
       die();
    }
    */

?>

