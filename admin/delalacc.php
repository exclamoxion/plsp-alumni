<?php
require('../connection.php');
$connection = connection();

if(isset($_POST['btn_delete'])){
    $id = $_POST['id'];

    $query = mysqli_query($connection, "update alumnistudents set status='3' where alumni_id = '$id'") or die($connection->error);
 
    if($query){
        echo 'data deleted';
        header("Location: alumni.php");
    }else{
        echo 'not deleted';
        header("Location: alumni.php");
    }
}


?>