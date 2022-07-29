<!doctype html>
<html class="no-js" lang="zxx">

<style>
       .hero {
    width: 100%;
    height: 100vh;
    background: url(./img/hero-bg.png) top center no-repeat;
    background-size: cover;
  }
  
  .hero h1 {
    margin: 0;
    font-size: 48px;
    font-weight: 700;
    color: #012970;
  }
  
  .hero h2 {
    color: #444444;
    margin: 15px 0 0 0;
    font-size: 26px;
  }
  
  .hero .btn-get-started {
    margin-top: 30px;
    line-height: 0;
    padding: 15px 40px;
    border-radius: 4px;
    transition: 0.5s;
    color: #fff;
    background: #4154f1;
    box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
  }
  
  .hero .btn-get-started span {
    font-family: "Nunito", sans-serif;
    font-weight: 600;
    font-size: 16px;
    letter-spacing: 1px;
  }
  
  .hero .btn-get-started i {
    margin-left: 5px;
    font-size: 18px;
    transition: 0.3s;
  }
  
  .hero .btn-get-started:hover i {
    transform: translateX(5px);
  }
  
  .hero .hero-img {
    text-align: right;
  }
  
  @media (min-width: 1024px) {
    .hero {
      background-attachment: fixed;
    }
  }
  
  @media (max-width: 991px) {
    .hero {
      height: auto;
      padding: 120px 0 60px 0;
    }
  
    .hero .hero-img {
      text-align: center;
      margin-top: 80px;
    }
  
    .hero .hero-img img {
      width: 80%;
    }
  }
  
  @media (max-width: 768px) {
    .hero {
      text-align: center;
    }
  
    .hero h1 {
      font-size: 32px;
    }
  
    .hero h2 {
      font-size: 24px;
    }
  
    .hero .hero-img img {
      width: 100%;
    }
  }
  .container-service{
    border-radius: 30px;
background: #FAF8FF;
box-shadow:  5px 5px 8px #c1bfc4,
             -5px -5px 8px #ffffff;
  }


  .card-big-shadow {
    max-width: 320px;
    position: relative;
}

.coloured-cards .card {
    margin-top: 30px;
}

.card[data-radius="10px"] {
    border-radius: 10px;
}
.card {
    border-radius: 30px;
    box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
    background-color: #FFFFFF;
    color: #fff;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}


.card[data-background="image"] .title, .card[data-background="image"] .stats, .card[data-background="image"] .category, .card[data-background="image"] .description, .card[data-background="image"] .content, .card[data-background="image"] .card-footer, .card[data-background="image"] small, .card[data-background="image"] .content a, .card[data-background="color"] .title, .card[data-background="color"] .stats, .card[data-background="color"] .category, .card[data-background="color"] .description, .card[data-background="color"] .content, .card[data-background="color"] .card-footer, .card[data-background="color"] small, .card[data-background="color"] .content a {
    color: #FFFFFF;
}
.card.card-just-text .content {
    padding: 50px 65px;
    text-align: center;
}
.card .content {
    padding: 20px 20px 10px 20px;
}
.card[data-color="blue"] .category {
    color: #7a9e9f;
}

.card .category, .card .label {
    font-size: 14px;
    margin-bottom: 0px;
}
.card-big-shadow:before {
    background-image: url("http://static.tumblr.com/i21wc39/coTmrkw40/shadow.png");
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    bottom: -12%;
    content: "";
    display: block;
    left: -12%;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 0;
   
}
h4, .h4 {
    font-size: 1.5em;
    font-weight: 600;
    line-height: 1.2em;
}
h6, .h6 {
    font-size: 0.9em;
    font-weight: 600;
    text-transform: uppercase;
}
.card .description {
    font-size: 16px;
    color: #66615b;
}
.content-card{
    margin-top:30px;    
}
a:hover, a:focus {
    text-decoration: none;
}

/*======== COLORS ===========*/
.card[data-color="blue"] {
    background: #0b2041;
}
.card[data-color="blue"] .description {
    color:#fff;
}

.card[data-color="green"] {
    background: #0b2041;
}
.card[data-color="green"] .description {
    color: #fff;
}
.card[data-color="green"] .category {
    color: #70a0a0;
}



    </style>
<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
    <?php  include 'nav.php';?>
    <!-- header-end -->
</header>
   <section id="hero" class="hero d-flex align-items-center ">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">We offer modern solutions for growing your business</h1>
         
          <div data-aos="fade-up" data-aos-delay="600" class=>
            <div class="text-center text-lg-start mt-3">
              <a href="#about" class="boxed-btn3  ">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="./img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
    <!-- slider_area_end -->

    <!-- service_area  -->
    <!-- <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-4">
                    <div class=" container-service text-center">
                        <div class="icon">
                            <img src="img/svg_icon/seo_1.svg" alt="">
                        </div>
                        <h3>Vision</h3>
                        <p>To be an innovative and exceptional Tech-service company, driven by service and excellence.</p>
                       
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="container-service text-center">
                        <div class="icon">
                            <img src="img/svg_icon/seo_2.svg" alt="">
                        </div>
                        <h3>Mission</h3>
                        <p>To transform the markets that we operate in and the world at large through quality tech- service and innovations.</p>
                       
                    </div>
                </div>

            </div>

        </div>
    </div> -->

    <div class="container bootstrap snippets bootdeys ">
<div class="row col-container">
    <div class="col-md-6 col-sm-6 content-card col">
        <div class="card-big-shadow">
            <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                <div class="content">
                    <h6 class="category">Vision</h6>
                    <!-- <h4 class="title"><a href="#">Blue Card</a></h4> -->
                    <p class="description p-1">To be an innovative and exceptional Tech-service company, driven by service and excellence.</p>
                        </p>
                </div>
            </div> <!-- end card -->
        </div>
    </div>
    
    <div class="col-md-6 col-sm-6 content-card col">
        <div class="card-big-shadow">
            <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                <div class="content">
                    <h6 class="category">Mission</h6>
                    <!-- <h4 class="title"><a href="#">Green Card</a></h4> -->
                    <p class="description ">To transform the markets that we operate in and the world at large through quality tech- service and innovations.</p>
                        </p>
                </div>
            </div> <!-- end card -->
        </div>
    </div>
    
    
</div>
</div>
    <!--/ service_area  -->

    <!-- compapy_info  -->
    <div class="compapy_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-5">
                    <div class="man_thumb">
                        <img src="img/ilstrator/hero3.png" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-md-7">
                    <div class="company_info">
                        <h3>We offer solutions that empower our clients  
                        to meet their business goals.</h3>
                            <p>We are a Ugandan private firm providing technical consultancy and development-oriented research services aimed at community capacity development and poverty reduction.</p>

                        <a href="about.php" class="boxed-btn3">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ compapy_info  -->

    <!-- case_study_area  -->
    <div class="case_study_area case_bg_1">
        <div class="patrn_1 d-none d-lg-block">
            <img src="img/pattern/patrn_1.png" alt="">
        </div>
        <div class="patrn_2 d-none d-lg-block">
            <img src="img/pattern/patrn.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-95 white_text" id="services">
                        <h3>Our Services</h3>
                        <!-- <p>Esteem spirit temper too say adieus who direct esteem. It esteems <br>
                            luckily or picture placing drawing. </p> -->
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-12 col">
                    <div class="case_active owl-carousel">
                            <div class="single_study text-center">
                                    <div class="thumb">
                                        <a href="services.php">
                                            <img src="img/portfolio/project1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="subheading">
                                        <h4><a href="services.php">Project Management</a></h4>
                                        <!-- <p>UI/UX, Design</p> -->
                                    </div>
                                </div>
                            <div class="single_study text-center">
                                    <div class="thumb">
                                        <a href="services.php">
                                            <img src="img/portfolio/ict.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="subheading">
                                        <h4><a href="services.php">ICT Services</a></h4>
                                        <!-- <p>UI/UX, Design</p> -->
                                    </div>
                                </div>
                            <div class="single_study text-center">
                                    <div class="thumb">
                                        <a href="services.php">
                                            <img src="img/portfolio/water2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="subheading">
                                        <h4><a href="services.php">Environmental Management
</a></h4>
                                        <!-- <p>UI/UX, Design</p> -->
                                    </div>
                                </div>
                            <div class="single_study text-center">
                                    <div class="thumb">
                                        <a href="services.php">
                                            <img src="img/portfolio/eng.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="subheading">
                                        <h4><a href="services.php">Infrastructure & Engineering
</a></h4>
                                        <!-- <p>UI/UX, Design</p> -->
                                    </div>
                                </div>
                                <div class="single_study text-center">
                                        <div class="thumb">
                                            <a href="services.php">
                                                <img src="./img/portfolio/agric2 .jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="subheading">
                                            <h4><a href="services.php">Agriculture and Food Security.
</a></h4>
                                            <!-- <p>UI/UX, Design</p> -->
                                        </div>
                                    </div>
                                <div class="single_study text-center">
                                        <div class="thumb">
                                            <a href="services.php">
                                                <img src="img/portfolio/finance.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="subheading">
                                            <h4><a href="services.php">Financial Services</a></h4>
                                            <!-- <p>UI/UX, Design</p> -->
                                        </div>
                                    </div>
                                    <div class="single_study text-center">
                                            <div class="thumb">
                                                <a href="services.php">
                                                    <img src="img/portfolio/oil.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="subheading">
                                                <h4><a href="services.php">Oil and Gas</a></h4>
                                                <!-- <p>UI/UX, Design</p> -->
                                            </div>
                                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ case_study_area  -->

    <!-- accordion_area  -->
    <div class="accordion_area">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-6 col-lg-6">
                    <div class="faq_ask">
                        <h3>Why Choose Us</h3>
                            <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Equity & Diversity
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                            <div class="card-body">We bring together engineers and technical specialists from all backgrounds to solve our clients’ most challenging problems. We believe our employees are high-performing individuals who reflect the diversity of the communities in which we work and live, while also providing a better understanding of our clients’ needs and project objectives.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Integrity
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                            <div class="card-body">Transparent and honest with our clients.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Innovation
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                            <div class="card-body">We seek value added solutions and strive to find ways of exceeding our customer’s expectations.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Professionalism
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion" style="">
                                            <div class="card-body">We take pride in producing high- quality work and delivering exceptional services to our customers. We are qualified, skilled, and committed.

                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="accordion_thumb">
                        <img src="img/portfolio/choose.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--/ accordion_area  -->


    <!-- features_area  -->
    <!-- <div class="features_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center">
                        <h3>We have some awesome features <br>
                            to rank your business</h3>
                            <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or <br> picture placing drawing. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="img/svg_icon/feature_1.svg" alt="">
                        </div>
                        <h4>Custom design</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="img/svg_icon/feature_2.svg" alt="">
                        </div>
                        <h4>Paid Search result</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="img/svg_icon/feature_3.svg" alt="">
                        </div>
                        <h4>Global Search option</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="img/svg_icon/feature_4.svg" alt="">
                        </div>
                        <h4>Email Marketing</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="img/svg_icon/feature_5.svg" alt="">
                        </div>
                        <h4>Custom Software</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="img/svg_icon/feature_6.svg" alt="">
                        </div>
                        <h4>Setup business goal</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--/ features_area  -->

    <!-- testimonial_area  -->
    <div class="testimonial_area ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_active owl-carousel">
                            <div class="single_carousel">
                                    <div class="single_testmonial text-center">
                                            <div class="quote">
                                                <img src="img/testmonial/quote.svg" alt="">
                                            </div>
                                            <p>In the last six months we have seen our organizational profitability increase significantly thanks in large part to the change in practices around resource management and global resourcing of our projects. </p>
                                            <div class="testmonial_author">
                                                <div class="thumb">
                                                        <!-- <img src="img/testmonial/thumb.png" alt=""> -->
                                                </div>
                                                <h3>Robert Kagwa</h3>
                                                <span>Business Owner</span>
                                            </div>
                                        </div>
                            </div>
                            <div class="single_carousel">
                                    <div class="single_testmonial text-center">
                                            <div class="quote">
                                                <img src="img/testmonial/quote.svg" alt="">
                                            </div>
                                            <p>The biggest reason we engaged PPI  was their knowledge and their expertise in designing and building a project management office. </p>
                                            <div class="testmonial_author">
                                                <div class="thumb">
                                                        <!-- <img src="img/testmonial/thumb.png" alt=""> -->
                                                </div>
                                                <h3>Lukwago Innocent</h3>
                                                <span>Business Owner</span>
                                            </div>
                                        </div>
                            </div>
                            <div class="single_carousel">
                                    <div class="single_testmonial text-center">
                                            <div class="quote">
                                                <img src="img/testmonial/quote.svg" alt="">
                                            </div>
                                            <p>We began working with PPI because we were facing a lot of challenges within our organization. We were not organized, we were not effectively using our PSA tool and we were not delivering projects to clients on time.. </p>
                                            <div class="testmonial_author">
                                                <div class="thumb">
                                                        <!-- <img src="img/testmonial/thumb.png" alt=""> -->
                                                </div>
                                                <h3>Nakamate Shakirah</h3>
                                                <span>Business Owner</span>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /testimonial_area  -->

   <?php include 'footer.php' ?>

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>