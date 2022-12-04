<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require "mysqldbconn.php";


if(isset($_POST['submit'])){

$petitioner=$_POST['petitioner'];
$mobile_no=$_POST['mobile_no'];
$public_individual=$_POST['public_individual'];
$description=$_POST['description'];
$abled=$_POST['abled'];
$govt_dept=$_POST['govt_dept'];
$grievance_type=$_POST['grievance_type'];
$municipal_corporation=$_POST['municipal_corporation'];
$state=$_POST['state'];
$district=$_POST['district'];
$zone=$_POST['zone'];
$municipality=$_POST['municipality'];
$town_panchayat=$_POST['town_panchayat'];
$town_panchayat_ward=$_POST['town_panchayat_ward'];
$taluk=$_POST['taluk'];
$revenue_division=$_POST['revenue_division'];
$block=$_POST['block'];
$revenue_village=$_POST['revenue_village'];
$village_panchayat=$_POST['village_panchayat'];
$street=$_POST['street'];
$door_no=$_POST['door_no'];
$responsible_officer=$_POST['responsible_officer'];
$subject=$_POST['subject'];
$grievance_id=$_POST['grievance_id'];


$sql="insert into grievance (petitioner, mobile_no, public_individual, description, abled, govt_dept, grievance_type, municipal_corporation, state, district, zone, municipality, town_panchayat, town_panchayat_ward, taluk, revenue_division, block, revenue_village, village_panchayat, street, door_no, responsible_officer, subject, grievance_id) values('$petitioner','$mobile_no','$public_individual','$description','$abled','$govt_dept','$grievance_type','$municipal_corporation','$state','$district','$zone','$municipality','$town_panchayat','$town_panchayat_ward','$taluk','$revenue_division','$block','$revenue_village','$village_panchayat','$street','$door_no','$responsible_officer','$subject','$grievance_id')";

$query=mysqli_query($conn,$sql);
echo '<div class="alert alert-success">
<b>Successfully!</b> submitted..
</div>';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>File grievance</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
           <!-- Navigation-->
           <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="user-home.php">E-Panchayat</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="user-home.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">My Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">My Grievance</a></li>
                        </ul>
                    </div>
                </div>
            </nav><!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">File your grievance</h1>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                              <form class="row g-3 needs-validation" method="POST">
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Petitioner's Name</label>
                                  <input type="text" name="petitioner" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your name!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Mobile Number</label>
                                  <input type="text" name="mobile_no" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your Phone number!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Public/Individual</label>
                                  <input type="text" name="public_individual" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter Public or Individual!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Description</label>
                                  <input type="text" name="description" class="form-control" id="yourName" style="height: 10rem;" required>
                                  <div class="invalid-feedback">Please, enter description!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Are You a Differently Abled Person</label>
                                  <input type="text" name="abled" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter YES or NO!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Government Department</label>
                                  <input type="text" name="govt_dept" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter Government Department!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Grievance Type</label>
                                  <input type="text" name="grievance_type" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter grievance type!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Municipal Corporation</label>
                                  <input type="text" name="municipal_corporation" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter municipal corporation!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">State</label>
                                  <input type="text" name="state" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your state!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">District</label>
                                  <input type="text" name="district" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your district!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Zone</label>
                                  <input type="text" name="zone" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your zone!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Municipality</label>
                                  <input type="text" name="municipality" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your municipality!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Town Panchayat</label>
                                  <input type="text" name="town_panchayat" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your town panchayat!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Town Panchayat ward</label>
                                  <input type="text" name="town_panchayat_ward" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your town panchayat ward!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Taluk</label>
                                  <input type="text" name="taluk" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your taluk!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Revenue Division</label>
                                  <input type="text" name="revenue_division" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your revenue division!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Block</label>
                                  <input type="text" name="block" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your block!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Revenue Village</label>
                                  <input type="text" name="revenue_village" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your revenue village!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Village Panchayat</label>
                                  <input type="text" name="village_panchayat" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your village panchayat!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Street</label>
                                  <input type="text" name="street" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your street!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Door no</label>
                                  <input type="text" name="door_no" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your door no!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Responsible Officer</label>
                                  <input type="text" name="responsible_officer" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter responsible officer!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Subject</label>
                                  <input type="text" name="subject" class="form-control" id="yourName" style="height: 10rem;" required>
                                  <div class="invalid-feedback">Please, enter subject!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Grievance Id</label>
                                  <input type="text" name="grievance_id" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter grievance_id!</div>
                                </div>
                                  
                                <div class="col-12">
                                  <button class="btn btn-primary w-100" type="submit" name="submit">Submit</button>
                                </div>
                              </form>
            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; E-Panchayat Website 2022</div></div>
                    
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
