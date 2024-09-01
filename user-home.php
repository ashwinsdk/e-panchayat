<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet"/>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">E-Panchayat</h1>
                            <p class="lead text-white-50 mb-4">File and track your grievances related to Panchayat services, schemes, and civic issues.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
           
            <!-- Testimonials section-->
        <section class="py-5 border-bottom">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">FEATURES OF E-PANCHAYAT HELPLINE PORTAL</h2>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <!-- Testimonial 1-->
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-eye-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1"><b>Sell All Grievances</b> Click here see all the grievances made by other users.</p><br>
                                        <div class="row justify-content-center"><a class="btn btn-outline-dark"  href="about.php">Grievances</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2-->
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-file-earmark-arrow-up-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                    <p class="mb-1"><b>File Grievance</b> Submit the form. You would receive an acknowledgement message with your unique grievance ID. You can use it to track your grievance.</p><br>
                                    <div class="row justify-content-center"><a class="btn btn-outline-primary"  href="contact.php">File</a></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <!-- Testimonial 1-->
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-inboxes-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1"><b>Track Grievance</b> Track your grievances related to government services, schemes, and civic issues.</p><br>
                                        <form action="track.php" method="GET">
                                         <div class="row justify-content-center">
                                            <input class="form-control" type="text" placeholder="Grievance ID" name="grievance_id" />
                                         </div><br>
                                         <div class="row justify-content-center"><button class="btn btn-outline-dark" id="button-newsletter" type="submit">Submit</button></div>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2-->
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-wallet2 text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1"><b>Connect Wallet</b> See your funds through Crypto.</p><br>
                                        <div class="row justify-content-center"><a class="btn btn-outline-primary"  href="fund.php">Connect</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
                
            </div>
            
        </section>
            <!-- Testimonial section-->
            <!-- Call to action-->
            
            
        </main>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
