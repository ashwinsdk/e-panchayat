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
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3">My Grievance</h1>
                                <p class="lead fw-normal text-muted mb-4"></p>
                                <?php
                                ini_set('display_errors', 1);
                                ini_set('display_startup_errors', 1);
                                error_reporting(E_ALL);
                                require "mysqldbconn.php";
                                $sqlget = "select * from grievance";
                                $sqldata = mysqli_query($conn, $sqlget);
                                echo "<table class='table'>";
                                echo "<tr><th>Subject</th><th>Grievance Id</th><th>Status</th></tr>";
                                while($row = mysqli_fetch_assoc($sqldata)){
                                    echo "<tr><td>";
                                    echo $row['subject'];
                                    echo "</td><td>";
                                    echo $row['grievance_id'];
                                    echo "</td><td>";
                                    echo $row['status'];
                                    echo "</td></tr>";
                                }
                                echo "</table>";
                                /*
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $i=1;
                                        echo "
                                        <table>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Subject</th>
                                            <th>Grievance Id</th>
                                            <th>Status</th>
                                        </tr>
                                        <tr>
                                            <td>".$i++."</td>
                                            <td>".$row["subject"]."</td>
                                            <td>".$row["grievance_id"]."</td>
                                            <td>".$row["status"]."</td>
                                        </tr>
                                        ";
                                    }
                                } else {
                                    echo "0 results";
                                }
                                
                                mysqli_close($conn);
                                */
                                ?>
                                <a class="btn btn-primary btn-lg" href="user-home.php">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
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
    </body>
</html>
