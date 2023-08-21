<?php
include("connection.php");

if(isset($_POST['check_submit_btn']))
{
    $email=$_POST['email_id'];
    $queryoness = mysqli_query($connection, "SELECT * from alumnistudents where email ='$email' ") or die($connection->error);
    if(mysqli_num_rows($queryoness)>0){
      echo "Email Already Exist!, Try other Email!";
     
    }else{
      
    }
}
?>