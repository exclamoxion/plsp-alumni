<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "plsp_alumni";

    $connection = new mysqli($host,$user,$pass,$db);

    if($connection->connect_error){
        $connection->connect_error;
    }else{
        return $connection;
    }


}
$host = "localhost";
$user = "root";
$pass = "";
$db = "plsp_alumni";

$connection = new mysqli($host,$user,$pass,$db);

if($connection->connect_error){
    $connection->connect_error;
}else{
    return $connection;
}


?>