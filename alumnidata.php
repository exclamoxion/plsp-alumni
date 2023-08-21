<?php

include('connection.php');
include('session.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php include('alumnisidebar.php'); ?>
    <div id="content">

        
<div class="top-navbar">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

       

            <a class="navbar-brand" href="#"> Dashboard </a>

            <button class="d-inline-block d-lg-none ml-auto more-button" type="button"
                data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="material-icons">more_vert</span>
            </button>

            <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none"
                id="navbarSupportedContent">
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
                            <?php


                            $conn = connection();

                            $query = mysqli_query($connection, "select * from alumnistudents where alumni_id = '$session_id' ") or die($connection->error);
                            while ($row = mysqli_fetch_array($query)) {
                                $aid = $row['alumni_id'];


                            ?>
                            <p class="category"></p>
                        </div>




                        <div class="container pb-2">
                            <div class="row">
                            <div class="col-12 font-weight-bold">
                                    <h4>Personal Information</h4>
                                    <hr>
                                </div>
                            
                                <div class="col-md-6 col-sm-12 p-2 ">
                                    <label>Firstname</label>
                                    <input type="text" class="form-control" value="<?=$row['fname']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Lastname</label>
                                    <input type="text" class="form-control" value="<?=$row['lname']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control" value="<?=$row['mname']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Extension Name</label>
                                    <input type="text" class="form-control" value="<?=$row['exname']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Civil Status</label>
                                    <input type="text" class="form-control" value="<?=$row['civilstatus']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Gender</label>
                                    <input type="text" class="form-control" value="<?=$row['gender']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Date of Birth</label>
                                    <input type="text" class="form-control" value="<?=$row['datebirth']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Place of Birth</label>
                                    <input type="text" class="form-control" value="<?=$row['placebirth']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Citezentship</label>
                                    <input type="text" class="form-control" value="<?=$row['citizen']?>" disabled>
                                </div>

                                <div class="col-12 font-weight-bold pt-3">
                                    <h4>Contact Information</h4>
                                    <hr>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="<?=$row['email']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control" value="<?=$row['mobile']?>" disabled>
                                </div>

                                <div class="col-12 font-weight-bold pt-3">
                                    <h4>Address Information</h4>
                                    <hr>
                                </div>
                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Region</label>
                                    <input type="text" class="form-control" value="<?=$row['region']?>" disabled>
                                </div>
                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Province</label>
                                    <input type="text" class="form-control" value="<?=$row['province']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>City</label>
                                    <input type="text" class="form-control" value="<?=$row['city']?>" disabled>
                                </div>
                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Barangay</label>
                                    <input type="text" class="form-control" value="<?=$row['barangay']?>" disabled>
                                </div>
                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>House Number / Street</label>
                                    <input type="text" class="form-control" value="<?=$row['street']?>" disabled>
                                </div>

                               
                              
                                <div class="col-12 font-weight-bold pt-3">
                                    <h4>Education Information</h4>
                                    <hr>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Batch year</label>
                                    <input type="text" class="form-control" value="<?=$row['batchyear']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Student Number</label>
                                    <input type="text" class="form-control" value="<?=$row['studentnumber']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Program</label>
                                    <input type="text" class="form-control" value="<?=$row['course']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Major</label>
                                    <input type="text" class="form-control" value="<?=$row['major']?>" disabled>
                                </div>
                               
                                <div class="col-12 font-weight-bold pt-3">
                                    
                                    <h4>Employment Information</h4>
                                    <hr >
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">

                                    <label>Employment Status</label>
                                    <input type="text" class="form-control" value="<?=$row['emplosta']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control" value="<?=$row['companyname']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Work Position</label>
                                    <input type="text" class="form-control" value="<?=$row['workpos']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Year of Service</label>
                                    <input type="text" class="form-control" value="<?=$row['yearservice']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Industry</label>
                                    <input type="text" class="form-control" value="<?=$row['industry']?>" disabled>
                                </div>

                                <div class="col-md-6 col-sm-12 p-2">
                                    <label>Others</label>
                                    <input type="text" class="form-control" value="<?=$row['others']?>" disabled>
                                </div>


                            </div>
                        </div>



                        <?php } ?>



                        <!-- <div class="card-content table-responsive">
                    <table class="table table-hover">
                        <thead class="text-primary">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Salary</th>
                                <th>Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bob Williams</td>
                                <td>$23,566</td>
                                <td>USA</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mike Tyson</td>
                                <td>$10,200</td>
                                <td>Canada</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tim Sebastian</td>
                                <td>$32,190</td>
                                <td>Netherlands</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Philip Morris</td>
                                <td>$31,123</td>
                                <td>Korea, South</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Minerva Hooper</td>
                                <td>$23,789</td>
                                <td>South Africa</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Hulk Hogan</td>
                                <td>$43,120</td>
                                <td>Netherlands</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Angelina Jolie </td>
                                <td>$12,140</td>
                                <td>Australia</td>
                            </tr>
                        </tbody>
                    </table>
                </div> -->
                    </div>
                </div>


            </div>
        </div>



    </div>



    </div>

</body>

</html>


