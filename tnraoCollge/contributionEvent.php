<?php include("config.php"); ?>

<?php
$sql = "SELECT * FROM `eventdata` WHERE category='contribution to community'";
$result = mysqli_query($conn, $sql);

?>

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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

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
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php
        include('navbar.php');
        ?>
        <!-- Navbar End -->


        <!-- Event List Start -->

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Contribution To Community Events</h1>
                            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero
                                ipsum sit eirmod sit diam justo sed rebum.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Contribution To Community</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                                <?php
                                while ($info = $result->fetch_assoc()) {
                                    $uniqueId = preg_replace('/[^a-zA-Z0-9]/', '_', uniqid('accordion_', true));
                                    ?>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="property-item rounded overflow-hidden">
                                            <div class="position-relative overflow-hidden">
                                                <a href="">
                                                    <img class="img-fluid"
                                                        src="AdminDashboard/dist/assets/images/EventImgs/<?= htmlspecialchars($info['event_img']) ?>"
                                                        alt="sawayamSeminar"
                                                        style="width: 600px; height: 300px;  object-fit: cover;">
                                                </a>
                                            </div>
                                            <div class="pb-0">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading-<?php echo $uniqueId; ?>">
                                                        <button class="accordion-button collapsed text-primary"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse-<?php echo $uniqueId; ?>"
                                                            aria-expanded="false"
                                                            aria-controls="collapse-<?php echo $uniqueId; ?>">
                                                            <?php echo htmlspecialchars($info['event_title']); ?>
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-<?php echo $uniqueId; ?>"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="heading-<?php echo $uniqueId; ?>"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body text-dark">
                                                            <?php echo htmlspecialchars($info['event_discription']); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>


                            <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                    <a class="btn btn-primary py-3 px-5" href="expertEvent.php">Browse More Property</a>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>

             <!-- Testimonial Start -->
             <?php include('testimonial.php'); ?>
            <!-- Testimonial End -->
</body>

</html>
<!-- Event List End -->



<!-- Footer Start -->
<?php
include('footer.php');
?>
<!-- Footer Ends -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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