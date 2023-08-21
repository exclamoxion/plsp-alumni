<?php

if(isset($_POST['submit'])){

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$extension = $_POST['extension'];
$civil = $_POST['civil'];
$gender = $_POST['gender'];
$datebirth = $_POST['datebirth'];
$placebirth = $_POST['placebirth'];
$citizen = $_POST['citizen'];
$landline = $_POST['landline'];
$mobilenum = $_POST['mobilenum'];
$address = $_POST['address'];
$city = $_POST['city'];
$province = $_POST['province'];
$batchyear = $_POST['batchyear'];
$studentnumber = $_POST['studentnumber'];
$program = $_POST['program'];
$major = $_POST['major'];
$emplostat = $_POST['emplostat'];
$companyname = $_POST['companyname'];
$workpos = $_POST['workpos'];
$yearservice = $_POST['yearservice'];
$industry = $_POST['industry'];
$others = $_POST['others'];


$queryone = mysqli_query($connection, "SELECT * from alumnistudents where studentnumber = '$studentnumber' AND lrn ='$lrn' AND delete_status = 0") or die($connection->error);
if (mysqli_num_rows($queryone) > 0) {
    echo ('<script>alert("DATA EXISTED")</script>');
    echo ('<script>location.href = "students.php"</script>');
}
$query = mysqli_query($connection, "INSERT INTO `alumnistudents`(`fname`, `mname`, `lname`, `exname`, `civilstatus`, `gender`, `datebirth`, `placebirth`, `citizen`, `landline`, `mobile`, `address`, `city`, `province`, `batchyear`, `studentnumber`, `course`, `major`, `emplosta`, `companyname`, `workpos`, `yearservice`, `industry`, `others`) VALUES ('$firstname','$middlename','$lastname','$extension','$civil','$gender','$datebirth','$placebirth','$citizen','$landline','$mobilenum','$address','$city','$province','$batchyear','$studentnumber','$program','$major','$emplostat','$companyname','$workpos','$yearservice','$industry','$others')");

if($query){
    echo '<script>alert("Registered Successfully!!!")</script>';
  
}else{
    echo '<script>alert("Failed to register")</script>';
    
}

}
?>