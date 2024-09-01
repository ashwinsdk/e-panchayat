<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "mysqldbconn.php";
$sqlget = "select * from griveance";
$sqldata = mysqli_query($conn, $sqlget);

$sql_acc = "select count(griveance_id) from griveance where gstatus = 'Approved'";
$query_acc = mysqli_query($conn, $sql_acc);
$row_acc= mysqli_fetch_assoc($query_acc);

$sql_rej = "select count(griveance_id) from griveance where gstatus = 'Disapporved'";
$query_rej = mysqli_query($conn, $sql_rej);
$row_rej= mysqli_fetch_assoc($query_rej);

$sql_len = "select count(griveance_id) from griveance";
$query_len = mysqli_query($conn, $sql_len);
$row_len= mysqli_fetch_assoc($query_len);


$sql_pend = "select count(griveance_id) from griveance where gstatus = 'Pending'";
$query_pend = mysqli_query($conn, $sql_pend);
$row_pend= mysqli_fetch_assoc($query_pend);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tehsildar home</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
              
           <!-- Navigation-->
           <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" role="button">Tehsildar</a>
                    <a type="button" href="index.php" class="btn btn-outline-light rounded-pill">Logout</a>
                  </div>
                </div>
                
            </nav><br><br>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Total Grievance Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Grievances</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                 echo $row_len['count(griveance_id)'];
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Accepted Grievances</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                 echo $row_acc['count(griveance_id)'];
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Rejected Grievances</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                 echo $row_rej['count(griveance_id)'];
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                 echo $row_pend['count(griveance_id)'];
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Grievances</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Grievances Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                    <tr>
                     <th>Grievance Id</th>
                      <th>Petitioner Name</th>
                      <th>Subject</th>
                      <th>Sarpanch Status</th>
                      <th>Tehsildar Status</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sqlget = "select * from griveance";
                    $sqldata = mysqli_query($conn, $sqlget);
                    $row = mysqli_fetch_assoc($sqldata);
                 
                    while($row = mysqli_fetch_assoc($sqldata)){
                      echo "<tr><td>";
                      echo $row['griveance_id'];
                      echo "</td><td>";
                      echo $row['petitioner'];
                      echo "</td><td>";
                      echo $row['subject'];
                      echo "</td><td>";
                      echo $row['gstatus'];
                      echo "</td><td>";
                      echo $row['tstatus'];
                      echo "</td><td>";
                      $griveance_id=$row['griveance_id'];
                      $petitioner=$row['petitioner'];
                      $subject=$row['subject'];
                      $status=$row['gstatus'];
                      echo '<form method="GET" action="view1.php">
                      <input type="submit" class="btn btn-outline-dark rounded-pill" value="View">
                      <input name="griveance_id" type="hidden" value='.$griveance_id.'>
                      </form>
                      ';
                      echo "</td></tr>";
                    }
                      ?>
                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                                        <?php
                                        while($row_pen = mysqli_fetch_assoc($query_pend)){
                                            echo "<tr><td>";
                                            echo $row_pen['name'];
                                            echo "</td><td>";
                                            echo $row_pen['griveance_id'];
                                            echo "</td><td>";
                                            echo $row_pen['status'];
                                            echo "</td><td>";
                                            echo "<a href='updatedata_pen.php?griveance_id=".$row_pen["griveance_id"]."'>edit</a>";
                                            echo "</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    
                </div>

            </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="admin1-login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>