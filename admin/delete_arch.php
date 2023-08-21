<?php
require('../connection.php');
$connection = connection();

if(isset($_POST['btn_delete'])){
    $id = $_POST['id'];
    $reason = $_POST['reason'];

    $querys="INSERT into `alumnistudents` (`reason`) VALUES('$reason')";
        $querys_run =mysqli_query($connection, $querys);
 
    if($querys_run){
        $query="DELETE FROM alumnistudents WHERE alumni_id='$id' AND status=2";
        $query_run =mysqli_query($connection, $query);
        header("Location: archive.php");
    }else{
        echo 'not deleted';
    }
}


?>