<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
include("connection.php");


use PHPMailer\PHPMailer\PHPMailer;

require_once 'Mailer/src/Exception.php';
require_once 'Mailer/src/PHPMailer.php';
require_once 'Mailer/src/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $id = uniqid();
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $extension = $_POST['extension'];
    $civil = $_POST['civil'];
    $gender = $_POST['gender'];
    $datebirth = $_POST['datebirth'];
    $placebirth = $_POST['placebirth'];
    $citizen = $_POST['citizen'];
    $email = $_POST['email'];
    $mobilenum = $_POST['mobilenum'];
  
    $region = $_POST['region'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $barangay = $_POST['barangay'];
    $street = $_POST['street'];
  


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



    if(isset($_POST["g-recaptcha-response"])){
        $recaptcha = $_POST["g-recaptcha-response"];

        if(!$recaptcha){
            

     

        ?>
    <script>
    swal({
        title: "RECAPTCHA ERROR",
        text: "Please Check Recaptcha",
        icon: "error",
    });
    </script>
    <?php    }

    else{
            $secret ="6LdKAGIlAAAAAGpm3oN-vJkHDzok8b5Fnv1ae78q";
            $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptcha;
            $response=file_get_contents($url);
            $responseKeys = json_decode($response,true);
            
            if($responseKeys['success']){
                $queryone = mysqli_query($connection, "SELECT * from alumnistudents where email ='$email' AND studentnumber= '$studentnumber' ") or die($connection->error);
                if ($queryone->num_rows) {
                   ?>

    <script>
    Swal.fire(
        'EXITSTED',
        'Data Existed!',
        'error'
    ).then(function() {
        window.location = 'registration'
    })
    </script>


    <?php                  
                }else{
                    mysqli_query($connection, "INSERT INTO `alumnistudents` (`alumni_id`,`fname`,`mname`,`lname`,`exname`,`civilstatus`,`gender`,`datebirth`,`placebirth`,`citizen`,`email`,`mobile`,`region`,`province`,`city`,`barangay`,`street`,`batchyear`,`studentnumber`,`course`,`major`,`emplosta`,`companyname`,`workpos`,`yearservice`,`industry`,`others`) VALUES('$id','$firstname','$middlename','$lastname','$extension','$civil','$gender','$datebirth','$placebirth','$citizen','$email','$mobilenum','$region','$province','$city','$barangay','$street','$batchyear','$studentnumber','$program','$major','$emplostat','$companyname','$workpos','$yearservice','$industry','$others')");
            
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'plspalumni.edu@gmail.com';
                    $mail->Password = 'qlcenawdmfeciobr';
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = '587';
                
                    $mail->setFrom('plspalumni.edu@gmail.com');
                    $mail->addAddress($email);
                
                    $mail->isHTML(true);
                    $mail->Subject = 'Reviewing your Account';
                    $mail->AddEmbeddedImage('assets/img/plspheader.jpg', 'testImage', 'plspheader.jpg');
                
                    $mail->Body = '<div style="color:red; border: 5px solid green; width: 99%;  background-color: green; color: white; text-align: center;">
                        <h1>PLSP ALUMNI PORTAL INFORMATION</h1>
                        </div>
                        <div class="container" style=" border: 5px solid green;  width: 99%;">        
                        <img style="position: relative; max-height: 250px;" src="cid:testImage" alt="" width="100%" height="auto" >
                        <div class="container1" style="text-align: center;">
                        <h1>Your account is under review by the admin. Please wait for the email confirmation of your account registration.</h1>
                        </div>
                        </div>';
                
                    $mail->send();
               ?>

    <script>
    Swal.fire(
        'Success',
        'Your data is inserted!',
        'success'
    ).then(function() {
        window.location = 'index.php'
    })
    </script>





    <?php }
            }else{
               
                echo("<script>window.location = 'index.php';</script>");
                
            }
        }
    }
    
    

  
 
 }?>
</body>

</html>