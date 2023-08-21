<?php

include('../connection.php');
include('session.php');
$get_id = $_GET['id'];
?>

<!-- 
    
    No Deletion, Archive dahil through Validation of data if reject yung data ng isang user automatically 
    na mapupunta sa archive yung data nya.
    
 -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>



<body>
    <?php include('admindash.php'); ?>
    <div id="content">
        <div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">



                    <a class="navbar-brand" href="#"> Dashboard </a>

                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid text-white fa-3x fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="fa-solid fa-bell"></i>
                                    <span class="notification">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">You have 5 new messages</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Mike</a>
                                    </li>
                                    <li>
                                        <a href="#">Wish Mary on her birthday!</a>
                                    </li>
                                    <li>
                                        <a href="#">5 warnings in Server Console</a>
                                    </li>

                                </ul>
                            </li>
                            <!-- <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="material-icons">apps</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="material-icons">person</span>
                        </a>
                    </li> -->
                            <li class="dropdown nav-item ">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="fa-solid fa-gear"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="logout.php">Logout</a>
                                    </li>


                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


        <div class="main-content">



            <div class="row ">
                <div class="col-lg-12 col-md-12">
                    <div class="card" style="min-height: 485px">
                        <div class="card-header card-header-text">
                            <a href="pending"><i class="fa fa-arrow-left text-success" aria-hidden="true"> Back</i></a>
                        </div>

                        <div class="container">
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $row['alumni_id'] ?>">
                                <div class="row ">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card" style="min-height: 485px">
                                            <div class="card-header card-header-text">

                                                <p class="category"></p>
                                            </div>


                                            <?php
                                            $q = mysqli_query($connection, "select * from alumnistudents where alumni_id='$get_id'") or die($connection->error);
                                            $row = mysqli_fetch_array($q);
                                            // var_dump($row['middlename']);
                                            ?>


                                            <div class="container pb-2">
                                                <div class="row">
                                                    <div class="col-12 font-weight-bold">
                                                        <h4>Personal Information</h4>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2 ">
                                                        <label>Firstname</label>
                                                        <input type="text" class="form-control" name="firstname" value="<?= $row['fname'] ?> " readonly required>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Lastname</label>
                                                        <input type="text" class="form-control" name="lastname" value="<?= $row['lname'] ?> " readonly>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Middle Name</label>
                                                        <input type="text" class="form-control" name="middlename" value="<?= $row['mname'] ?> " readonly>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Extension Name</label>
                                                        <input type="text" class="form-control" name="extension" value="<?= $row['exname'] ?> " readonly>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Civil Status</label>
                                                        <input type="text" class="form-control" name="civil" value="<?= $row['civilstatus'] ?>" readonly required>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Gender</label>
                                                        <input type="text" class="form-control" name="gender" value="<?= $row['gender'] ?>" readonly required>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Date of Birth</label>
                                                        <input type="date" class="form-control" name="datebirth" value="<?= $row['datebirth'] ?>" readonly required>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Place of Birth</label>
                                                        <input type="text" class="form-control" name="placebirth" value="<?= $row['placebirth'] ?>" readonly required>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Citezentship</label>
                                                        <input type="text" class="form-control" name="citizen" value="<?= $row['citizen'] ?>" readonly required>
                                                    </div>

                                                    <div class="col-12 font-weight-bold pt-3">
                                                        <h4>Contact Information</h4>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" name="email" value="<?= $row['email'] ?>" readonly required>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Mobile Number</label>
                                                        <input type="text" class="form-control" name="mobilenum" value="<?= $row['mobile'] ?>" readonly required>
                                                    </div>


                                                    <div class="col-12 font-weight-bold pt-3">
                                                        <h4>Education Information</h4>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Batch year</label>
                                                        <input type="text" class="form-control" name="batchyear" value="<?= $row['batchyear'] ?>"  readonly required>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Student Number</label>
                                                        <input type="text" class="form-control" name="studentnumber" value="<?= $row['studentnumber'] ?>"  required>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Program</label>
                                                        <input type="text" class="form-control" name="program" value="<?= $row['course'] ?>" readonly required>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Major</label>
                                                        <input type="text" class="form-control" name="major" value="<?= $row['major'] ?>" readonly>
                                                    </div>

                                                    <div class="col-12 font-weight-bold pt-3">

                                                        <h4>Employment Information</h4>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">

                                                        <label>Employment Status</label>
                                                        <input type="text" class="form-control" name="emplostat" value="<?= $row['emplosta'] ?> " readonly>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Company Name</label>
                                                        <input type="text" class="form-control" name="companyname" value="<?= $row['companyname'] ?>" readonly>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Work Position</label>
                                                        <input type="text" class="form-control" name="workpos" value="<?= $row['workpos'] ?>" readonly>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Year of Service</label>
                                                        <input type="text" class="form-control" name="yearservice" value="<?= $row['yearservice'] ?>" readonly>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Industry</label>
                                                        <input type="text" class="form-control" name="industry" value="<?= $row['industry'] ?>" readonly>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <label>Others</label>
                                                        <input type="text" class="form-control" name="others" value="<?= $row['others'] ?>" readonly>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 p-2">
                                                        <?php
                                                        function generatePassword($length = 10)
                                                        {
                                                            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                                            $password = '';
                                                            for ($i = 0; $i < $length; $i++) {
                                                                $password .= $characters[random_int(0, strlen($characters) - 1)];
                                                            }
                                                            return $password;
                                                        }


                                                        ?>
                                                        <label>Password</label>
                                                        <input type="text" class="form-control" name="password" value="<?=generatePassword() ?>" readonly>
                                                    </div>

                                                    <hr>
                                                    <div class="col-md- col-sm-12 p-2">
                                                        <button class="btn btn-success" name="save">Accept</button>
                                                        <button class="btn btn-danger" name="reject">Reject</button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </form>


                            <?php

                            use PHPMailer\PHPMailer\PHPMailer;

                            require_once '../Mailer/src/Exception.php';
                            require_once '../Mailer/src/PHPMailer.php';
                            require_once '../Mailer/src/SMTP.php';

                            $mail = new PHPMailer(true);

                            $alert = '';

                            if (isset($_POST['save']) && !empty($_POST['id'])) {

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
                                $password = $_POST['password'];


                                $main = mysqli_query($connection, "update alumnistudents set fname ='$firstname', mname='$middlename',lname='$lastname',exname='$extension',civilstatus='$civil',gender='$gender',datebirth='$datebirth',placebirth='$placebirth',citizen='$citizen',email='$email',mobile='$mobilenum',city='$city',province='$province',batchyear='$batchyear', studentnumber='$studentnumber',course='$program',major='$major',emplosta='$emplostat',companyname='$companyname',workpos='$workpos',yearservice='$yearservice',industry='$industry',others='$others', password='$password', status = 1 where alumni_id='$get_id'") or die($connection->error);




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
                                $mail->AddEmbeddedImage('../assets/img/plspheader.jpg', 'testImage', 'plspheader.jpg');

                                $mail->Body = '<div style="color:red; border: 5px solid green; width: 99%;  background-color: green; color: white; text-align: center;">
                                <h1>PLSP ALUMNI PORTAL INFORMATION</h1>
                                </div>
                                <div class="container" style=" border: 5px solid green;  width: 99%;">        
                                <img style="position: relative; max-height: 250px;" src="cid:testImage" alt="" width="100%" height="auto" >
                                <div class="container1" style="text-align: center;">
                                <h1>Congratulation: ' . $firstname . ' ' . $lastname . ' Here is your Account:</h1>
                                <p> Student Number: ' . $studentnumber . ' </p>
                                <p> Student Number:  '  .$password. ' </p>
                                </div>
                                </div>';

                                $mail->send();
                                echo ('<script>location.href = "pending"</script>');
                            }

                            if (isset($_POST['reject'])) {


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


                                mysqli_query($connection, "update alumnistudents set status=2 where alumni_id='$get_id'") or die($connection->error);
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
                                $mail->AddEmbeddedImage('../assets/img/plspheader.jpg', 'testImage', 'plspheader.jpg');

                                $mail->Body = '<div style="color:red; border: 5px solid red; width: 99%;  background-color: red; color: white; text-align: center;">
                                <h1>PLSP ALUMNI PORTAL INFORMATION</h1>
                                </div>
                                <div class="container" style=" border: 5px solid red;  width: 99%;">        
                                <img style="position: relative; max-height: 250px;" src="cid:testImage" alt="" width="100%" height="auto" >
                                <div class="container1" style="text-align: center;">
                                <h1>Sorry ' . $firstname . ' Your Personal Information is not match in our data! </h1>
                                
                                </div>
                                </div>';

                                $mail->send();
                                echo ('<script>location.href = "pending"</script>');
                            }
                            ?>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/datatables.init.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>