<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>T.N.Rao College</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="https://tnraocollege.org/wp-content/themes/shivarjun/assets/images/favicon.png">
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
 
 
</head>

<body>

 <!-- Spinner Start -->
 <div class="container-xxl bg-white p-0">
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
          <!-- Navbar Start -->
       <?php
        include('navbar.php');
       ?>
       <!--Navbar Ends-->


      <!-- Rankers Carousel -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="mb-3">Our Rankers</h1>
            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
        </div>

        <div class="row">
            <div id="rankersCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <!-- Ranker 1 -->
                    <div class="carousel-item active text-center">
                        <img src="img/vm1.jpg" class="rounded img-fluid mx-auto d-block" alt="Ranker 1" style="width: 200px; height: 250px; object-fit: cover;">
                        <div class="p-4">
                            <h5 class="fw-bold">Ranker 1</h5>
                            <p>Bapodara Vishal Sanjaybhai</p>
                            <small>BCA-Sem-2</small>
                            <small>Year-2023</small>
                        </div>
                    </div>

                    <!-- Ranker 2 -->
                    <div class="carousel-item text-center">
                        <img src="img/team-2.jpg" class="rounded img-fluid mx-auto d-block" alt="Ranker 2" style="width: 200px; height: 250px; object-fit: cover;">
                        <div class="p-4">
                            <h5 class="fw-bold">Ranker 2</h5>
                            <small>Top Ranker</small>
                        </div>
                    </div>

                    <!-- Ranker 3 -->
                    <div class="carousel-item text-center">
                        <img src="img/team-3.jpg" class="rounded img-fluid mx-auto d-block" alt="Ranker 3" style="width: 200px; height: 250px; object-fit: cover;">
                        <div class="p-4">
                            <h5 class="fw-bold">Ranker 3</h5>
                            <small>Top Ranker</small>
                        </div>
                    </div>

                    <!-- Ranker 4 -->
                    <div class="carousel-item text-center">
                        <img src="img/team-4.jpg" class="rounded img-fluid mx-auto d-block" alt="Ranker 4" style="width: 200px; height: 250px; object-fit: cover;">
                        <div class="p-4">
                            <h5 class="fw-bold">Ranker 4</h5>
                            <p>Top Ranker</p>
                        </div>
                    </div>

                </div>

              <!-- Carousel Controls -->
<button class="carousel-control-prev" type="button" data-bs-target="#rankersCarousel" data-bs-slide="prev" style="background-color: transparent; border-radius: 50%;">
    <span class="carousel-control-prev-icon" style="background-color: #00B98E; border-radius: 50%;"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#rankersCarousel" data-bs-slide="next" style="background-color: transparent; border-radius: 50%;">
    <span class="carousel-control-next-icon" style="background-color: #00B98E; border-radius: 50%;"></span>
    <span class="visually-hidden">Next</span>
</button>

            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

     

      <!-- Footer Start -->
      <?php  
            include('footer.php');
        ?>
        <!-- Footer Ends -->

        <!-- Back to Top -->
        <a href="index.php" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>