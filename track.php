<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
           
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3">Grievances</h1>
                                <p class="lead fw-normal text-muted mb-4"></p>
                                <div class="card">
              <div class="card-body">
                <!--<h5 class="card-title">Students</h5>-->
                <!-- Table with stripped rows -->
                <div class="table-responsive">
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th>Grievance Id</th>
                      <th>Petitioner Name</th>
                      <th>Subject</th>
                      <th>Sarpanch Status</th>
                      <th>Tehsildar Status</th>
                    </tr>
                  </thead>
                  <tbody><?php
                    ini_set('display_errors', 1);
                    ini_set('display_startup_errors', 1);
                    error_reporting(E_ALL);
                    require "mysqldbconn.php";
                    $grievance_id=$_GET['grievance_id'];
                    if($grievance_id==''){
                        echo "<div class='alert alert-danger'>
                        NO ID FOUND
                        </div>";
                        exit;
                    }
                    $sqlget = "select * from griveance where griveance_id = '$grievance_id'";
                     $sqldata = mysqli_query($conn, $sqlget);
                     $row = mysqli_fetch_assoc($sqldata);
                     if($row){
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
                      echo "</td></tr>";
                    }
                      ?>
                  </tbody>
                </table>
                </div>
                <!-- End Table with stripped rows -->

              </div>

            </div><br>
                                <a class="btn btn-outline-dark rounded-pill btn-lg" href="user-home.php">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            
            
        </main>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

