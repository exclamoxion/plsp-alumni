<?php

include('../connection.php');
include('session.php');

?>
<!-- 

    Can Archive Accepted and Rejected Account 

 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni</title>

</head>



<body>
    
    <?php include('admindash.php');?>
   
    <div id="content">
        <div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">



                    <a class="navbar-brand" href="#"> Alumni </a>

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



            <div class="row ">
                <div class="col-lg-12 col-md-12">
                    <div class="card" style="min-height: 485px">
                        <div class="card-header card-header-text">
                            Alumni Archive
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                <div class="table-responsive pb-5">
                                        <table
                                            class="table table-striped table-bordered dt-responsive nowrap text-center"
                                            id="datatable">


                                            <thead>
                                                <tr>
                                                    <th>Student ID</th>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>Course</th>
                                                    <th>Action</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = mysqli_query($conn, "select * FROM alumnistudents where status=1") or die($conn->error);
                                                while ($row = mysqli_fetch_array($query)) {
                                                    $id  = $row['alumni_id'];
                                                ?>
                                                <tr>

                                                    <td><?php echo $row['studentnumber']; ?></td>
                                                    <td><?php echo $row['fname']; ?></td>
                                                    <td><?php echo $row['lname']; ?></td>
                                                    <td><?php echo $row['course']; ?></td>

                                                    <td class="col-md-12 col-4">
                                                 
                                                        <a href="view<?php echo '?id=' .$id;?>"
                                                            class="btn btn-primary">View</a>
                                                 
                                                        <a href="alup<?php echo '?id=' .$id;?>"
                                                            class="btn btn-success">Update</a>
                                          
                                                            <button type="button" class="btn btn-danger btn-md" title="Delete" data-toggle="modal" data-target="#delete<?php echo $id ?>"><i class='bx bxs-trash'></i> DELETE </button>
                                          

                                                    </td>


                                                </tr>
                                                <?php include('delacc_modal.php'); } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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