<?php

session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>

<?php
            include('connection.php');
            $conn = connection();

            if (isset($_POST['submit'])) {


                $snumber = mysqli_real_escape_string($conn, $_POST['snumber']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);

                $query = mysqli_query($conn, "SELECT * from alumnistudents where studentnumber='$snumber' AND password='$password' AND status=1") or die($connection->error);
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);


                if ($count > 0) {

                    $_SESSION['id'] = $row['alumni_id'];
                    echo ('<script>location.href = "alumnidata"</script>');

                    session_write_close();
                    exit;


            
                } else{
                   echo '
                   <script>alert("Invalid Credentials");</script>';
                    }
            }
            ?>



          


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PLSP - Alumni</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/plsplogo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/mainindex.css" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<style>
    #qwe{
        display: flex !important;
        height: 100% !important;
        width: 100% !important;
        /* padding: 20px 300px; */
        justify-content: center !important;
        align-items: center !important;
    }
</style>
<body>

    <div class="top-bar">
        <div class="container-xl">
            <div class="row d-flex align-items-center px-md-5">
                <div >
                    <a href="index">
                    <img src="assets/img/plspalumniheads.png" id="qwe">
                    </a>
                </div>
                <div class="col-md-6 col-sm-8">
                    <div class="d-flex justify-content-sm-end justify-content-between" id="logreg">
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row no-gutter">

            <div class="col-md-6 bg-light">
                <div class="career-box d-flex align-items-bottom py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">

                                <h1 class="mb-0">Welcome Back!</h1>
                                <p class="text-muted">To keep connected with us, please login using your personal
                                    information.</p>
                                <br>
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group mb-3">
                                        <label>
                                            <strong>Student ID No.</strong>
                                        </label>
                                        <input type="text" name="snumber" required autofocus class="form-control shadow-sm px-3">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>
                                            <strong>Password</strong>
                                        </label>
                                        <input type="password" name="password" required autofocus class="form-control shadow-sm px-3">
                                    </div>


                                    <hr class="my-3">
                                    <div class="d-flex justify-content-between">
                                        <button type="submit" name="submit" class="btn btn-primary text-uppercase px-5 mb-5 h5 shadow-sm">
                                            <i class="fas fa-sign-in-alt"></i> Sign in
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 bg-success" style="background-color: yellow">
                <div class="career-box  row align-items-center p-5">
                    <div class="col-12 mt-5">
                        <p class="text-center">
                            img
                        </p>
                        <div class="text-white mt-3 text-center">
                            <h1>Hello Alumni!</h1>
                        </div>
                        <p class="text-white text-center">
                            Enter your personal details and start your journey with us.
                            <br>
                            <br>
                            <a href="dpa" class="btn btn-dark px-5 text-uppercase mb-5 text-white h5">Signup</a>

                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-dark text-white container-fluid">
        <div class="px-lg-5 py-5">
            <div class="row px-5 my-4">
                <div class="col-md-6">
                    <table class="table table-borderless  text-white">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <h3 class="text-success mb-0">Address</h3>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-map-marker-alt"></i></td>
                                <td>Brgy. San Jose, San Pablo City, Philippines 4000</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h3 class="text-success mb-0">Phone Number</h3>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-phone-alt"></i></td>
                                <td>(049) 536-7830</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h3 class="text-success mb-0">Email Address</h3>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-envelope-open-text  "></i></td>
                                <td>plsp.official@plsp.edu.ph</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h3 class="text-success mb-0">Office Hours</h3>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-envelope-open-text  "></i></td>
                                <td>8:00 AM - 5:00PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15481.209734849295!2d121.33437431882975!3d14.05931003025033!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd5c8554956aaf%3A0x7b1213a951d955c!2sPLSP!5e0!3m2!1sen!2sph!4v1680739154331!5m2!1sen!2sph" width="100%" height="450" style="border:5px solid rgb(25,135,84);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
        </div>
    </section>

    <div class="copyrights bg-success text-white">
        <div class="container-fluid">
            <div class="row mx-2 pb-3 pt-4">
                <div class="col-lg-12 text-center">
                    <p>
                        © 2021. Pamantasan ng Lungsod ng San Pablo.

                    </p>
                </div>

            </div>
        </div>
    </div>






    <!-- Vendor JS Files -->
   
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   
    <script src="https://kit.fontawesome.com/92ba028068.js" crossorigin="anonymous"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>