<?php
session_start();
include "connection.php";
$mesg = "";

  

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email != "" && $password != ""){
        $sql = "select id,firstname,email,password from reg_from where email = '$email' && password = '$password'";
        $result = mysqli_query($conn,$sql);
        $checkqry = mysqli_num_rows($result);
        // print_r($result);
        if($checkqry>0){
            $user = mysqli_fetch_assoc($result);
            $_SESSION['firstname'] = $user['firstname'];
            header("location:welcome.php");
        }
        else{
            $mesg = "INVALID EMAIL OR PASSWORD";
        }
    }else{
        echo "please enter all the details ";
    }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="container-log">
            <form action="" method="POST">
                <div class="errmsg">
                <?php
                echo "$mesg";
                
                ?>
                </div>
               
                <h2>LOGIN PAGE</h2>
                
                <label>EMAIL:</label>
                <input type="email" name="email" ><br><br>
                <label>PASSWORD:</label>
                <input type="password" name="password" ><br><br>
                <input type="submit" name="submit" class="btnlog" value="LOGIN"></a>
                <p>Don't have an account please ?<a href="register.php">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html> 