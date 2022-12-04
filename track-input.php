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
                    
                    <!-- Call to action-->
                    <div class="row justify-content-center">
                      <aside class="bg-secondary bg-gradient rounded-3 p-4 p-sm-5 mt-5" id="trackGrievance">
                          <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                              <div class="mb-4 mb-xl-0">
                                  <div class="fs-3 fw-bold text-white">Track Grievance</div>
                                  <div class="text-white-50">Track your grievances related to government services, schemes, and civic issues.</div>
                              </div>
                              <div class="ms-xl-4">
                                  <div class="input-group mb-2">
                                      <form action="track.php" method="GET">
                                      
                                      <div class="row justify-content-center">
                                      <input class="form-control" type="text" placeholder="Grievance ID" aria-label="Email address..." name="grievance_id" aria-describedby="button-newsletter" />
                                      <button class="btn btn-dark" id="button-newsletter" type="submit">Submit</button>
                                          
                                      </div>
                                      
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </aside>
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
    </body>
</html>
