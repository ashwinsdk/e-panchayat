<?php
require "mysqldbconn.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$grievance_id=$_GET["grievance_id"];
$sql1="select * from pendings where grievance_id =".$grievance_id;
$query=mysqli_query($conn,$sql1);

$row=mysqli_fetch_assoc($query);
if(isset($_POST["submit"])){

       $status = $_POST["status"];
   
       $sql2 = "UPDATE pendings SET status='$status'
         WHERE grievance_id='$grievance_id'";
         
   
         $run = mysqli_query($conn , $sql2);
         
         if($run){
            echo "
            <div class='alert alert-success'>
            successfully updated
            </div>
            ";
            
         }else{
             echo "
             <div class='alert alert-danger'>
            Failed to updated
            </div>
             ";
         }
   
}
mysqli_close($conn);
?>
<html>
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
    <body>
    <main class="flex-shrink-0">
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">UPDATE</h1>
                        </div>
                        <div class="row gx-5 text-center">
                            <div class="col-lg-8 col-xl-6">
                              <form class="row g-3 needs-validation text-center" method="POST">
                                <div class="col-12">
                                  <label for="yourName" class="form-label w-50 text-center"> <b>ACCEPT/REJECT</b> </label><br>
                                  <input type="text" class="w-50" name="status" value="<?php echo $row["status"] ?>">
                                </div>
                                
                                <div class="col-12">
                                  <button class="btn btn-primary w-50" type="submit" name="submit">Submit</button>
                                </div><br><br>

                                <div>
                                    <button class="btn btn-outline-dark w-50">
                                     <a class="" href="admin1-home.php">back to list data</a>
                                    </button>
                                </div>
                              </form>

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