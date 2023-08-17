<?php
session_start();
if(!isset($_SESSION['firstname'])){
  header('location:logout.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME PAGE</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>


  <div class="banner">
    <div class="banner_index">
                                
        <h3>_WELCOME_ <?php echo $_SESSION['firstname'];?></h3>
        
        <a href="logout.php"><input type="submit" name="submit" value="logout"> </a> 

</div>                                                
</div>
</body>
</html>
