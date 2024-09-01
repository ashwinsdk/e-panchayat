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
$state=$_POST['state'];
$district=$_POST['district'];
$municipality=$_POST['municipality'];
$town_panchayat=$_POST['town_panchayat'];
$town_panchayat_ward=$_POST['town_panchayat_ward'];
$taluk=$_POST['taluk'];
$village_panchayat=$_POST['village_panchayat'];
$street=$_POST['street'];
$door_no=$_POST['door_no'];
$responsible_officer=$_POST['responsible_officer'];
$subject=$_POST['subject'];
//$grievance_id=$_POST[''];
$g=uniqid();
//$grievance_id=uniqid();
$sql="insert into griveance (petitioner, mobile_no, public_individual, description, abled, govt_dept, grievance_type, state, district, municipality, town_panchayat, town_panchayat_ward, taluk, village_panchayat, street, door_no, responsible_officer, subject, griveance_id,gstatus,tstatus) values('$petitioner','$mobile_no','$public_individual','$description','$abled','$govt_dept','$grievance_type','$state','$district','$municipality','$town_panchayat','$town_panchayat_ward','$taluk','$village_panchayat','$street','$door_no','$responsible_officer','$subject','$g','Pending','Pending')";

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
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-dark bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">File your grievance</h1>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                              <form class="row g-3 needs-validation" method="POST">
                                <div class="col-6">
                                  <label for="yourName" class="form-label">Petitioner's Name</label>
                                  <input type="text" name="petitioner" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your name!</div>
                                </div>
                                <div class="col-6">
                                  <label for="yourName" class="form-label">Mobile Number</label>
                                  <input type="text" name="mobile_no" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your Phone number!</div>
                                </div>

                                <div class="col-6">
                                  <label for="yourName" class="form-label">Public/Individual</label>
                                  <select class="form-select" name="public_individual" aria-label="Default select example">
                                     <option selected>Open this select menu</option>
                                     <option value="Public">Public</option>
                                     <option value="Individual">Individual</option>
                                   </select>
                                  <div class="invalid-feedback">Please, enter Public or Individual!</div>
                                </div>
                                

                                <div class="col-6">
                                  <label for="yourName" class="form-label">Are You Abled</label>
                                  <select class="form-select" name="abled" aria-label="Default select example">
                                     <option selected>Open this select menu</option>
                                     <option value="Yes">Yes</option>
                                     <option value="No">No</option>
                                   </select>
                                  <div class="invalid-feedback">Please, enter YES or NO!</div>
                                </div>

                                <div class="col-12">
                                  <label for="yourName" class="form-label">Description</label>
                                  <div class="invalid-feedback">Please, enter description!</div>
                                  <div class="form-floating mb-3">
                                    <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                                  </div>
                                </div>

                                <div class="col-12">
                                  <label for="yourName" class="form-label">Government Department</label>
                                  <input type="text" name="govt_dept" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter Government Department!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Grievance Type</label>
                                  <select class="form-select" name="grievance_type" aria-label="Default select example">
                                     <option selected>Open this select menu</option>
                                     <option value="Non-availability of supplies">Non-availability of supplies</option>
                                     <option value="Delay in supplies or services">Delay in supplies or services</option>Harassment
                                     <option value="Harassment">Harassment</option>
                                   </select>
                                  <div class="invalid-feedback">Please, enter grievance type!</div>
                                </div>
                                <div class="col-6">
                                  <label for="yourName" class="form-label">State</label>
                                  <input type="text" name="state" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your state!</div>
                                </div>
                                <div class="col-6">
                                  <label for="yourName" class="form-label">District</label>
                                  <input type="text" name="district" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your district!</div>
                                </div>
                                <div class="col-6">
                                  <label for="yourName" class="form-label">Municipality</label>
                                  <input type="text" name="municipality" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your municipality!</div>
                                </div>
                                <div class="col-6">
                                  <label for="yourName" class="form-label">Town Panchayat</label>
                                  <input type="text" name="town_panchayat" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your town panchayat!</div>
                                </div>
                                <div class="col-6">
                                  <label for="yourName" class="form-label">Town Panchayat ward</label>
                                  <input type="text" name="town_panchayat_ward" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your town panchayat ward!</div>
                                </div>
                                <div class="col-6">
                                  <label for="yourName" class="form-label">Taluk</label>
                                  <input type="text" name="taluk" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your taluk!</div>
                                </div>
                                <div class="col-6">
                                  <label for="yourName" class="form-label">Village Panchayat</label>
                                  <input type="text" name="village_panchayat" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your village panchayat!</div>
                                </div>
                                <div class="col-6">
                                  <label for="yourName" class="form-label">Street</label>
                                  <input type="text" name="street" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your street!</div>
                                </div>
                                <div class="col-6">
                                  <label for="yourName" class="form-label">Door no</label>
                                  <input type="text" name="door_no" class="form-control" id="yourName" required>
                                  <div class="invalid-feedback">Please, enter your door no!</div>
                                </div>
                                <div class="col-12">
                                  <label for="yourName" class="form-label">Responsible Officer</label>
                                  <select class="form-select" name="responsible_officer" aria-label="Default select example">
                                     <option selected>Open this select menu</option>
                                     <option value="Sarpanch">Sarpanch</option>
                                     <option value="Tehsildar">Tehsildar</option>
                                   </select>
                                  <div class="invalid-feedback">Please, enter responsible officer!</div>
                                </div>

                                <div class="col-12">
                                  <label for="yourName" class="form-label">Subject</label>
                                  <div class="invalid-feedback">Please, enter description!</div>
                                  <div class="form-floating mb-3">
                                    <textarea class="form-control" name="subject" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                                  </div>
                                </div>
                                  
                                <div class="col-12">
                                  <button class="btn btn-outline-primary w-100" type="submit" name="submit">Submit</button>
                                </div>
                              </form> <br>
                              <div class="col-12">
                                  <a class="btn btn-outline-dark rounded-pill w-100"  href="user-home.php">back</a>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
