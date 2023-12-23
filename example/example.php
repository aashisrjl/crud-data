<?php

    $host="localhost";
    $username="root";
    $password ="";
    $dbname= "class";

    $conn = mysqli_connect($host,$username,$password,$dbname);

    if(mysqli_connect_errno())
    {
        die("Sorry !");
    }
 ?>
