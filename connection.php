<?php

$conn = new mysqli("localhost","root","","reg_form");
if($conn){
   // echo"Connection successfully done";
}else{
    die(mysqli_error($conn));
}

?>