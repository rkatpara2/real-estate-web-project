<?php
    session_start();
    include("dbconnection.php");
    $username = "";
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }

    $qry = "SELECT * from property";
    $result = mysqli_query($con,$qry);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Real Estate</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="/realestate1/img/homi.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="/realestate1/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/realestate1/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/realestate1/img/apple-touch-icon-114x114.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/realestate1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/realestate1/fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="/realestate1/css/style.css">
    <link rel="stylesheet" type="text/css" href="/realestate1/css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="/realestate1/css/nivo-lightbox/default.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">


    <link rel="stylesheet" href="/realestate1/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/realestate1/css/animate.css" />
    <link rel="stylesheet" href="/realestate1/css/owl.carousel.css" />
    <link rel="stylesheet" href="/realestate1/css/style1.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Navigation
    ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand page-scroll" href="#page-top">D-Rooms</a>
                <div class="phone"><span>Call Today</span>+91 996-985-9857</div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="contact.php" class="page-scroll">Contact</a></li>
                    <?php
                        if(isset($_SESSION["username"])){
                    ?>
                    <li><a href="logout.php" class="page-scroll"><?php echo $username; ?></a></li>
                    <?php    
                        }
                        else{
                    ?>
                    <li><a href="loginform.php" class="page-scroll">Login</a></li>
                    <?php
                        }
                    ?>
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- Header -->
    <header id="header">
        <div class="intro">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 intro-text">
                            <h1>Home Construction<br> & Remodeling</h1>
                            <p>Buying real estate is not only the best way, the quickest way, the safest way, but the only way to become wealthy.</p>
                            <a href="#about" class="btn btn-custom btn-lg page-scroll">Learn More</a> </div>
                    </div>
                </div>
            </div>

        </div>


    </header>

<!-- Properties section -->
    <section class="properties-section spad">
        <div class="container" id="services">
            <div class="section-title text-center">
                <h3> PROPERTIES</h3>
                <p>Discover how much the latest properties have been sold for</p>
            </div>
            <div class="row">
                <?php 
                    $property = "";
                    while($row = mysqli_fetch_array($result)){
                        $property .= "<div class='col-md-6'>
                    <div class='propertie-item set-bg' data-setbg='img/thane1.jpg'>
                        <div class='sale-notic'>FOR SALE</div>
                        <div class='propertie-info text-white'>
                            <div class='info-warp'>
                                <h5>".$row["name"]."</h5>
                            </div>
                            
                            <button type='button' class='price'> <a href='asher.php?id=".$row["id"]."'>".$row["price"]."</a></button>
                        </div>
                    </div>
                </div>";
                    }
                    echo $property;
                ?>
            </div>
        </div>
    </section>
    <!-- Properties section end -->
    <!-- About Section -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6"> <img src="img/work1.jpg" class="img-responsive" alt=""> </div>
                <div class="col-xs-12 col-md-6">
                    <div class="about-text">
                        <h2>Who We Are</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <h3>Why Choose Us?</h3>
                        <div class="list-style">
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <ul>
                                    <li>Years of Experience</li>
                                    <li>Fully Insured</li>
                                    <li>Cost Control Experts</li>
                                    <li>100% Satisfaction Guarantee</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <ul>
                                    <li>Free Consultation</li>
                                    <li>Satisfied Customers</li>
                                    <li>Renting and Selling</li>
                                    <li>Affordable Pricing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section
    <div id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-media"> <img src="img/newhome.jpg" alt=" "> </div>
                    <div class="service-desc">
                        <h3>New Home Construction</h3>
                        <p>You can dream, create, design, and build the most wonderful place in the world. But it requires people to make the dream a reality. Good buildings come from good people, and all problems are solved by good design.”</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-media"> <img src="img/homeadd.jpg" alt=" "> </div>
                    <div class="service-desc">
                        <h3>Home Additions</h3>
                        <p>Remodeling a home is a big undertaking, but a well-planned home addition will pay for itself time and time again. Boost your home's value and extend its square footage with an impactful home addition.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-media"> <img src="img/bathre.jpg" alt=" "> </div>
                    <div class="service-desc">
                        <h3>Bathroom Remodels</h3>
                        <p>A renovated bathroom adds value to your home, updates its style, and makes it better adapted to your current needs. Renovations are the best time to introduce improvements that will serve you and your family for years to come.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-media"> <img src="img/kitchen.jpg" alt=" "> </div>
                    <div class="service-desc">
                        <h3>Kitchen Remodels</h3>
                        <p>Whether your kitchen is large or small, ample storage is always a selling point. Take advantage of unclaimed wall or corner space with open shelves to keep dishes, spices, and cookware within easy reach.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-media"> <img src="img/window.jpg" alt=" "> </div>
                    <div class="service-desc">
                        <h3>Windows & Doors</h3>
                        <p>You have the nicest window, you know? None of the others can even compete. It's not flashy like the others, or bleary—your window gives off this nice, quiet light.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-media"> <img src="img/decks.jpg" alt=" "> </div>
                    <div class="service-desc">
                        <h3>Decks & Porches</h3>
                        <p>A porch is generally positioned in the front of your home and it is usually a sheltered area where your guests can stand before coming into your home.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    







    <!-- Gallery Section -->
    <div id="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>Our Works</h2>
            </div>
            <div class="row">
                <div class="portfolio-items">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="img/portfolio/01-large.jpg" title="Housing" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Housing</h4>
                                        <p>A property description is the written portion of a real estate listing that describes the details of a home for sale or lease.</p>
                                    </div>
                                    <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="img/portfolio/02-large.jpg" title="Adipiscing Elit" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Adipiscing Elit</h4>
                                        <p>A property description is the written portion of a real estate listing that describes the details of a home for sale or lease.</p>
                                    </div>
                                    <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="img/portfolio/03-large.jpg" title="Housing" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Housing</h4>
                                        <p>A property description is the written portion of a real estate listing that describes the details of a home for sale or lease.</p>
                                    </div>
                                    <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="img/portfolio/04-large.jpg" title="Selling and Rent" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Selling and Rent</h4>
                                        <p>A property description is the written portion of a real estate listing that describes the details of a home for sale or lease.</p>
                                    </div>
                                    <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="img/portfolio/05-large.jpg" title="Adipiscing Elit" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Adipiscing Elit</h4>
                                        <p>A property description is the written portion of a real estate listing that describes the details of a home for sale or lease.</p>
                                    </div>
                                    <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="img/portfolio/06-large.jpg" title="Dolor Sit" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Dolor Sit</h4>
                                        <p>A property description is the written portion of a real estate listing that describes the details of a home for sale or lease.</p>
                                    </div>
                                    <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="img/portfolio/07-large.jpg" title="Dolor Sit" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Dolor Sit</h4>
                                        <p>A property description is the written portion of a real estate listing that describes the details of a home for sale or lease.</p>
                                    </div>
                                    <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="img/portfolio/08-large.jpg" title="Housing" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Housing</h4>
                                        A property description is the written portion of a real estate listing that describes the details of a home for sale or lease.
                                    </div>
                                    <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="img/portfolio/09-large.jpg" title="Adipiscing Elit" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Adipiscing Elit</h4>
                                        <p>A property description is the written portion of a real estate listing that describes the details of a home for sale or lease.</p>
                                    </div>
                                    <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials Section -->
    <div id="fh5co-testimonial">
        <div class="container" id="testimonials">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
                    <h2>Happy Clients</h2><br>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                </div>
                <br>
                <div class="col-md-4 text-center item-block animate-box" data-animate-effect="fadeIn">
                    <blockquote>
                        <p>&ldquo; She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove,
                            the headline of. &rdquo;</p>
                        <p><span class="fh5co-author"><cite>Jason Davidson</cite></span><i class="icon twitter-color icon-twitter pull-right"></i></p>

                    </blockquote>
                </div>
                <div class="col-md-4 text-center item-block animate-box" data-animate-effect="fadeIn">
                    <blockquote>
                        <p>&ldquo; Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. She had a last view back on the skyline of her hometown Bookmarksgrove, the headline
                            of. &rdquo;</p>
                        <p><span class="fh5co-author"><cite>Kyle Smith</cite></span><i class="icon googleplus-color icon-google-plus pull-right"></i></p>
                    </blockquote>
                </div>
                <div class="col-md-4 text-center item-block animate-box" data-animate-effect="fadeIn">

                    <blockquote>
                        <p>&ldquo; The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She had a last view back on the skyline of her hometown
                            Bookmarksgrove. &rdquo;</p>
                        <p><span class="fh5co-author"><cite>Rick Cook</cite></span><i class="icon facebook-color icon-facebook pull-right"></i></p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Section -->
    <div id="footer">
        <div class="container text-center">
            <p>&copy; 2020 ABCDE2. Design by <a href="index.html" rel="nofollow">2020</a></p>
        </div>
    </div>
    <script type="text/javascript" src="/realestate1/js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="/realestate1/js/bootstrap.js"></script>
    <script type="text/javascript" src="/realestate1/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="/realestate1/js/nivo-lightbox.js"></script>
    <script type="text/javascript" src="/realestate1/js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="/realestate1/js/contact_me.js"></script>
    <script type="text/javascript" src="/realestate1/js/main.js"></script>


    <!--====== Javascripts & Jquery ======-->
    <script src="/realestate1/js/jquery-3.2.1.min.js"></script>
    <script src="/realestate1/js/bootstrap.min.js"></script>
    <script src="/realestate1/js/owl.carousel.min.js"></script>
    <script src="/realestate1/js/masonry.pkgd.min.js"></script>
    <script src="/realestate1/js/magnific-popup.min.js"></script>
    <script src="/realestate1/js/main1.js"></script>
</body>

</html>