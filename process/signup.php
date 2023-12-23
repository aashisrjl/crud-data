<?php
 include("../connection/dbconnect.php");
if($_SERVER['REQUEST_METHOD']==="POST"){

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass1']) && isset($_POST['pass2'])){ 

        $name = $_POST["name"];
        $pass1 = $_POST["pass1"];
        $email = $_POST["email"];
        $pass2 = $_POST["pass2"];

        if (strlen($name)<3)
        {
         die("name cannot be less than 3 letter");
        }

        if(strlen($pass1)<=8)
        {
            die("Pasword must be more than or equal to 8 character");
        }

        if(($pass1) != $pass2)
        {
            die("Password and Confirmation password must be same");
        }



        $en = md5($pass1);

        $query = "INSERT INTO log(name,email,pass1) VALUES('$name','$email','$en')";

        if(mysqli_query($conn,$query))
        {
            echo "Success";
        }
        else{
            echo "sorry";
        }
    }

}

 else{
    echo "you have to include post method";
    } 



?>
