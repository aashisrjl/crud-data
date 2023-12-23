<?php
include("example.php");

$name =$_POST["name"];
$email =$_POST["email"];
$contact =$_POST["contact"];

$query = "INSERT INTO b(name,email,contact) 
 VALUES ('$name','$email,'$contact')";

if(mysqli_query($conn,$query)){
    echo "Congratulation";
}
else{
    echo "sorry !";
}

?>