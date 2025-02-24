<?php

$email=$_POST['email'];

$password=$_POST['password'];


include ('dbconnect.php');

$query="SELECT * FROM signup WHERE email='".$email."' and password='".$password."'";



$run_query= mysqli_query($link,$query);

$seedata=mysqli_num_rows($run_query);

if($seedata>0){
  
    session_start();
    $_SESSION['email']=$email;
    
    header("location:index.php");

}
else {

    echo "Wrong user or password please try again";
    header("location:login.php");
}


  


    ?>