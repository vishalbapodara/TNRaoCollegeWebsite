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
    <style>
        .main{
            margin-top: 50px;
        }
        .box1{
          height: 200px;
          width: 250px;
          box-sizing: border-box;
        }

        #gray_box{
            padding: 30px;
            background-color: #e7ecf2;
        }

        #gray_box h1{
            margin: 0 0 25px 0;
            padding: 0;
            font-size: 18px;
            font-weight: 600;
            color: #000000;
            text-transform: uppercase;  
        }

        #gray_box ul li{
            line-height: 32px;
            list-style-type: circle;
        }

        /* Blue box is start */
        #blue_box{
            margin: 0;
            padding: 35px 40px;
            color: #ffffff;
            background-color: #3b7fc7;
        }
        #blue_box ul li{
            line-height: 32px;
            list-style-type: circle;
        }

        
        #blue_box h1{
            margin: 0 0 25px 0;
            padding: 0;
            font-size: 18px;
            font-weight: 600;
            color: #000000;
            text-transform: uppercase;  
        }

        /* light_blue_box start */
            #light_blue_box{
                margin: 0;
                padding: 40px 20px;
                color: #ffffff;
                background-color: #0c2147;
                display: flex;
                flex-direction: column;
                justify-content: center; 
                align-items: center;           
}  

        #light_blue_box h1{
            /* margin: 30px 0 25px 0; */
            padding: 0;
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
            text-transform: uppercase;  
              
        }

            #light_blue_box  img{
                vertical-align: middle;
                 border-style: none;
                 margin-top: 20px;
            }
            
            #light_blue_box p{
                    margin: 25px 0 0 0;
                    padding: 0;
                    font-size: 16px;
                    font-weight: 400;
                    color: #ffffff;
                    text-align: center;
                    /* line-height: 28px; */
                    /* width: 100%; */
        }

        /* dark_blue_box start */
        #dark_blue_box{
                margin: 0;
                padding: 40px 20px;
                color: #ffffff;
                background-color: #0b1d3f;
                display: flex;
                flex-direction: column;
                justify-content: center; 
                align-items: center;           
}  

        #dark_blue_box h1{
            margin: 0 0 40px 0;
            padding: 0;
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
            text-transform: uppercase;  
              
        }

        #dark_blue_box  img{
                vertical-align: middle;
                 border-style: none;
                 margin-bottom: 10px;
            }

            #dark_blue_box p{
                    margin: 25px 0 0 0;
                    padding: 0;
                    font-size: 16px;
                    font-weight: 400;
                    color: #ffffff;
                    text-align: center;
                    /* line-height: 28px; */
                    /* width: 100%; */
        } 
        /* course detail css */        
        .course_detail h2 {
            margin: 40px 5px 20px 40px;
            /* top margin is 5px
            right margin is 5px
            bottom margin is 5px
            left margin is 40px */
            font-size: 18px;
            font-weight: 400;
            color: #3b7fc7;
            text-transform: uppercase;
          }

          .course_detail li span{
                margin: 0;
                padding: 0;
                font-size: 18px;
                font-weight: 400;
                color: #000000;
                font-style: italic;
                line-height:30px;
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
                    <h1 class="display-5 animated fadeIn mb-4">Master of Science - Organic Chemistry (M. Sc.)</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Courses</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Master of Science - Microbiology (M.Sc.)</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/msc.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->

    <!-- center start -->
    <div class="container main">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 box1" id="gray_box">
                        <h1>Eligibility</h1>
                        <ul>
                            <li>
                            B.Sc. Chemistry
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 box1" id="blue_box">
                       <h1>Shedule</h1>
                        <ul>
                            <li>
                            7.30 AM to 1.30 PM
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 box1" id="light_blue_box">
                        <h1>Duration</h1>
                        <img src="https://tnraocollege.org/wp-content/themes/shivarjun/assets/images/duration.png" alt="duration-icon">
                        <p>2 years
                            <br>
                       (4 semester)
                    </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 box1" id="dark_blue_box">
                        <h1>Fees</h1>
                        <img src="https://tnraocollege.org/wp-content/themes/shivarjun/assets/images/feestwo.png" alt="feestwo-icon">
                        <p>Sem. Fees: ₹ 26,950</p>
                    </div>
                    </div>
                </div>

    <div class="col-sm-12 aos-init aos-animate detail">
        <div class="course_detail">
            <span></span>
            <p></p>
            <h2>WHAT IS M.SC. - ORGANIC CHEMISTRY PROGRAM?</h2>
            <ul>
                    <li>
                        <span>M.Sc. is a 2 year (4 sem) post graduate program. This course is designed with the objective to develop necessary skill sets for research projects in chemistry. This course is perfect for those who have keen interest in chemistry and research.</span>
                    </li>
                    <li>
                    <span>
                    By completing this course, students will be able to run independent research projects or group projects at a complex level.
                    </span>
                </li>
                </ul>
       
            <span>
            <h2>T. N. RAO COLLEGE M.SC. - MICROBIOLOGY</h2>
        </span>
            <ul>
                <li>
                    <span>At T. N. Rao College M.Sc. course is designed with the objective of enhancing skills and knowledge of different areas in chemistry.Our M.Sc. program includes information regarding the formulation, structure, and execution of different chemical methods in the research project</span>
                </li>
                <li>
                    <span>We provide our students an atmosphere where they can learn and enhance their skills to be able to work in chemistry & related fields.</span>
                </li>
              </ul>
        </div>
     </div>
    


<!-- center end -->

        
                <!-- EventList section Start -->
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <h1 class="mb-3">Event Listing</h1>
                            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                        </div>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row g-4">
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="property-item rounded overflow-hidden">
                                            <div class="position-relative overflow-hidden">
                                                <a href=""><img class="img-fluid" src="img/Health Day.jpg" alt="Healt Day Celebration"></a>
                                                <!-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div> -->
                                            </div>
                                            <div class="p-4 pb-0">
                                                
                                                <a class="d-block h5 mb-2" href="">SWAYAM</a>
                                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Behind Saurashtra University, Campus, Rajkot</p>
                                            </div>
                                          
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="property-item rounded overflow-hidden">
                                            <div class="position-relative overflow-hidden">
                                                <a href=""><img class="img-fluid" src="img/volleyBall.jpg" alt="Boys volleyball"></a>
                                                <!-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div> -->
                                            </div>
                                            <div class="p-4 pb-0">
                                               
                                                <a class="d-block h5 mb-2" href="">BEHAVIOUR SKILLS</a>
                                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                            </div>
                                       
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="property-item rounded overflow-hidden">
                                            <div class="position-relative overflow-hidden">
                                                <a href=""><img class="img-fluid" src="img/gvolleyBall.jpg" alt="Girls volley ball"></a>
                                                <!-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div> -->
                                            </div>
                                            <div class="p-4 pb-0">
                                              
                                                <a class="d-block h5 mb-2" href="">COMMUNICATION SKILL SEMINAR BY RJ DHARA</a>
                                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Behind Saurashtra University, Campus, Rajkot</p>
                                            </div>
                                         
                                        </div>
                                    </div>
                    </div>
                </div>    
                                <!-- Event Section Ends -->


        <!-- Faculties Section stat-->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Faculties of Department</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/hina-tilavat.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Prof. Hina Tilavat</h5>
                                <small>HOD M.Sc., Ph.D. (Pursuing)</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/Mayur-shiyal.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Dr. Mayur Shiyal</h5>
                                <small>Assistant Professor

M.Sc., Ph.D.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/amita-jivani.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Dr. Amita Jivani</h5>
                                <small>Assistant Professor  M.Sc., M.Phil., Ph.D.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Faculties Section End -->
        
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