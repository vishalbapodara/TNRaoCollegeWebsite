<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About The T.N.Rao college</title>
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
    <style>
        .vision-and-mission-section{
            background-color: #e7ecf2;
            padding: 50px 60px;
            margin-bottom: 0;
        }

        .vision-and-mission-section .title{
          margin: 0 0 20px 30px;
          padding: 30px 0;
        }

        .vision-and-mission-section .title h1{
                font-size: 26px;
                color: #000000;
                font-weight: 600;
                font-family:  system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .vision-and-mission-section .box{
            background-color: #fff;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            padding: 30px 28px;
            margin: 0 50px 35px 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgb(59 127 199 / 50%);
        }
        .vision-and-mission-section .box h4{
           color: #000000;
            font-size: 20px;
            font-weight: 500;
            text-transform: uppercase;
            margin: 0 0 20px 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
            .clg-info p{
               margin: 10px 30px;
               font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
               line-height: 40px;
               font-weight: 500;
               color: #000000;
            }
           
            .vision-and-mission-section .box p{
                line-height: 36px;
                color: #000000;
                font-size: 16px;
                font-weight: 400;
            }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
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


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">About Us</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/tnrao1.jpg" alt="AboutTNRAOCollege">
                </div>
            </div>
        </div>
        <!-- Header End -->
        <!-- Center Part -->
                <div class="clg-info">
                    <p>With the sole objective of transmitting knowledge, T. N. Rao college was established in 1998. And from more than 20 years we are providing our best to convert our students into progressive, responsible, and self-reliant individuals who can serve their purpose in the best possible way for the society and world.</p>
                    <p>To achieve our goal in the best possible way, we aim to provide students with maximum exposure. To support these we believe in celebrating different festivals and organizing social work and extracurricular activities. We encourage our students to organise and participate in different activities to gain maximum knowledge.</p>
                    <p>Currently, we are providing multiple degree courses at bachelor’s and master’s levels including BBA, B.Com, BCA, B.Sc., B.Ed., M.Sc. (IT), M.Sc. (organic chemistry), M.Ed.</p>
                </div>

                <div class="vision-and-mission-section">
                    <div class="title"><h1>Vision & Mission</h1></div>
                    <div class="box">
                        <h4>VISION</h4>
                        <p>Provide the best environment and services to help students transform themselves into progressive, responsible, and character-built individuals who can contribute in nation-building activities.</p>
                    </div>
                    <div class="box">
                        <h4>MISSION</h4>
                        <p>Our mission is to help students develop their best version to serve their purpose for the society and nation. Provide students an holistic environment where they can develop qualities like the idea of inclusiveness, shared responsibility, openness, adaptive governance, open acknowledgment, and quality of global life through dignity, dedication, and devotion.</p>
                    </div>

                </div>
        <!-- Center Part Ends -->


        <!-- Footer Start -->
            <?php 
            include('footer.php');
            ?>
        <!-- Footer End -->


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