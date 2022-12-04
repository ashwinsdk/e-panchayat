<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Track input</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
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
            </nav>
            
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                <?php
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
                 $sqlget = "select * from grievance where grievance_id =".$grievance_id;
                 
                 $sqldata = mysqli_query($conn, $sqlget);
                 //var_dump($sqldata);
                 $row = mysqli_fetch_assoc($sqldata);
                 if($row){
                     echo "<table class='table '>";
                     echo "<tr><th>Grievance Id</th><th>Subject</th><th>Petitioner Name</th><th>State</th><th>District</th><th>Zone</th><th>Village Panchayat</th><th>Status</th></tr>";
                     echo "<tr><td>";
                     echo $row['grievance_id'];
                     echo "</td><td>";
                     echo $row['subject'];
                     echo "</td><td>";
                     echo $row['petitioner'];
                     echo "</td><td>";
                     echo $row['state'];
                     echo "</td><td>";
                     echo $row['district'];
                     echo "</td><td>";
                     echo $row['zone'];
                     echo "</td><td>";
                     echo $row['village_panchayat'];
                     echo "</td><td>";
                     echo $row['status'];
                     echo "</td></tr>";
                     echo "</table>";
                 }
                                 
                ?>
                    
                </div>
            </section>
        </main>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
