<?php 
include "connection.php";
if(isset($_POST['reg'])){
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['mail'];
    $password=$_POST['pass'];


    $query="insert into reg_from(firstname,lastname,email,password) values('$firstname','$lastname','$email','$password')";
    $result=mysqli_query($conn,$query);
    if($result){
        // echo "inserted successfully";
        header("Location:login.php");
    }else{
        die(mysqli_error($conn));
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER FORM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="index">
    <form method="post" autocomplete="off" >
        <h3>REGISTRATION FORM</h3>
        <lable>First Name:</lable> 
        <input type="text" name="fname" required autofocus><br><br>
        <lable>Last Name:</lable> 
        <input type="text" name="lname" required><br><br>     
        <lable>Email:</lable> 
        <input type="text" name="mail" required><br><br>
        <lable>Password:</lable>
        <input type="password" name="pass" required><br><br>
        <button type="submit" name="reg" >Register</button><br> <br>
        <label>Already have an account?<a href="login.php">Login</a></label>
    </form>
</div>
</div>
</body>
</html>
