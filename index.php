<?php
include('config.php');
// if (!isset($_GET['q'])) {
//     header('Location: ' . $currentURL . '?q=' . generateRandomString(64));
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Mihu Systems</title>
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
                                    <p class="tagline"
                                        style="font-size: 11px;color: white;width: fit-content;margin: auto;">
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
                                <a class="whatsapp" href="https://wa.me/917666529550?text=Hi"><img
                                        src="img/whatsapp-logo.png" alt="whatsapp" /></a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1"
                                id="navbar-example">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active">
                                        <a class="page-scroll" href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="about.php">About</a>
                                    </li>
                                    <li>
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
    <!-- Start Slider Area -->
    <div id="home" class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
                <img src="img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
                <img src="img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
            </div>

            <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1"><span class="mihu-color">Mihu</span> Systems</h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">
                                        Empowering The Businesses With IT Solutions
                                    </h1>
                                </div>
                                <!-- layer 3 -->
                                <div style="margin-top: 25px" class="layer-1-3 hidden-xs wow slideInUp"
                                    data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="services.php">See Services</a>
                                    <a class="ready-btn page-scroll" href="about.php">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content text-center">
                                <!-- layer 1 -->
                                <div class="layer-1-1 wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">A Leading Software Consultancy</h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">
                                        Inspiring Possibilities, Delivering Results
                                    </h1>
                                </div>
                                <!-- layer 3 -->
                                <div style="margin-top: 25px" class="layer-1-3 hidden-xs wow slideInUp"
                                    data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="services.php">See Services</a>
                                    <a class="ready-btn page-scroll" href="about.php">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 3 -->
            <div id="slider-direction-3" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">Authorised Partner of Logic ERP</h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">
                                        Building the Bridge Between Vision and Reality
                                    </h1>
                                </div>
                                <!-- layer 3 -->
                                <div style="margin-top: 25px" class="layer-1-3 hidden-xs wow slideInUp"
                                    data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="services.php">See Services</a>
                                    <a class="ready-btn page-scroll" href="about.php">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- Start About area -->
    <div id="about" class="about-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Who We Are?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <p>
                    Mihu Systems is a renowned software consultancy firm that
                    specializes in providing comprehensive solutions to businesses
                    across various industries. With a strong focus on technology,
                    innovation, and client satisfaction, Mihu Systems has established
                    itself as a trusted partner for organizations seeking expert
                    guidance and customized software solutions. This article will delve
                    into the key aspects of Mihu Systems's operations, its services,
                    and the factors that have contributed to its success in the
                    competitive software consultancy market.
                </p>
                <h4 class="sec-head">Expertise and Services</h4>
                <p>
                    Mihu Systems boasts a team of highly skilled professionals with
                    diverse backgrounds and expertise in a wide range of technologies.
                    From software development and project management to quality
                    assurance and system integration, their team possesses the necessary
                    skills and experience to handle complex projects effectively. Their
                    consultants stay up-to-date with the latest industry trends and
                    leverage cutting-edge technologies to deliver top-notch solutions to
                    clients.
                </p>
                <p>
                    Mihu Systems offers a comprehensive suite of services, tailored to
                    meet the specific requirements of each client. These services
                    include:
                </p>
                <!-- single-well end-->
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="well-middle">
                        <div class="single-well">
                            <ul>
                                <li><i class="fa fa-check"></i> ERP Software (Logic ERP)</li>
                                <li><i class="fa fa-check"></i> Software Development</li>
                                <li><i class="fa fa-check"></i> Web Development</li>
                                <li><i class="fa fa-check"></i> Digital Marketing</li>
                                <li><i class="fa fa-check"></i> Photography</li>
                                <li><i class="fa fa-check"></i> IT Consulting</li>
                                <li><i class="fa fa-check"></i> Quality Assurance</li>
                                <li><i class="fa fa-check"></i> System Integration</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a style="margin-top: 20px" class="btn btn-primary" href="about.php">View More >>
                    </a>
                </div>

                <!-- End col-->
            </div>
        </div>
    </div>

    <!-- End About area -->

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
            <p>
                At Mihu Systems, we strive to provide cutting-edge IT solutions to
                empower businesses and drive their growth in the digital world. Our
                team of skilled professionals is committed to delivering innovative
                and customized services that cater to the unique requirements of our
                clients. Whether you are a small startup or a large enterprise, we
                have the expertise to enhance your digital presence and optimize your
                operations. Explore our comprehensive range of services below:
            </p>
            <div class="row text-center">
                <div class="services-contents">
                    <!-- Start Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="services.php#logic-erp">
                                        <img src="img/logic-logo-icon.png" alt="Logic ERP" />
                                    </a>
                                    <h4 style="margin-top: 0; padding-top: 0">
                                        Logic ERP Software
                                    </h4>
                                    <p>
                                        Logic ERP is a software company that specializes in
                                        providing Enterprise Resources Planning (ERP) solutions to
                                        businesses. An ERP system integrates various business
                                        processes and functions into a unified platform, allowing
                                        organizations to streamline operations, improve
                                        efficiency, and make informed decisions based on real-time
                                        date.
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="services.php#software-dev">
                                        <i class="fa fa-server"></i>
                                    </a>
                                    <h4>Software Development</h4>
                                    <p>
                                        Mihu Systems excels in developing customized software
                                        solutions, ranging from web and mobile applications to
                                        enterprise software systems. They follow a meticulous
                                        software development lifecycle, ensuring that the end
                                        product is robust, scalable, and user-friendly.
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <!-- End Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="services.php#web-dev">
                                        <img src="img/web.png" alt="web icon" />
                                    </a>
                                    <h4>Web Development</h4>
                                    <p>
                                        At Mihu Systems, we specialize in professional web
                                        development services that enable businesses to establish a
                                        strong online presence, engage customers, and achieve
                                        their digital goals. Our team of skilled web developers
                                        combines creativity, technical expertise, and industry
                                        best practices to deliver cutting-edge websites that are
                                        visually stunning, user-friendly, and optimized for
                                        performance
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="services-contents">
                    <!-- Start Left services -->

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="services.php#digital-marketing">
                                        <img src="img/digital.png" alt="digital marketing icon" />
                                    </a>
                                    <h4>Digital Marketing</h4>
                                    <p>
                                        Mihu Systems, a prominent IT company, employs a robust
                                        digital marketing strategy to reach a broader audience,
                                        enhance brand awareness, and drive business growth.
                                        Through website optimization, SEO, content marketing,
                                        social media engagement, email campaigns, PPC advertising,
                                        influencer collaborations, webinars, customer
                                        testimonials, and performance tracking, the company
                                        showcases its expertise and nurtures leads effectively.
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="services.php#photography">
                                        <img src="img/phtotgraphy.png" alt="photography icon" />
                                    </a>
                                    <h4>Photography</h4>
                                    <p>
                                        Mihu Systems, a leading IT company, offers top-notch
                                        photography services to enhance its brand image, showcase
                                        corporate culture, and engage with clients. Their services
                                        encompass corporate photography, event coverage, product
                                        photography, professional headshots, and visual content
                                        for social media and marketing materials.
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <!-- End Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="services.php#support">
                                        <i class="fa fa-ticket"></i>
                                    </a>
                                    <h4>24/7 Support</h4>
                                    <p>
                                        We understand the importance of uninterrupted technical
                                        assistance and customer support. That's why we are proud
                                        to offer round-the-clock support to ensure that your IT
                                        needs are met, no matter the time of day or night. Our
                                        dedicated team of IT professionals is here to provide you
                                        with timely solutions and expert guidance whenever you
                                        need it.
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a style="margin-top: 20px" class="btn btn-primary" href="about.php">View More >>
                </a>
            </div>
        </div>
    </div>

    <!-- End Service area -->

    <!-- our-skill-area start -->
    <div class="our-skill-area fix hidden-sm">
        <div class="test-overly"></div>
        <div class="skill-bg area-padding-2">
            <div class="container">
                <!-- section-heading end -->
                <div class="row">
                    <div class="skill-text">
                        <!-- single-skill start -->
                        <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                            <div class="single-skill">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="95" data-linecap="round"
                                        data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20"
                                        data-readonly="true" disabled />
                                    <h3 class="progress-h4">Java</h3>
                                </div>
                            </div>
                        </div>
                        <!-- single-skill end -->
                        <!-- single-skill start -->
                        <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                            <div class="single-skill">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="85" data-linecap="round"
                                        data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20"
                                        data-readonly="true" disabled />
                                    <h3 class="progress-h4">Html & Css</h3>
                                </div>
                            </div>
                        </div>
                        <!-- single-skill end -->
                        <!-- single-skill start -->
                        <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                            <div class="single-skill">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="75" data-linecap="round"
                                        data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20"
                                        data-readonly="true" disabled />
                                    <h3 class="progress-h4">Java Script</h3>
                                </div>
                            </div>
                        </div>
                        <!-- single-skill end -->
                        <!-- single-skill start -->
                        <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                            <div class="single-skill">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="65" data-linecap="round"
                                        data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20"
                                        data-readonly="true" disabled />
                                    <h3 class="progress-h4">Python</h3>
                                </div>
                            </div>
                        </div>
                        <!-- single-skill end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our-skill-area end -->

    <!-- Faq area start -->
    <div class="faq-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Faq Question</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="faq-details">
                        <div class="panel-group" id="accordion">
                            <!-- Panel Default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" class="active" data-parent="#accordion"
                                            href="#check1">
                                            <span class="acc-icons"></span>What services does Mihu
                                            Systems provide?
                                        </a>
                                    </h4>
                                </div>
                                <div id="check1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>
                                            Mihu Systems offers a wide range of IT services,
                                            including web development, software development, ERP
                                            Solution, IT consulting, data analytics, and digital
                                            marketing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Panel Default -->

                            <!-- Panel Default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#check2">
                                            <span class="acc-icons"></span> Is Mihu Systems
                                            experienced in working with small businesses?
                                        </a>
                                    </h4>
                                </div>
                                <div id="check2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Yes, we have extensive experience working with small
                                            businesses. We understand the unique challenges faced by
                                            small businesses and provide tailored solutions to meet
                                            their specific needs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Panel Default -->
                            <!-- Panel Default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#check3">
                                            <span class="acc-icons"></span>Is Mihu Systems involved
                                            in e-commerce development?
                                        </a>
                                    </h4>
                                </div>
                                <div id="check3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Yes, we specialize in e-commerce development. Our team
                                            can create customized online stores, integrate payment
                                            gateways, develop inventory management systems, and
                                            provide ongoing support for your e-commerce business.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Panel Default -->
                            <!-- Panel Default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#check4">
                                            <span class="acc-icons"></span>Does Mihu Systems
                                            provide IT consulting services?
                                        </a>
                                    </h4>
                                </div>
                                <div id="check4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Yes, we offer IT consulting services to help businesses
                                            make informed decisions about their technology
                                            infrastructure, software solutions, and digital
                                            strategies. Our consultants can assess your needs,
                                            provide recommendations, and assist with implementing
                                            the best IT solutions for your organization.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Panel Default -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="tab-menu">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active">
                                <a href="#p-view-1" role="tab" data-toggle="tab">Project</a>
                            </li>
                            <li>
                                <a href="#p-view-2" role="tab" data-toggle="tab">Planning</a>
                            </li>
                            <li>
                                <a href="#p-view-3" role="tab" data-toggle="tab">Success</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="p-view-1">
                            <div class="tab-inner">
                                <div class="event-content head-team">
                                    <h4>Project</h4>
                                    <p>
                                        We begin each project by conducting a thorough analysis to
                                        gain a deep understanding of our client's requirements,
                                        goals, and constraints. We collaborate closely with our
                                        clients to identify their specific needs, desired
                                        outcomes, and any potential challenges or risks.
                                    </p>
                                    <p>
                                        Our team comprises experienced professionals who possess a
                                        diverse range of skills and expertise. They are
                                        well-versed in the latest technologies, industry best
                                        practices, and project management methodologies. We
                                        leverage their knowledge and capabilities to deliver
                                        high-quality results within the agreed-upon timelines.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="p-view-2">
                            <div class="tab-inner">
                                <div class="event-content head-team">
                                    <h4>Planning</h4>
                                    <p>
                                        Based on the analysis, we develop a customized project
                                        plan that outlines the project scope, milestones,
                                        timelines, resource allocation, and deliverables. Our team
                                        works closely with our clients to establish clear project
                                        objectives, ensuring that everyone is aligned and has a
                                        shared understanding of the project's direction.
                                    </p>
                                    <p>
                                        We follow agile project management principles, allowing us
                                        to adapt and respond to changing project requirements
                                        effectively. Our iterative approach ensures regular
                                        communication, collaboration, and feedback loops with our
                                        clients throughout the project lifecycle, fostering
                                        transparency and minimizing the risk of misalignment.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="p-view-3">
                            <div class="tab-inner">
                                <div class="event-content head-team">
                                    <h4>Success</h4>
                                    <p>
                                        At our IT company, we are dedicated to ensuring the
                                        success of every project we undertake. By combining
                                        meticulous planning, agile methodologies, effective
                                        communication, and a commitment to excellence, we strive
                                        to exceed our clients' expectations and deliver
                                        exceptional outcomes.
                                    </p>
                                    <p>
                                        If you're interested in working with us or have any
                                        further questions regarding our project planning and
                                        success strategies, please don't hesitate to get in touch.
                                        We look forward to the opportunity to collaborate with
                                        you!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Row -->
        </div>
    </div>
    <!-- End Faq Area -->


    <!-- Start Wellcome Area -->
    <div class="wellcome-area">
        <div class="well-bg">
            <div class="test-overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wellcome-text">
                            <div class="well-text text-center">
                                <h2>Welcome To Mihu Systems</h2>
                                <p>Subscribe us to get latest news regarding business!</p>
                                <div class="subs-feilds">
                                    <div class="suscribe-input">
                                        <!-- <form action="https://formsubmit.co/omprakash.fbt@gmail.com" method="post"> -->
                                        <form action="send_mail.php" method="post">
                                            <input type="email" name="email_sub" class="email form-control width-80"
                                                id="sus_email" placeholder="Email" required />
                                            <!-- <input type="hidden" name="_subject"
                                                value="Mihu Systems - New Subscriber!" />
                                            <input type="hidden" name="_captcha" value="false" />
                                            <input type="hidden" name="_cc"
                                                value="ranjan.mihuSystems@gmail.com,dheeraj.mihuSystems@gmail.com" /> -->
                                            <button type="submit" id="sus_submit" class="add-btn width-20">
                                                Subscribe
                                            </button>
                                        </form>
                                        <div id="msg_Submit" class="h3 text-center hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Wellcome Area -->

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
                    <!--    <div class="single-team-member border1">-->
                    <!--        <div class="team-img">-->
                    <!--            <a href="img/team/3.jpeg" class="venobox" data-gall="myGallery">-->
                    <!--                <img src="img/team/3.jpeg" alt="R.R. Patra" />-->
                    <!--            </a>-->
                    <!--            <div class="team-social-icon text-center">-->
                    <!--                <ul>-->
                    <!--                    <li>-->
                    <!--                        <a href="#">-->
                    <!--                            <i class="fa fa-facebook"></i>-->
                    <!--                        </a>-->
                    <!--                    </li>-->
                    <!--                    <li>-->
                    <!--                        <a href="#">-->
                    <!--                            <i class="fa fa-twitter"></i>-->
                    <!--                        </a>-->
                    <!--                    </li>-->
                    <!--                    <li>-->
                    <!--                        <a href="#">-->
                    <!--                            <i class="fa fa-instagram"></i>-->
                    <!--                        </a>-->
                    <!--                    </li>-->
                    <!--                </ul>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="team-content text-center">-->
                    <!--            <h5>R.R. Patra</h5>-->
                    <!--            <p>CEO & Business Head</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
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
                                <p>Software Developer</p>
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
                    <!-- End column -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start reviews Area -->
    <div class="reviews-area hidden-xs">
        <div class="work-us">
            <div class="work-left-text">
                <a href="#">
                    <img src="img/slider/slider2.jpg" alt="" />
                </a>
            </div>
            <div class="work-right-text text-center">
                <h2>working with us</h2>
                <h5>
                    Web Design, Software Development, ERP Software & Industrial Training
                    etc.
                </h5>
                <a href="contact.php" class="ready-btn">Contact us</a>
            </div>
        </div>
    </div>
    <!-- End reviews Area -->

    <!-- Start portfolio Area -->
    <div id="portfolio" class="portfolio-area area-padding fix mpb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2 style="margin-bottom: 35px; padding-bottom: 0">
                            Our Portfolio
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mpt-0" />
        <div class="container">
            <div class="row">
                <!-- Start Portfolio -page -->
                <div class="awesome-project-1 fix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="awesome-menu">
                            <ul class="project-menu">
                                <li>
                                    <a href="#" class="active" data-filter="*">All</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".development">Software Development</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".design">Web Development</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".Logic-ERP">Logic ERP</a>
                                </li>

                                <li>
                                    <a href="#" data-filter=".training">Training</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".photo">Photo</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".video">Video</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="awesome-project-content">
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP video">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <iframe width="424" height="238"
                                    src="https://www.youtube.com/embed/KNBvnjH6_8Y?autoplay=1&mute=1"
                                    title="Welcome to LOGIC ERP | The Best ERP Solution for YOU!" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->

                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="img/portfolio/logic/5.1.jpg" alt="Logic ERP" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/logic/5.1.jpg">
                                            <h4>Next Generation ERP</h4>
                                            <span>Logic ERP</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="img/portfolio/logic/5.2.jpg" alt="Logic ERP - Features" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/logic/5.2.jpg">
                                            <h4>Features - Next Generation ERP</h4>
                                            <span>Logic ERP</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="img/portfolio/logic/1.2.jpg"
                                        alt="Apparel & Footwear - Complete ERP Solution - Logic ERP" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/logic/1.2.jpg">
                                            <h4>Apparel & Footwear - Complete ERP Solution</h4>
                                            <span>Logic ERP</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="img/portfolio/logic/8.1.jpg"
                                        alt="Retail Solution - Logic ERP" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/logic/8.1.jpg">
                                            <h4>Retail Solution</h4>
                                            <span>Logic ERP</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 Logic-ERP">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="img/portfolio/logic/4.1.jpg"
                                        alt="Food And Beverages Solution - Logic ERP" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/logic/4.1.jpg">
                                            <h4>Food & Beverages Solution</h4>
                                            <span>Logic ERP</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                </div>
                <div class="text-center">
                    <a class="btn btn-primary" href="portfolio.php">View More >> </a>
                    <br />
                    <br />
                </div>
            </div>
        </div>
    </div>
    <!--End portfolio area -->
    <br />
    <br />
    <div class="section-headline text-center">
        <h2>Testimonials</h2>
    </div>
    <!-- Start Testimonials -->
    <div class="testimonials-area">
        <div class="testi-inner area-padding">
            <div class="testi-overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start testimonials Start -->
                        <div class="testimonial-content text-center">
                            <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
                            <!-- start testimonial carousel -->
                            <div class="testimonial-carousel">
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <p>
                                            Mihu Systems has been an invaluable partner in
                                            transforming our IT infrastructure. Their team of
                                            experts seamlessly migrated our systems to the cloud,
                                            improving scalability and reducing costs. The level of
                                            professionalism, technical expertise, and excellent
                                            support we received exceeded our expectations. Thanks to
                                            Mihu Systems, we now have a robust and secure IT
                                            foundation that has accelerated our business growth.
                                        </p>
                                        <h6>Mr. Raju Ranjan, CEO of Fabric Corporation</h6>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <p>
                                            I approached Mihu Systems to develop a custom
                                            e-commerce website, and they delivered beyond my
                                            expectations. Their skilled developers created a
                                            user-friendly and visually appealing platform that
                                            perfectly aligned with my business needs. Throughout the
                                            development process, their communication was
                                            exceptional, and they ensured that every detail was
                                            taken care of. Thanks to Mihu Systems, my online store
                                            is now thriving, and I continue to receive positive
                                            feedback from my customers.
                                        </p>
                                        <h6>Mr. Ahamad Ali, E-commerce Entrepreneur</h6>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <p>
                                            Mihu Systems has been our trusted IT support partner
                                            for several years now. Their proactive monitoring and
                                            maintenance services have significantly minimized
                                            downtime and kept our systems running smoothly. Whenever
                                            we have encountered technical issues, their responsive
                                            and knowledgeable support team has provided quick and
                                            effective solutions. Mihu Systems truly understands our
                                            business needs and has become an invaluable extension of
                                            our IT department.
                                        </p>
                                        <h6>
                                            Mr. Pratik Srivastav, IT Manager at Informax Corporation
                                        </h6>
                                    </div>
                                </div>
                                <!-- End single item -->
                            </div>
                        </div>
                        <!-- End testimonials end -->
                    </div>
                    <!-- End Right Feature -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->
    <!-- Start Blog Area -->

    <!-- End Blog -->
    <!-- Start Suscrive Area -->

    <!-- End Suscrive Area -->
    <!-- Start contact Area -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
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
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-mobile"></i>
                                <p>
                                    Call: +91 7972247649<br />
                                    <span>Monday-Friday (09:30 AM - 06:00 PM)</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    Email: omprakash@mihusystems.in<br />
                                    <span>Web: www.mihusystems.in</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    Location: Max Parlour, 4th, 401, Khopade Empire, S. No. 8/1, Khopade Nagar,
                                    Gujarwadi Road, Katraj, Pune, Pune,<br />
                                    <span> Maharashtra, 411046</span>
                                </p>
                            </div>
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
                                <!-- <input type="hidden" name="_next" value="https://mihusystems.in/thanks.php" />
                                <input type="hidden" name="_subject"
                                    value="Mihu Systems - Contact Form - New Submission!" />
                                <input type="hidden" name="_captcha" value="false" />
                                <input type="hidden" name="_cc"
                                    value="ranjan.mihuSystems@gmail.com,dheeraj.mihuSystems@gmail.com" /> -->
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
                            <li><i class="fa fa-chevron-right"></i> <a href="privacy-policy.php">Privacy Policies</a>
                            </li>
                            <li><i class="fa fa-chevron-right"></i><a href="ship-policy.php">Shipping & Delivery
                                    Policy</a></li>
                            </li>
                            <li><i class="fa fa-chevron-right"></i> <a href="r&c.php">Refund & Cancellation</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            Max Parlour, 4th, 401, Khopade Empire, S. No. 8/1, Khopade Nagar, Gujarwadi Road, Katraj,
                            Pune, Pune,<br />
                            <span> Maharashtra, 411046</span>
                            <br>
                            <strong>Phone:</strong> +91 7972247649<br>
                            <strong>Email:</strong> omprakash@mihusystems.in<br>
                        </p>

                        <div class="social-links">
                            <div class="footer-icons">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100094703150978"
                                            target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/mihu-Systems/" target="_blank"><i
                                                class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/mihu_Systems/" target="_blank"><i
                                                class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/@LOGICERP" target="_blank"><i
                                                class="fa fa-youtube"></i></a>
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
                            <input type="hidden" name="_cc"
                                value="ranjan.mihuSystems@gmail.com,dheeraj.mihuSystems@gmail.com" /> -->

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
    <div id="festival-img">
        <span id="close-festiv-img">x</span>
        <img src="img/Black and Gold Happy New Year Greeting Instagram Post (1).png" alt="Happy New Year">
    </div>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script>
        $('#close-festiv-img').on('click', function() {
            $('#festival-img').hide();
        })
    </script>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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