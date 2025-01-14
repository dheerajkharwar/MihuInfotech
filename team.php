<?php
include('config.php');
// if (!isset($_GET['q'])) {
//   header('Location: ' . $currentURL . '?q=' . generateRandomString(64));
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Team</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta
    content="IT company, Mihu Systems, technology solutions, web development, mobile app development, software solutions, IT consulting, digital transformation, cybersecurity, cloud services, AI, machine learning, data analytics, IT infrastructure, e-commerce solutions, software outsourcing, enterprise solutions, erp, logic, logic erp, erp software, apparel retail software, apparel distribution software, apparel manufacturing software"
    name="keywords" />
  <meta
    content="Mihu Systems is a leading IT company providing innovative solutions for businesses worldwide. We offer a comprehensive range of services, including web development, mobile app development, software solutions, and IT consulting. Our team of skilled professionals is committed to delivering top-notch products and services tailored to meet your specific needs. Partner with Mihu Systems for cutting-edge technology solutions and take your business to new heights."
    name="description" />

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon" />
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
    rel="stylesheet" />

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet" />
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet" />
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet" />
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/venobox/venobox.css" rel="stylesheet" />

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet" />

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet" />
  <style>
    /* Festival-IMG  */
    #festival-img {
      position: fixed;
      top: 80px;
      right: 10px;
      z-index: 10000;
      box-sizing: border-box;
      height: 400px;
      width: 350px;
      border-top-left-radius: 15px;
      border-bottom-right-radius: 15px;
    }

    @media only screen and (max-width: 600px) {
      #festival-img {
        width: 50% !important;
        height: 50vh !important;
      }

      #festival-img img {
        height: 100% !important;
      }

      #festival-img span {
        box-sizing: border-box;
        position: absolute;
        top: 5px;
        right: 10px;
        color: red;
        z-index: 10020;
        cursor: pointer;
        font-size: 16px !important;
        background-color: white;
        width: fit-content;
        padding: 0 2px 2px !important;
        opacity: 0.8;
        font-weight: 600;
        height: 22px;
        display: flex;
        justify-content: center;
      }
    }

    #festival-img img {
      box-sizing: border-box;
      border-top-left-radius: 15px;
      border-bottom-right-radius: 15px;
    }

    #festival-img span {
      position: absolute;
      top: 5px;
      right: 10px;
      color: red;
      z-index: 10020;
      cursor: pointer;
      font-size: 20px;
      background-color: white;
      width: fit-content;
      padding: 0 6px 3px;
      opacity: 0.8;
      font-weight: 600;
    }

    #festival-img span:hover {
      opacity: 1;
    }
  </style>
  <link rel="stylesheet" href="css/style1.css">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet" />

  <link rel="stylesheet" href="css/team-img.css" />
  <link rel="stylesheet" href="contactform/contactform.css" />
</head>

<body data-spy="scroll" data-target="#navbar-example">
  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <!-- Brand -->
                <img class="float-l" src="img/logo.png" alt="Mihu Systems" title="Mihu Systems" />
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                  <h1 class="brand-name"><span>Mihu </span>Systems</h1>
                  <p class="tagline" style="font-size: 11px;color: white;width: fit-content;margin: auto;">
                    Empowering
                    The Businesses With IT Solutions
                  </p>
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="whatsapp" href="https://wa.me/917666529550?text=Hi"><img src="img/whatsapp-logo.png"
                    alt="whatsapp" /></a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="page-scroll" href="index.php">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="about.php">About</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="services.php">Services</a>
                  </li>
                  <li class="active">
                    <a class="page-scroll" href="team.php">Team</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="portfolio.php">Portfolio</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="career.php">Career</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="contact.php">Contact</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title3">Collaboration, Expertise, Success</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title1">Meet Our IT Dream Team</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <!-- Start team Area -->
  <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2 style="margin-bottom: 35px; padding-bottom: 0">
              Our special Team
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="team-top">
          <div class="col-md-3 col-sm-3 col-xs-12 mb-5">
            <div class="single-team-member border1">
              <div class="team-img">
                <a href="img/team/1.jpg" class="venobox" data-gall="myGallery">
                  <img src="img/team/1.jpg" alt="Mr. Omprakash Kharawanshi" />
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h5>Mr. Omprakash Kharawanshi</h5>
                <p>Co-Founder</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12 mb-5">
            <div class="single-team-member border1">
              <div class="team-img">
                <a href="img/team/2.jpg" class="venobox" data-gall="myGallery">
                  <img src="img/team/2.jpg" alt="Mrs. Kanchan Kharawanshi" />
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h5>Mrs. Kanchan Kharawanshi</h5>
                <p>Founder</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <!--<div class="col-md-3 col-sm-3 col-xs-12 mb-5">-->
          <!--  <div class="single-team-member border1">-->
          <!--    <div class="team-img">-->
          <!--      <a href="img/team/3.jpeg" class="venobox" data-gall="myGallery">-->
          <!--        <img src="img/team/3.jpeg" alt="R.R. Patra" />-->
          <!--      </a>-->
          <!--      <div class="team-social-icon text-center">-->
          <!--        <ul>-->
          <!--          <li>-->
          <!--            <a href="#">-->
          <!--              <i class="fa fa-facebook"></i>-->
          <!--            </a>-->
          <!--          </li>-->
          <!--          <li>-->
          <!--            <a href="#">-->
          <!--              <i class="fa fa-twitter"></i>-->
          <!--            </a>-->
          <!--          </li>-->
          <!--          <li>-->
          <!--            <a href="#">-->
          <!--              <i class="fa fa-instagram"></i>-->
          <!--            </a>-->
          <!--          </li>-->
          <!--        </ul>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="team-content text-center">-->
          <!--      <h5>R.R. Patra</h5>-->
          <!--      <p>CEO & Business Head</p>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          <!-- End column -->

          <div class="col-md-3 col-sm-3 col-xs-12 mb-5">
            <div class="single-team-member border1">
              <div class="team-img">
                <a href="img/team/4.jpeg" class="venobox" data-gall="myGallery">
                  <img src="img/team/4.jpeg" alt="Dheeraj Kharwar" />
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h5>Dheeraj Kharwar</h5>
                <p>Backend Developer</p>
              </div>
            </div>
          </div>
          <!-- End column -->

          <div class="col-md-3 col-sm-3 col-xs-12 mb-5">
            <div class="single-team-member border1">
              <div class="team-img">
                <a href="img/team/5.jpg" class="venobox" data-gall="myGallery">
                  <img src="img/team/5.jpg" alt="GST Practitioner & Finance Head" />
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h5>SUBRAT KUMAR SAMAL</h5>
                <p>GST Practitioner & Finance Head</p>
              </div>
            </div>
          </div>
          <!-- End column --></p>
        </div>
      </div>
    </div>
    <!-- End column -->

  </div>
  <!-- End Team Area -->

  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner">
      <div class="contact-overly"></div>
      <div class="container">
        <div class="row">
          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <br />
            <br />

            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3785.0580958607065!2d73.86789347409753!3d18.435671171764298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ebe2a7e31227%3A0x20e94cf0ac6d1f6f!2sKhopade%20Nagar!5e0!3m2!1sen!2sin!4v1691771472764!5m2!1sen!2sin"
              width="100%" height="430" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <h2>Contact Form</h2>
              <form id="contact-form" action="send_mail.php" method="post">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" id="name" name="name" required />
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required />
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" id="address" name="address" required />
                </div>
                <div class="form-group">
                  <label for="message">Message:</label>
                  <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <!-- <input type="hidden" name="_next" value="https://mihuinfotech.com/thanks.php" />
                <input type="hidden" name="_subject" value="Mihu Systems - Contact Form - New Submission!" />
                <input type="hidden" name="_captcha" value="false" />
                <input type="hidden" name="_cc" value="ranjan.mihuinfotech@gmail.com,dheeraj.mihuinfotech@gmail.com" /> -->
                <div class="form-group">
                  <input type="submit" value="Submit" />
                </div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
      <div class="text-center">
        <h4 class="third-head" style="margin-top: 20px">
          We look forward to hearing from you and assisting with your
          technology needs.
        </h4>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <div class="clearfix"></div>

  <!-- Start Footer bottom Area -->
  <footer>
    <!-- Footer Start -->

    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>About Us</h4>
            <ul>
              <li><i class="fa fa-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="services.php">Our services</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-chevron-right"></i> <a href="t&c.php">Terms & Conditions</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="privacy-policy.php">Privacy Policies</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="r&c.php">Refund & Cancellation</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Max Parlour, 4th, 401, Khopade Empire, S. No. 8/1, Khopade Nagar, Gujarwadi Road, Katraj, Pune,
              Pune,<br />
              <span> Maharashtra, 411046</span>
              <br>
              <strong>Phone:</strong> +91 7972247649<br>
              <strong>Email:</strong> omprakash@mihusystems.in<br>
            </p>

            <div class="social-links">
              <div class="footer-icons">
                <ul>
                  <li>
                    <a href="https://www.facebook.com/profile.php?id=100094703150978" target="_blank"><i
                        class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/company/mihu-infotech/" target="_blank"><i
                        class="fa fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/mihu_infotech/" target="_blank"><i
                        class="fa fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/@LOGICERP" target="_blank"><i class="fa fa-youtube"></i></a>
                  </li>
                </ul>
              </div>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Subscription</h4>
            <p>Please Subscribe us to get latest news and updates!
            <form action="https://formsubmit.co/omprakash.fbt@gmail.com" method="post">
              <input type="email" name="email_sub" required /><input type="submit" value="Subscribe">
              <!-- <input type="hidden" name="_subject" value="Mihu Systems - New Subscriber!" />
              <input type="hidden" name="_captcha" value="false" />
              <input type="hidden" name="_cc" value="ranjan.mihuinfotech@gmail.com,dheeraj.mihuinfotech@gmail.com" /> -->

            </form>
          </div>

        </div>
      </div>
    </div>
    <!-- Footer End -->
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Mihu Systems</strong>. All Rights
                Reserved
              </p>
            </div>
            <div class="credits white">
              Designed by
              <a href="https://www.mihusystems.in">Mihu <span style="color:white">Systems</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <link href="css/style.css" rel="stylesheet" />
  <style>
    /* Festival-IMG  */
    #festival-img {
      position: fixed;
      top: 80px;
      right: 10px;
      z-index: 10000;
      box-sizing: border-box;
      height: 400px;
      width: 350px;
      border-top-left-radius: 15px;
      border-bottom-right-radius: 15px;
    }

    @media only screen and (max-width: 600px) {
      #festival-img {
        width: 50% !important;
        height: 50vh !important;
      }

      #festival-img img {
        height: 100% !important;
      }

      #festival-img span {
        box-sizing: border-box;
        position: absolute;
        top: 5px;
        right: 10px;
        color: red;
        z-index: 10020;
        cursor: pointer;
        font-size: 16px !important;
        background-color: white;
        width: fit-content;
        padding: 0 2px 2px !important;
        opacity: 0.8;
        font-weight: 600;
        height: 22px;
        display: flex;
        justify-content: center;
      }
    }

    #festival-img img {
      box-sizing: border-box;
      border-top-left-radius: 15px;
      border-bottom-right-radius: 15px;
    }

    #festival-img span {
      position: absolute;
      top: 5px;
      right: 10px;
      color: red;
      z-index: 10020;
      cursor: pointer;
      font-size: 20px;
      background-color: white;
      width: fit-content;
      padding: 0 6px 3px;
      opacity: 0.8;
      font-weight: 600;
    }

    #festival-img span:hover {
      opacity: 1;
    }
  </style>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script>
    $('#close-festiv-img').on('click', function() {
      $('#festival-img').hide();
    })
  </script>
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-PGWHHR82DT"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-PGWHHR82DT");
  </script>
</body>

</html>