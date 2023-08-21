<?php

session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login </title>
    <link href="../assets/img/plsplogo.png" rel="icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- Template Main CSS File -->

</head>

<body>



    <img class="wave" src="assets/img/wave.png">
    <div class="container">
        <div class="img">
            <img src="../assets/img/plsplogo.png" id="plsplogo">
        </div>
        <div class="login-content">
            <form method="POST" enctype="multipart/form-data">
                <img src="assets/img/avatar.svg">
                <h2 class="title">Admin Login</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" class="input" name="username" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="password" required>
                    </div>
                </div>
                <a href="#">Forgot Password?</a>
                <input type="submit" name="submit" class="btn btn-success" value="Login">
            </form>
        </div>
    </div>

    <?php
    include('../connection.php');
    $conn = connection();

    if (isset($_POST['submit'])) {


        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

        $query = mysqli_query($connection, "select * from admin where username='$username' and password='$password'") or die($connection->error);
        $count = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);


        if ($count > 0) {

            $_SESSION['id'] = $row['admin_id'];
            echo ('<script>location.href = "dashboard"</script>');

            echo 'true';

            session_write_close();
            exit();
        } else {
            session_write_close();
    ?>
            <script>
                swal({
                    title: "Failed to Login",
                    text: "Wrong Information!",
                    icon: "error",
                });
            </script>

    <?php
        }
    }
    ?>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>