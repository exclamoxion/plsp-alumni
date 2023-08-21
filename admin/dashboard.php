<?php

include('../connection.php');
include('session.php');
//industry
$querys = "SELECT industry, count(*) as number FROM alumnistudents where status=1 and industry != ' '  GROUP BY industry ";
$result = mysqli_query($connection, $querys);

//Gender
$queryst = "SELECT gender, count(*) as number FROM alumnistudents where status=1 and gender != ' '  GROUP BY gender ";
$resultst = mysqli_query($connection, $queryst);

//batchyear
$querybatch = "SELECT batchyear, count(*) as number FROM alumnistudents where status=1 and batchyear != ' '  GROUP BY batchyear ";
$resultbatch = mysqli_query($connection, $querybatch);

//course
$querycourse = "SELECT course, count(*) as number FROM alumnistudents where status=1 and course != ' '  GROUP BY course ";
$resultcourse = mysqli_query($connection, $querycourse);

//employmentstatus
$queryemplo = "SELECT emplosta, count(*) as number FROM alumnistudents where status=1 and emplosta != ' '  GROUP BY emplosta ";
$resultemplo = mysqli_query($connection, $queryemplo);


?>
<!-- 

    Dashboard View, Makikita natin yung overall alumni pending, Total Program/course, Total Alumni (Account Accepted)

 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="assets/css/piechart.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="../assets/css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Industry', 'Number'],
            <?php

                while ($row = mysqli_fetch_array($result)) {
                    echo "['" . $row["industry"] . "'," . $row['number'] . "], ";
                }

                ?>
        ]);

        var options = {
            title: 'Industry Chart',
            pieSliceText: 'none',
            responsive: true,
            height: 500,
            width: 1050,

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
    </script>

    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['gender', 'Number'],
            <?php

                while ($row = mysqli_fetch_array($resultst)) {
                    echo "['" . $row["gender"] . "'," . $row['number'] . "], ";
                }

                ?>
        ]);

        var options = {
            title: 'Gender Chart',
          
            pieHole: 0.4,
            height: 500,
            width: 1050,
            pieSliceText: 'none',
        };

        var chart = new google.visualization.PieChart(document.getElementById('ss'));

        chart.draw(data, options);
    }
    </script>

    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['course', 'Number'],
            <?php

                while ($row = mysqli_fetch_array($resultcourse)) {
                    echo "['" . $row["course"] . "'," . $row['number'] . "], ";
                }

                ?>
        ]);

        var options = {
            title: 'Course Chart',
            pieHole: 0.4,
            pieSliceText: 'none',
            responsive: true,
            height: 500,
            width: 1050,
        };

        var chart = new google.visualization.PieChart(document.getElementById('course'));

        chart.draw(data, options);
    }
    </script>

    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['batchyear', 'Number'],
            <?php

                while ($row = mysqli_fetch_array($resultbatch)) {
                    echo "['" . $row["batchyear"] . "'," . $row['number'] . "], ";
                }

                ?>
        ]);

        var options = {
            title: 'Batch Year Chart',
            pieHole: 0.4,
            pieSliceText: 'none',
            responsive: true,
            height: 500,
            width: 1050,
        };

        var chart = new google.visualization.PieChart(document.getElementById('by'));

        chart.draw(data, options);
    }
    </script>

    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['emplo', 'Number'],
            <?php

                while ($row = mysqli_fetch_array($resultemplo)) {
                    echo "['" . $row["emplosta"] . "'," . $row['number'] . "], ";
                }

                ?>
        ]);

        var options = {
            title: 'Emploment Status Chart',
            pieHole: 0.4,
            pieSliceText: 'none',
            responsive: true,
            height: 500,
            width: 1050,
        };

        var chart = new google.visualization.PieChart(document.getElementById('es'));

        chart.draw(data, options);
    }
    </script>
</head>
<style>

</style>

<body>
    <?php include('admindash.php'); ?>
    <div id="content">
        <div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">



                    <a class="navbar-brand" href="#"> Dashboard </a>

                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid text-white fa-3x fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none"
                        id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <!-- <li class="dropdown nav-item active">
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
                            </li> -->
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

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header">
                            <div class="icon icon-warning">
                                <i class="fa-solid fa-3x fa-bars-progress "></i>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="category"><strong> For Approval </strong></p>
                            <?php
                            $query =
                                'SELECT * FROM alumnistudents where status = 0';
                            $query_run = mysqli_query(
                                $connection,
                                $query
                            );

                            if (
                                $user_total = mysqli_num_rows(
                                    $query_run
                                )
                            ) {
                                echo '<h4 class="mb-0 text-dark card-title">' .
                                    $user_total .
                                    '</h4>';
                            } else {
                                echo 'no data';
                            }
                            ?>

                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <a href="pending"><i class="fa-solid fa-circle-info" style="color:#ff9800"> View More
                                    </i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header">
                            <div class="icon icon-rose">
                                <i class="fa-solid fa-3x fa-people-group"></i>

                            </div>
                        </div>
                        <div class="card-content">
                            <p class="category"><strong> Approved </strong></p>
                            <?php
                            $query =
                                'SELECT * FROM alumnistudents where status = 1';
                            $query_run = mysqli_query(
                                $connection,
                                $query
                            );

                            if (
                                $user_total = mysqli_num_rows(
                                    $query_run
                                )
                            ) {
                                echo '<h4 class="mb-0 text-dark card-title">' .
                                    $user_total .
                                    '</h4>';
                            } else {
                                echo 'no data';
                            }
                            ?>


                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <a href="alumni"><i class="fa-solid fa-circle-info" style="color:#e91e63"> View More
                                    </i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header">
                            <div class="icon icon-success">
                            <i class="fa-solid fa-3x fa-person-circle-xmark"></i>

                            </div>
                        </div>
                        <div class="card-content">
                            <p class="category"><strong> Rejected</strong></p>
                            <?php
                            $query =
                                'SELECT * FROM alumnistudents where status = 2';
                            $query_run = mysqli_query(
                                $connection,
                                $query
                            );

                            if (
                                $user_total = mysqli_num_rows(
                                    $query_run
                                )
                            ) {
                                echo '<h4 class="mb-0 text-dark card-title">' .
                                    $user_total .
                                    '</h4>';
                            } else {
                                echo 'no data';
                            }
                            ?>





                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <a href="archive"><i class="fa-solid fa-circle-info" style="color:#4caf50"> View More
                                    </i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header">
                            <div class="icon ">
                                <i class="fa-solid fa-3x fa-trash" style="color: red;"></i>

                            </div>
                        </div>
                        <div class="card-content">
                            <p class="category"><strong> Deleted Alumni</strong></p>
                            <?php
                            $query =
                                'SELECT * FROM alumnistudents where status = 3';
                            $query_run = mysqli_query(
                                $connection,
                                $query
                            );

                            if (
                                $user_total = mysqli_num_rows(
                                    $query_run
                                )
                            ) {
                                echo '<h4 class="mb-0 text-dark card-title">' .
                                    $user_total .
                                    '</h4>';
                            } else {
                                echo 'no data';
                            }
                            ?>





                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <a href="deleteacc"><i class="fa-solid fa-circle-info" style="color:red"> View More
                                    </i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row-fluid">
                <div class="col-12 bg-white p-3 ">
                    <div class="col-4 ">
                        <label class="text-dark" style="font-weight:bolder;">
                            Select Data
                        </label>
                        <select id="emp-status" name="emplostat" class=" form-control" onchange="onEmpStatusSelect()">
                            <option value="select" class="text-muted">Select</option>

                            <option value="gender">Gender</option>
                            <option value="industry">Industry</option>
                            <option value="course">Course</option>
                            <option value="by">Batch Year</option>
                            <option value="es">Employment Status</option>

                        </select>
                    </div>
                </div>

                <div class="col-12-fluid text-center">

                    <br>
                    <div class="industry">
                        <div id="piechart"></div>
                    </div>

                    <div class="gender">
                        <div id="ss"></div>
                    </div>

                    <div class="course">
                        <div id="course"></div>
                    </div>

                    <div class="by">
                        <div id="by"></div>
                    </div>

                    <div class="es">
                        <div id="es"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <script src="assets/js/piechart.js"></script>

</body>

</html>