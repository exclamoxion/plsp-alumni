<?php

include('../connection.php');
include('session.php');


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
    <title>Batch Year</title>

</head>



<body>
<?php
    if (isset($_POST['save'])) {


        $by = $_POST['by'];
       


        $query = mysqli_query($connection, "SELECT * from batchyear where year = '$by'");
        if (mysqli_num_rows($query) > 0) {
            echo ('<script>alert("Data Existed");</script>');
        } else {
            mysqli_query($connection, "insert into batchyear (year) values ('$by')") or die($connection->error);
            echo ('<script>location.href = "batchyear.php"</script>');
        }
    }
    ?>
    <?php include('admindash.php');?>
    <div id="content">
        <div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">



                    <a class="navbar-brand" href="#"> Batch Year </a>

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


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Add Batch Year</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $course = mysqli_query($conn, "SELECT * FROM batchyear where by_id = {$_GET['id']}");
                        foreach (mysqli_fetch_array($course) as $k => $v) {
                            $$k = $v;
                        }
                    }
                    ?>
                    <form class="form-horizontal" method="POST">

                        <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Batch Year</label>
                            <div class="controls">
                                <input type="text" name="by" id="inputPassword" class="form-control" value="<?php echo isset($by) ? $by : '' ?>" placeholder="Batch Year" required>
                            </div>
                        </div>




                        <div class="control-group">
                            <div class="controls">
                                <hr>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save Class</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

 

            <div class="row ">
                <div class="col-lg-12 col-md-12">
                    <div class="card" style="min-height: 485px">
                        <div class="card-header card-header-text">
                            <!-- Alumni Pending -->
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive pb-5">
                                        <br>
                                        <button type="button" class="btn btn-primary mb-1 bx bxs-user-plus" data-toggle="modal" data-target="#exampleModal"> Add Batch Year</button>
                                        <br>
                                        <br>
                                        <table
                                            class="table table-striped table-bordered dt-responsive nowrap text-center"
                                            id="datatable">


                                            <thead>
                                                <tr>
                                                    <th>Batch Year</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = mysqli_query($conn, "select * FROM batchyear ") or die($conn->error);
                                                while ($row = mysqli_fetch_array($query)) {
                                                    $id  = $row['by_id'];
                                                ?>
                                                <tr>

                                                    <td><?php echo $row['year']; ?></td>


                                                    <td class="col-md-12 col-4">
                                                    <button title="Delete" type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#delete<?php echo $id ?>">Delete<i class='bx bxs-trash'></i>
                                            </button>
                                                    </td>


                                                </tr>
                                                <?php include('deletebatchmodal.php'); } ?>
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