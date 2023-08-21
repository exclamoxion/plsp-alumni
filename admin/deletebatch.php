<?php
require('../connection.php');
$connection = connection();

if(isset($_POST['btn_delete'])){
    $id = $_POST['id'];

    $query="DELETE FROM batchyear WHERE by_id='$id' ";
    $query_run =mysqli_query($connection, $query);
    if($query_run){
        echo 'data deleted';
        header("Location: batchyear.php");
    }else{
        echo 'not deleted';
    }
}


?>