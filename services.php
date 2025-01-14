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
  <title>Services</title>
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

  <link rel="stylesheet" href="css/style1.css" />

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet" />

  <link rel="stylesheet" href="contactform/contactform.css" />

  <style>
    p {
      padding: 0 25px;
      text-align: justify;
    }

    #services li {
      text-align: justify;
    }

    #services ul {
      width: fit-content;
      margin: auto;
    }
  </style>
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
                  <li class="active">
                    <a class="page-scroll" href="services.php">Services</a>
                  </li>
                  <li>
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
                <h1 class="title3"><span class="mihu-color">Mihu</span> Systems</h1>

              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Empowering Your Digital Transformation</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->

  <!-- Start Service area -->
  <div id="services" class="services-area area-padding" style="margin-top: 0; padding-top: 20px">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2 style="margin-top: 0">Our Services</h2>
          </div>
        </div>
      </div>

      <br />
      <!-- logic erp area start here -->
      <div id="logic-erp" class="row text-center border1">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h3 style="margin-top: 10px">
              <a class="services-icon" href="https://www.logicerp.com">
                <img style="width: 400px" src="img/logic-logo.png" alt="Logic ERP" />
              </a>
            </h3>
          </div>
        </div>
        <div>
          <p>
            Logic ERP is a software company that specializes in providing
            Enterprise Resources Planning (ERP) solutions to businesses. An
            ERP system integrates various business processes and functions
            into a unified platform, allowing organizations to streamline
            operations, improve efficiency, and make informed decisions based
            on real-time date.
          </p>
          <p>
            Our expertise is in providing integrated ERP Software for Retail,
            Distribution and Manufacturing to thousands of customers till
            date, helped them to meet their business goals. ERP solutions
            developed by LOGIC ERP are characterized for its flexibility and
            scalability to aide in business growth of the customers in the
            time ahead. Cost-effective solutions that are designed for
            specific needs and verticals, help mid- sized to large business
            ventures to address issues, review business performances, and
            assist in making strategic decisions to thrive in the market.
          </p>
        </div>
        <div class="text-center">
          <!-- Start applications platforms Area -->
          <div id="team" class="our-team-area area-padding">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="section-headline text-center">
                    <h2 style="font-size: 30px">
                      ERP Applications Platforms
                    </h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="team-top">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-team-member border1">
                      <h4 style="
                            font-weight: 600;
                            font-family: 'Times New Roman', Times, serif;
                            color: #373e4a;
                          ">
                        <i class="fa fa-industry" style="font-size: 40px; margin-top: 15px"></i><br />ENTERPRISE
                      </h4>
                      <p>Complete ERP Suite for all organizational levels</p>
                    </div>
                  </div>
                  <!-- End column -->
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-team-member border1">
                      <h4 style="
                            font-weight: 600;
                            font-family: 'Times New Roman', Times, serif;
                            color: #2055b9;
                          ">
                        <i class="fa fa-cloud" style="font-size: 40px; margin-top: 15px"></i><br />ON-CLOUD
                      </h4>
                      <p>
                        Self serviced cloud based ERP applications for SMEs
                      </p>
                    </div>
                  </div>
                  <!-- End column -->

                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-team-member border1">
                      <h4 style="
                            font-weight: 600;
                            font-family: 'Times New Roman', Times, serif;
                            color: #bd4343;
                          ">
                        <i class="fa fa-newspaper-o" style="font-size: 40px; margin-top: 15px"></i><br />ON-PRIMISE
                      </h4>
                      <p>
                        Subscription based On-Premise Logic Business
                        Applications for SMEs
                      </p>
                    </div>
                  </div>
                  <!-- End column -->
                </div>
              </div>
            </div>
          </div>
          <!-- End applications platforms Area -->

          <!-- Start verticals Area -->
          <div id="team" class="our-team-area area-padding" style="margin-top: 0; padding-top: 0">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="section-headline text-center">
                    <h2 style="font-size: 30px">
                      We provide ERP solution in the following verticals
                    </h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="team-top">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-team-member border1">
                      <h4 style="
                            font-weight: 600;
                            font-family: 'Times New Roman', Times, serif;
                            color: #000;
                          ">
                        <img src="img/retail.png" alt="retail" width="50px" /><br />Retail
                      </h4>
                      <ul>
                        <li>
                          <i class="fa fa-check"></i> Apparel & Footwear
                        </li>
                        <li>
                          <i class="fa fa-check"></i> Pharma & Healthcare
                        </li>
                        <li><i class="fa fa-check"></i> FMCG</li>
                        <li>
                          <i class="fa fa-check"></i> Lifestyle & Fashion
                        </li>
                        <li>
                          <i class="fa fa-check"></i> Electrical & Electronics
                        </li>
                        <li><i class="fa fa-check"></i> Food & Beverages</li>
                        <li><i class="fa fa-check"></i> Welness & Salon</li>
                        <li><i class="fa fa-check"></i> Hardware</li>
                      </ul>
                    </div>
                  </div>
                  <!-- End column -->
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-team-member border1">
                      <h4 style="
                            font-weight: 600;
                            font-family: 'Times New Roman', Times, serif;
                            color: #000;
                          ">
                        <img src="img/dst.png" alt="distribution" width="50px" /><br />Distribution
                      </h4>
                      <ul>
                        <li>
                          <i class="fa fa-check"></i> Apparel & Footwear
                        </li>
                        <li><i class="fa fa-check"></i> Garments</li>
                        <li><i class="fa fa-check"></i> Textile</li>
                        <li>
                          <i class="fa fa-check"></i> Pharma & Healthcare
                        </li>
                        <li><i class="fa fa-check"></i> FMCG</li>
                        <li>
                          <i class="fa fa-check"></i> Lifestyle & Fashion
                        </li>
                        <li>
                          <i class="fa fa-check"></i> Electrical & Electronics
                        </li>
                        <li><i class="fa fa-check"></i> Auto-Parts</li>
                      </ul>
                    </div>
                  </div>
                  <!-- End column -->

                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-team-member border1">
                      <h4 style="
                            font-weight: 600;
                            font-family: 'Times New Roman', Times, serif;
                            color: #000;
                          ">
                        <img src="img/mfg.png" alt="manufacturing" width="50px" /><br />Manufacturing
                      </h4>
                      <ul>
                        <li>
                          <i class="fa fa-check"></i> Apparel & Footwear
                        </li>
                        <li><i class="fa fa-check"></i> Garments</li>
                        <li><i class="fa fa-check"></i> Textile</li>
                        <li>
                          <i class="fa fa-check"></i> Pharma & Healthcare
                        </li>
                        <li><i class="fa fa-check"></i> FMCG</li>
                        <li>
                          <i class="fa fa-check"></i> Lifestyle & Fashion
                        </li>
                        <li>
                          <i class="fa fa-check"></i> Electrical & Electronics
                        </li>
                        <li><i class="fa fa-check"></i> Auto-Parts</li>
                      </ul>
                    </div>
                  </div>
                  <!-- End column -->
                </div>
              </div>
            </div>
          </div>
          <!-- End verticals Area -->
        </div>
        <div class="text-center">
          <a style="margin-top: 20px; margin-bottom: 20px" class="btn btn-primary" href="https://www.logicerp.com">Click
            Here To View More >>
          </a>
        </div>
      </div>
      <!-- end logic erp area -->

      <!-- software development service area start here -->
      <br />
      <div id="software-dev" class="row text-center border1">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h3 style="margin-top: 20px; font-weight: 600">
              <i class="fa fa-server"></i><br />Software Development
            </h3>
          </div>
        </div>
        <ul>
          <li><i class="fa fa-check"></i> Custom software development</li>
          <li><i class="fa fa-check"></i> Enterprise software solutions</li>
          <li><i class="fa fa-check"></i> CRM and ERP systems</li>
          <li><i class="fa fa-check"></i> Business process automation</li>
          <li><i class="fa fa-check"></i> Legacy system modernization</li>
          <li><i class="fa fa-check"></i> Legacy system modernization</li>
        </ul>
        <br /><br />
      </div>
      <!-- end software development service area  -->
      <!-- web development service area start here -->
      <br />
      <div id="web-dev" class="row text-center border1">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h3 style="margin-top: 20px; font-weight: 600">
              <img src="img/web.png" alt="web icon" />
              <br />Web Development
            </h3>
          </div>
        </div>
        <ul>
          <li><i class="fa fa-check"></i> Custom website development</li>
          <li><i class="fa fa-check"></i> E-commerce website development</li>
          <li><i class="fa fa-check"></i> Responsive web design</li>
          <li>
            <i class="fa fa-check"></i> Content management systems (CMS)
          </li>
          <li><i class="fa fa-check"></i> Web application development</li>
          <li><i class="fa fa-check"></i> Website maintenance and support</li>
        </ul>
        <br /><br />
      </div>
      <!-- end web development service area  -->
      <!-- digital marketing service area start here -->
      <br />
      <div id="digital-marketing" class="row text-center border1">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h3 style="margin-top: 20px; font-weight: 600">
              <img src="img/digital.png" alt="digital marketing icon" /><br />Digital Marketing
            </h3>
          </div>
        </div>
        <p>
          Mihu Systems, a prominent IT company, employs a robust digital
          marketing strategy to reach a broader audience, enhance brand
          awareness, and drive business growth. Through website optimization,
          SEO, content marketing, social media engagement, email campaigns,
          PPC advertising, influencer collaborations, webinars, customer
          testimonials, and performance tracking, the company showcases its
          expertise and nurtures leads effectively. With a data-driven
          approach, Mihu Systems aims to solidify its position as a market
          leader and foster lasting client relationships.
        </p>
        <br /><br />
      </div>
      <!-- end digital marketing service area  -->
      <!-- photography service area start here -->
      <br />
      <div id="photography" class="row text-center border1">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h3 style="margin-top: 20px; font-weight: 600">
              <img src="img/phtotgraphy.png" alt="photography icon" /><br />Photography
            </h3>
          </div>
        </div>
        <p>
          Mihu Systems, a leading IT company, offers top-notch photography
          services to enhance its brand image, showcase corporate culture, and
          engage with clients. Their services encompass corporate photography,
          event coverage, product photography, professional headshots, and
          visual content for social media and marketing materials. With a
          strategic visual content strategy, Mihu Systems creates compelling
          narratives that align with its brand identity, reinforcing its
          position as a prominent player in the IT industry.
        </p>
        <br /><br />
      </div>
      <!-- end Photography service area  -->
      <!-- Start IT Consulting service area -->
      <br />
      <div class="row text-center border1">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h3 style="margin-top: 20px; font-weight: 600">
              <i class="fa fa-industry"></i><br />IT Consulting
            </h3>
          </div>
        </div>
        <p>
          Mihu Systems offers expert IT Consulting services that focus on
          helping businesses optimize their technology investments and improve
          IT infrastructure. By conducting thorough assessments, the company
          identifies opportunities for improvement, cost-saving measures, and
          risk mitigation. With a strong emphasis on digital transformation,
          Mihu Systems designs tailored IT strategies to drive innovation and
          productivity. The consulting team provides ongoing support to ensure
          successful implementation and secure IT operations. Overall, Mihu
          Infotech's IT Consulting services enable businesses to leverage
          technology effectively and achieve their organizational goals.
        </p>
        <br /><br />
      </div>
      <!-- End IT Consulting service area -->
      <!-- Start Quality Assurance service area  -->
      <br />
      <div class="row text-center border1">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h3 style="margin-top: 20px; font-weight: 600">
              <i class="fa fa-bolt"></i><br />Quality Assurance
            </h3>
          </div>
        </div>
        <p>
          Mihu Systems is an innovative IT company focused on delivering
          high-quality software solutions and services to its clients. With a
          strong emphasis on quality assurance, the company employs a
          systematic and comprehensive approach to ensure that all products
          meet the highest standards of performance, security, and user
          experience. The dedicated QA team collaborates closely with
          stakeholders, conducts rigorous testing at various stages of
          development, and continuously improves processes to deliver reliable
          and user-friendly solutions. Mihu Systems's commitment to client
          satisfaction and continuous improvement sets them apart as a leading
          player in the IT industry.
        </p>
        <br /><br />
      </div>
      <!--End Quality Assurance development service area  -->

      <!--Start System Integration area -->
      <br />
      <div class="row text-center border1">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h3 style="margin-top: 20px; font-weight: 600">
              <i class="fa fa-cogs"></i><br />System Integration
            </h3>
          </div>
        </div>
        <p>
          At Mihu Systems, we offer expert System Integration services to
          streamline and optimize your business operations. Our skilled team
          designs robust system architectures, integrates software
          applications, synchronizes data from multiple sources, implements
          Enterprise Service Bus solutions, facilitates cloud integration,
          enables API integration, and modernizes legacy systems. With our
          tailored approach, we ensure seamless connectivity, improved
          efficiency, and enhanced functionality across your IT
          infrastructure. Trust us to integrate your systems and technologies
          for a seamless and optimized business workflow.
        </p>
        <br /><br />
      </div>
      <!-- End System Integration area  -->
      <!--Start IT Support and Maintenance -->
      <br />
      <div class="row text-center border1">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h3 style="margin-top: 20px; font-weight: 600">
              <i class="fa fa-universal-access"></i><br />IT Support and
              Maintenance
            </h3>
          </div>
        </div>
        <p>
          Mihu Systems offers comprehensive IT support and maintenance
          services to ensure the smooth and efficient operation of your
          business systems. Our experienced team provides help desk support,
          remote assistance, proactive system monitoring and maintenance,
          network management, backup and disaster recovery solutions, IT asset
          management, and strategic IT consulting. With our expertise, you can
          rely on us to keep your IT infrastructure secure, optimized, and
          running smoothly, allowing you to focus on your core business
          objectives. Trust us to provide reliable and efficient IT support
          and maintenance for your organization.
        </p>
        <br /><br />
      </div>
      <!-- End IT Support and Maintenance  -->
      <!--Start 24/7 support area -->
      <br />
      <div id="support" class="row text-center border1">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h3 style="margin-top: 20px; font-weight: 600">
              <i class="fa fa-ticket"></i><br />24/7 Support
            </h3>
          </div>
        </div>
        <p>
          At Mihu Systems, We understand the importance of uninterrupted
          technical assistance and customer support. That's why we are proud
          to offer round-the-clock support to ensure that your IT needs are
          met, no matter the time of day or night. Our dedicated team of IT
          professionals is here to provide you with timely solutions and
          expert guidance whenever you need it.
        </p>
        <br /><br />
      </div>
      <!-- End 24/7 support area  -->
      <br />
      <q><i style="font-size: 17px; font-weight: 600">
          At Mihu Systems, we believe in building strong partnerships with
          our clients by providing reliable and efficient IT solutions.
          Contact us today to discuss your specific requirements and let us
          help you achieve your business objectives through technology.
        </i></q>
    </div>
  </div>

  <!-- End Service area -->

  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner">
      <div class="contact-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
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
              <li><i class="fa fa-chevron-right"></i><a href="ship-policy.php">Shipping & Delivery
                  Policy</a></li>
              </li>
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
              <!-- <form action="https://formsubmit.co/omprakash.fbt@gmail.com" method="post"> -->
            <form action="send_mail.php" method="post">
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