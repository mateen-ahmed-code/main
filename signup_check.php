<?php
$name =  $_POST['username'];
$email = $_POST['email']; 
$password = $_POST['password']; 

include ('dbconnect.php');
$select="SELECT * FROM signup WHERE email='".$email."'";
$run_query= mysqli_query($link,$select);
$seedata=mysqli_num_rows($run_query);

if($seedata>0){
    echo "Email already exists";
   
    echo "<div class='container d-flex'><div class='alert alert-success'>Email already exists.</div></div>";
   // header("location:signup.php");
}
    else{
    
        $query="insert into signup(name,email,password) values('".$name."','".$email."','".$password."')";

        $add=mysqli_query($link,$query);
        
        if($add){
           /* echo "<br>";
            echo "You are successfully registered";*/
            header("location:login.php");
        }
    }

?>
Click here to Signup
<a href="signup.php">Signup Here</a>