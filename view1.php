<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "mysqldbconn.php";
$sqlget = "select * from griveance";
   $sqldata = mysqli_query($conn, $sqlget);
   
   $griveance_id=$_GET["griveance_id"];
   $sql = " SELECT * FROM griveance WHERE griveance_id = '$griveance_id' ";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_array($result);
   $_SESSION['griveance_id'] = $row['griveance_id'];
   $_SESSION['petitioner'] = $row['petitioner'];
   $_SESSION['mobile_no'] = $row['mobile_no'];
   $_SESSION['public_individual'] = $row['public_individual'];
   $_SESSION['description'] = $row['description'];
   $_SESSION['abled'] = $row['abled'];
   $_SESSION['govt_dept'] = $row['govt_dept'];
   $_SESSION['grievance_type'] = $row['grievance_type'];
   $_SESSION['state'] = $row['state'];
   $_SESSION['district'] = $row['district'];
   $_SESSION['municipality'] = $row['municipality'];
   $_SESSION['town_panchayat'] = $row['town_panchayat'];
   $_SESSION['town_panchayat_ward'] = $row['town_panchayat_ward'];
   $_SESSION['taluk'] = $row['taluk'];
   $_SESSION['village_panchayat'] = $row['village_panchayat'];
   $_SESSION['street'] = $row['street'];
   $_SESSION['door_no'] = $row['door_no'];
   $_SESSION['responsible_officer'] = $row['responsible_officer'];
   $_SESSION['subject'] = $row['subject'];
   $_SESSION['gstatus'] = $row['gstatus'];
   $_SESSION['tstatus'] = $row['tstatus'];

//Delete
//delete();
//Disapprove
$id=$_GET["griveance_id"];
   if(isset($_POST["disapprove"])){
     $sql2 = "UPDATE griveance SET tstatus='Disapporved' WHERE griveance_id='$id'";
     $run = mysqli_query($conn , $sql2);
     if($run){
       if($run){
         header("Refresh:0");
       }
     }
   }
//approve();
$id=$_GET["griveance_id"];
if(isset($_POST["approve"])){
  $sql2 = "UPDATE griveance SET tstatus='Approved' WHERE griveance_id='$id'";
  $run = mysqli_query($conn , $sql2);
  if($run){
    if($run){
      header("Refresh:0");
    }
  }
}
//Approve
//disapprove();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tehsildar Action</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
           <!-- Navigation-->
           <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="admin1-home.php">Tehsildar</a>
                </div>
            </nav>
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3">Grievance Details</h1>
                                <p class="lead fw-normal text-muted mb-4"></p>
                                <div class="card">
                                <div class="card">
              <div class="card-body">
                <!-- Table with stripped rows -->
                <div class="table-responsive">
                 <table class="table table-striped ">
                 
                     <tr class="text-center">
                       <th>Griveance id</th>
                       <td><?php echo $_SESSION['griveance_id'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Petitioner name</th>
                       <td><?php echo $_SESSION['petitioner'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>mobile no</th>
                       <td><?php echo $_SESSION['mobile_no'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Public individual</th>
                       <td><?php echo $_SESSION['public_individual'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Description</th>
                       <td><?php echo $_SESSION['description'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Abled</th>
                       <td><?php echo $_SESSION['abled'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Govt_dept</th>
                       <td><?php echo $_SESSION['govt_dept'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Grievance type</th>
                       <td><?php echo $_SESSION['grievance_type'] ?></td>
                      </tr><tr class="text-center">
                       <th>State</th>
                       <td><?php echo $_SESSION['state'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Mistrict</th>
                       <td><?php echo $_SESSION['district'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Municipality</th>
                       <td><?php echo $_SESSION['municipality'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Town panchayat</th>
                       <td><?php echo $_SESSION['town_panchayat'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Town panchayat ward</th>
                       <td><?php echo $_SESSION['town_panchayat_ward'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Taluk</th>
                       <td><?php echo $_SESSION['taluk'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Village panchayat</th>
                       <td><?php echo $_SESSION['village_panchayat'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Street</th>
                       <td><?php echo $_SESSION['street'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Door_no</th>
                       <td><?php echo $_SESSION['door_no'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Responsible Officer</th>
                       <td><?php echo $_SESSION['responsible_officer'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Subject</th>
                       <td><?php echo $_SESSION['subject'] ?></td>
                      </tr>
                      
                 </table>
                </div>

                <h2 class="card-title">Tehsildar Action</h2>
                <div class="table-responsive">
                 <table class="table table-hover ">
                     <tr class="text-center">
                       <th>Sarpanch Status</th>
                       <td><?php echo $_SESSION['gstatus'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Tehsildar Status</th>
                       <td><?php echo $_SESSION['tstatus'] ?></td>
                      </tr>
                     <tr class="text-center">
                       <th>Action</th>
                       <td>
                          <form method="POST" action="">
                           <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <input type="submit" name="approve" class="btn btn-outline-success " value="Approve">
                            <input type="submit" name="disapprove" class="btn btn-outline-danger " value="Disapprove">
                           </div>
                          </form>
                       </td>
                      </tr>
                 </table>
                </div>

                <!-- End Table with stripped rows -->
              </div>
              

            </div>
                                <a class="btn btn-round-primary btn-lg" href="admin1-home.php">Back</a>
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
