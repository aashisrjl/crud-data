<?php
include('../connection/dbconnect.php');
$id =$_GET['id'];

$query = "DELETE FROM info where id='$id'";

if(mysqli_query($conn,$query))
{
    header('location:result.php');
}
else{
    echo "error occured !";
}


?>