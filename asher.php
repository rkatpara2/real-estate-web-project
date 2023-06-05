<?php
    session_start();
    $username = "";
    include("dbconnection.php");
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    $id = $_REQUEST["id"];
    $qry = "SELECT * from property where id = '$id'";
    $result = mysqli_query($con,$qry);
    $row = mysqli_fetch_array($result);
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
                <a class="navbar-brand page-scroll" href="#page-top">D-Homi</a>
                <div class="phone"><span>Call Today</span>+91 996-985-9857</div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" class="page-scroll">Home</a></li>
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
                            <h1><?php echo $row["name"]; ?></h1>
                            <p>Property Name</p>
                            <!-- <a href="#about" class="btn btn-custom btn-lg page-scroll">Learn More</a> </div> -->
                        </div>
                    </div>
                </div>
            </div>
    </header>




    <!-- Page top section -->
    <!-- <section class="page-top-section set-bg" data-setbg="img/thane1.jpg">
        <div class="container text-white">
            <h2>Ashar Edge</h2>
        </div>
    </section> -->
    <!--  Page top end -->

    <!-- Breadcrumb -->
    <div class="site-breadcrumb">
        <div class="container">
            <a href="index.php"><i class="fa fa-home"></i>Home</a>
            <span><i class="fa fa-angle-right"></i><?php echo $row["name"]; ?></span>
        </div>
    </div>

    <!-- Page -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 single-list-page">
                    <div class="single-list-slider owl-carousel" id="sl-slider">
                        <div class="sl-item set-bg" data-setbg="img/thane1.jpg">
                            <!-- <div class="sale-notic">FOR SALE</div> -->
                        </div>
                        <div class="sl-item set-bg" data-setbg="img/thane3.jpg">
                            <!-- <div class="rent-notic">FOR Rent</div> -->
                        </div>
                        <div class="sl-item set-bg" data-setbg="img/thane4.jpg">
                            <!-- <div class="sale-notic">FOR SALE</div> -->
                        </div>
                        <div class="sl-item set-bg" data-setbg="img/thane5.jpg">
                            <!-- <div class="rent-notic">FOR Rent</div> -->
                        </div>
                        <div class="sl-item set-bg" data-setbg="img/thane6.jpg">
                            <!-- <div class="sale-notic">FOR SALE</div> -->
                        </div>
                    </div>
                    <div class="owl-carousel sl-thumb-slider" id="sl-slider-thumb">
                        <div class="sl-thumb set-bg" data-setbg="img/thane1.jpg"></div>
                        <div class="sl-thumb set-bg" data-setbg="img/thane3.jpg"></div>
                        <div class="sl-thumb set-bg" data-setbg="img/thane4.jpg"></div>
                        <div class="sl-thumb set-bg" data-setbg="img/thane5.jpg"></div>
                        <div class="sl-thumb set-bg" data-setbg="img/thane6.jpg"></div>
                    </div>
                    <div class="single-list-content">
                        <div class="row">
                            <div class="col-xl-8 sl-title">
                                <h2><?php echo $row["name"]; ?></h2>
                                <p><i class="fa fa-map-marker"></i><?php echo $row["address"]; ?></p>
                            </div>
                            <div class="col-xl-4">
                                <a href="#" class="price-btn"><?php echo $row["price"]; ?></a>
                            </div>
                        </div>
                        <h3 class="sl-sp-title">Property Details</h3>
                        <div class="row property-details-list">
                            <div class="col-md-4 col-sm-6">
                                <p><i class="fa fa-th-large"></i> <?php echo $row["area"]; ?></p>
                                <p><i class="fa fa-bed"></i> <?php echo $row["bedroom"]; ?> Bedrooms</p>
                                <p><i class="fa fa-user"></i> ABC EFGH</p>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <p><i class="fa fa-car"></i> Parking</p>
                                <p><i class="fa fa-building-o"></i> Building Name</p>
                                <!-- <p><i class="fa fa-clock-o"></i> 1 days ago</p> -->
                            </div>
                            <div class="col-md-4">
                                <p><i class="fa fa-bath"></i><?php echo $row["bathroom"]; ?> Bathrooms</p>
                                <!-- <p><i class="fa fa-trophy"></i> 5 years age</p> -->
                            </div>
                        </div>
                        <h3 class="sl-sp-title">Description</h3>
                        <div class="description">
                            <p><?php echo $row["description"]; ?></p>
                        </div>
                        <h3 class="sl-sp-title">Property Details</h3>
                        <div class="row property-details-list">
                            <div class="col-md-4 col-sm-6">
                                <p><i class="fa fa-check-circle-o"></i> Air conditioning</p>
                                <p><i class="fa fa-check-circle-o"></i> Telephone</p>
                                <p><i class="fa fa-check-circle-o"></i> Laundry Room</p>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <p><i class="fa fa-check-circle-o"></i> Central Heating</p>
                                <p><i class="fa fa-check-circle-o"></i> Family Villa</p>
                                <p><i class="fa fa-check-circle-o"></i> Metro Central</p>
                            </div>
                            <div class="col-md-4">
                                <p><i class="fa fa-check-circle-o"></i> City views</p>
                                <p><i class="fa fa-check-circle-o"></i> Internet</p>
                                <p><i class="fa fa-check-circle-o"></i> Electric Range</p>
                            </div>
                        </div>
                        <h3 class="sl-sp-title bd-no">Floorplans</h3>
                        <div id="accordion" class="plan-accordion">
                            <div class="panel">
                                <div class="panel-header" id="headingOne">
                                    <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">First Floor: <span>660 sq ft</span>	<i class="fa fa-angle-down"></i></button>
                                </div>
                                <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="panel-body">
                                        <img src="img/plan-sketch.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-header" id="headingTwo">
                                    <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Second Floor:<span>610 sq ft.</span>	<i class="fa fa-angle-down"></i>
                                </button>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="panel-body">
                                        <img src="img/plan-sketch.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-header" id="headingThree">
                                    <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Third Floor :<span>580 sq ft</span>	<i class="fa fa-angle-down"></i>
                                </button>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="panel-body">
                                        <img src="img/plan-sketch.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-lg-4 col-md-7 sidebar">
                    <div class="author-card">
                        <div class="author-img set-bg" data-setbg="img/author.jpg"></div>
                        <div class="author-info">
                            <h5>ABC PQR</h5>
                            <p>Real Estate Agent</p>
                        </div>
                        <div class="author-contact">
                            <p><i class="fa fa-phone"></i>(+91) 985 356 3569</p>
                            <p><i class="fa fa-envelope"></i>abc12@gmail.com</p>
                        </div>
                    </div>
                    <!-- <div class="contact-form-card">
                        <h5>Do you have any question?</h5>
                        <form>
                            <input type="text" placeholder="Your name">
                            <input type="text" placeholder="Your email">
                            <textarea placeholder="Your question"></textarea>
                            <button>SEND</button>
                        </form>
                    </div> -->
                    <div class="related-properties">
                        <h2>Related Property</h2>
                        <div class="rp-item">
                            <div class="rp-pic set-bg" data-setbg="img/thane.jpg">
                                <div class="sale-notic">FOR SALE</div>
                            </div>
                            <div class="rp-info">
                                <h5>73 East - Kandivali (West)</h5>
                                <p><i class="fa fa-map-marker"></i>Andheri-Dahisar, Mumbai</p>
                            </div>
                            <a href="#" class="rp-price">2.75 Lac - 3.75 Lac</a>
                        </div>
                        <div class="rp-item">
                            <div class="rp-pic set-bg" data-setbg="img/goregoan.jpg">
                                <div class="rent-notic">FOR Rent</div>
                            </div>
                            <div class="rp-info">
                                <h5>Aspen Garden - Goregoan East</h5>
                                <p><i class="fa fa-map-marker"></i> Andheri-Goregoan, Mumbai</p>
                            </div>
                            <a href="#" class="rp-price">25k - 40k /month</a>
                        </div>
                        <div class="rp-item">
                            <div class="rp-pic set-bg" data-setbg="img/goregoan.jpg">
                                <div class="sale-notic">25k - 40k /month</div>
                            </div>
                            <div class="rp-info">
                                <h5>Aspen Garden - Goregoan East/h5>
                                    <p><i class="fa fa-map-marker"></i>Andheri-Goregoan</p>
                            </div>
                            <a href="#" class="rp-price">$5,600,000</a>
                        </div>
                        <div class="rp-item">
                            <div class="rp-pic set-bg" data-setbg="img/thane2.jpg">
                                <div class="rent-notic">FOR Rent</div>
                            </div>
                            <div class="rp-info">
                                <h5>25k - 40k /month</h5>
                                <p><i class="fa fa-map-marker"></i>750 N King Road</p>
                            </div>
                            <a href="#" class="rp-price">$1,600/month</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page end -->


    <!-- Clients section -->
    <!-- <div class="clients-section">
        <div class="container">
            <div class="clients-slider owl-carousel">
                <a href="#">
                    <img src="img/partner/1.png" alt="">
                </a>
                <a href="#">
                    <img src="img/partner/2.png" alt="">
                </a>
                <a href="#">
                    <img src="img/partner/3.png" alt="">
                </a>
                <a href="#">
                    <img src="img/partner/4.png" alt="">
                </a>
                <a href="#">
                    <img src="img/partner/5.png" alt="">
                </a>
            </div>
        </div>
    </div> -->
    <!-- Clients section end -->




    <!-- load for map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
    <script src="js/map-2.js"></script>

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
    <script src="/realestate/js/jquery-3.2.1.min.js"></script>
    <script src="/realestate/js/bootstrap.min.js"></script>
    <script src="/realestate/js/owl.carousel.min.js"></script>
    <script src="/realestate/js/masonry.pkgd.min.js"></script>
    <script src="/realestate/js/magnific-popup.min.js"></script>
    <script src="/realestate/js/main1.js"></script>
</body>

</html>