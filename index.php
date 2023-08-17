 <?php
// require 'connection.php';
// if(!empty($_SESSION["id"])){

//   $id = $_SESSION["id"];
//   $result = mysqli_query($conn,"SELECT * from reg_from WHERE id = $id");
//   $row = mysqli_fetch_assoc($result);
// }else{
//   header("Location: welcome.php");
// }
?> 





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
  <div class="banner">
    <div class="banner_index">

        <h3>Hi!</h3>
        
        <button type="submit" class="btn"><a href="register.php">register</a></button>
        <button type="submit" class="btn"><a href="login.php">login</a></button>    

</div>                                                
</div>
</body>
</html>
