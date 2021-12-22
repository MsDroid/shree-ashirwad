<?php 
$curStr=$_SERVER['REQUEST_URI'];
$curArr=explode('/',$curStr);
$cur_path=$curArr[count($curArr)-1];
// echo $cur_path;

$page_title='';
if($cur_path=='' || $cur_path=='index.php'){
  $page_title='Shree Ashirwad - Packers &amp; Movers in Ranchi';
}elseif($cur_path=='about-us.php'){
  $page_title='Shree Ashirwad - About-Us';
}elseif($cur_path=='branches.php'){
  $page_title='Shree Ashirwad - Branches';
}elseif($cur_path=='packing-service.php'){
  $page_title='Shree Ashirwad - Packing Service';
}elseif($cur_path=='moving-service.php'){
  $page_title='Shree Ashirwad - Moving Service';
}elseif($cur_path=='internation-moving-service.php'){
  $page_title='Shree Ashirwad - International Moving Service';
}elseif($cur_path=='car-carrier-service.php'){
  $page_title='Shree Ashirwad - Car Carrier Service';
}elseif($cur_path=='loading-and-unloading-service.php'){
  $page_title='Shree Ashirwad - Loading And Unloading Service';
}elseif($cur_path=='transport-service.php'){
  $page_title='Shree Ashirwad - Transport Service';  
}elseif($cur_path=='warehousing-service.php'){
  $page_title='Shree Ashirwad - Warehousing Service';
}elseif($cur_path=='unpacking-service.php'){
  $page_title='Shree Ashirwad - Unpacking Service';
}elseif($cur_path=='courier-service.php'){
  $page_title='Shree Ashirwad - Courier Service';
}elseif($cur_path=='transit-service.php'){
  $page_title='Shree Ashirwad - Transit Service';
}elseif($cur_path=='gallery.php'){
  $page_title='Shree Ashirwad - Gallery';
}elseif($cur_path=='our-client.php'){
  $page_title='Shree Ashirwad - Our Client';
}elseif($cur_path=='contact-us.php'){
  $page_title='Shree Ashirwad - Contact Us';
}
?>

<!doctype html>
    <html lang="zxx">

    <!-- Mirrored from templates.envytheme.com/Shree Ashirwad/default/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Oct 2021 10:42:33 GMT -->
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

        <link rel="stylesheet" href="assets/css/remixicon.css">

        <link rel="stylesheet" href="assets/css/flaticon.css">

        <link rel="stylesheet" href="assets/css/meanmenu.min.css">

        <link rel="stylesheet" href="assets/css/animate.min.css">

        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">

        <link rel="stylesheet" href="assets/css/odometer.min.css">

        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="assets/css/responsive.css">

        <link rel="icon" type="image/png" href="favicon.png">
        <!-- <link rel="icon" type="image/png" href="assets/images/favicon.png"> -->

        <title><?php echo $page_title; ?></title>

        <meta name="description" content="Shree Ashirwad Delivers Best Service for Car, Bike, House Packing and moving solutions. {Shree Ashirwad - Packers &amp; Movers in Ranchi}">
        
        <meta name="keywords"
        content="Shree Ashirwad, cargo, chain supply, company, corporate, expedition, freight, packaging, services, shipping, transport, transportation, trucking, warehousing">
        <style>
        body, h1, h2, h3, h4, h5, h6, div, p, span, button, a, label, table, tr, td, th{
          font-family: "Montserrat",Sans-Serif !Important;
      }
      #f{color: #313030;
        font-size: 14px;
        background: #fff;
    }
    #f .footer-top {
        padding: 60px 0 30px;
        /*background: rgb(35,33,53);*/
    }
    .mtb {
        margin-top: 35px;
        margin-bottom: 35px;
    }
    .mt {
        margin-top: 25px;
    }
    #f .footer-top h4 {
        font-size: 16px;
        font-weight: 700;
        color: rgb(247,102,73);
        position: relative;
        padding-bottom: 12px;
    }
    .navbg2 {
        background: none;
        border: none;
        border-radius: 0;
        width: 100%;
        height: 160px;
        margin-bottom: 20px;
        overflow-y: scroll;
        overflow-x: hidden;
    }
    .mr5{
        margin-right: 5px;
    }
    .content p {
    font-weight: 500!important;
    color: ##0e0e0e9e!important;
    line-height: 1.5!important;
    overflow-x: hidden!important;
    letter-spacing: 1px!important;
}
</style>
</head>
<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="pl-spark-1 pl-spark-2"></div>
        </div>
    </div>


    <header class="header-area">

        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <ul class="header-left-content">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header-right-content">
                            <!-- <ul class="my-account">
                                <li>
                                    <a href="#" class="dropdown-control">
                                        <i class="ri-user-line"></i>
                                        My account
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="my-account-link">
                                        <li>
                                            <a href="my-account.php">My Account</a>
                                        </li>
                                        <li>
                                            <a href="log-in.php">Log In</a>
                                        </li>
                                        <li>
                                            <a href="register.php">Register</a>
                                        </li>
                                        <li>
                                            <a href="request-quote.php">Request Quote</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> -->
                            <!-- <div class="languages-switcher">
                                <i class="ri-global-line"></i>
                                <select>
                                    <option value="1">English</option>
                                    <option value="2">العربيّة</option>
                                    <option value="3">Deutsch</option>
                                    <option value="4">Português</option>
                                    <option value="5">简体中文</option>
                                </select>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="navbar-area">
            <div class="mobile-responsive-nav">
                <div class="container">
                    <div class="mobile-responsive-menu">
                        <div class="logo">
                            <a href="index.php">
                                <img src="logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="desktop-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="logo.png" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        Home
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                     <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.php" class="nav-link active">Home One</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2.php" class="nav-link">Home Two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.php" class="nav-link">Home Three</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-4.php" class="nav-link">Home Four</a>
                                        </li>
                                    </ul> 
                                </li> -->
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.php" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Services
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <!--  <li class="nav-item">
                                            <a href="services.php" class="nav-link">Packing Services</a>
                                        </li> -->
                                        <li>
                                            <a class="dropdown-item" href="packing-service.php">
                                                <img class="mr5" src="assets/icons/01_packing.svg" width="25" height="25">Packing Services
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="moving-service.php">
                                                <img class="mr5" src="assets/icons/moving.svg" width="25" height="25">Moving Services
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="internation-moving-service.php">
                                                <img class="mr5" src="assets/icons/air-transportation.svg" width="25" height="25">International Moving Services
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="car-carrier-service.php">
                                                <img class="mr5" src="assets/icons/car_transportation.svg" width="25" height="25">Car Carrier Services
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="loading-and-unloading-service.php"><img class="mr5" src="assets/icons/loading_unloading.svg" width="25" height="25">Loading & Unloading Services</a></li>
                                        <li><a class="dropdown-item" href="transport-service.php"><img class="mr5" src="assets/icons/transportation.svg" width="25" height="25">Transport Service</a></li>
                                        <li><a class="dropdown-item" href="warehousing-service.php"><img class="mr5" src="assets/icons/warehouse.svg" width="25" height="25">Warehousing Services</a></li>
                                        <li><a class="dropdown-item" href="unpacking-service.php"><img class="mr5" src="assets/icons/unpacking.svg" width="25" height="25">Unpacking Services</a></li>
                                        <li><a class="dropdown-item" href="courier-service.php"><img class="mr5" src="assets/icons/courier.svg" width="25" height="25">Courier Services</a></li>
                                        <li><a class="dropdown-item" href="transit-service.php"><img class="mr5" src="assets/icons/insurance.svg" width="25" height="25">Transit Insurance</a></li><li><a class="dropdown-item" href="packing-service.php"><img class="mr5" src="assets/icons/01_packing.svg" width="25" height="25">Packing Services</a></li>
                                        <li><a class="dropdown-item" href="moving-service.php"><img class="mr5" src="assets/icons/moving.svg" width="25" height="25">Moving Services</a></li>
                                        <li><a class="dropdown-item" href="internation-moving-service.php"><img class="mr5" src="assets/icons/air-transportation.svg" width="25" height="25">International Moving Services</a></li>
                                        <li><a class="dropdown-item" href="car-carrier-service.php"><img class="mr5" src="assets/icons/car_transportation.svg" width="25" height="25">Car Carrier Services</a></li>
                                        <li><a class="dropdown-item" href="loading-and-unloading-service.php"><img class="mr5" src="assets/icons/loading_unloading.svg" width="25" height="25">Loading And Unloading Services</a></li>
                                        <li><a class="dropdown-item" href="transport-service.php"><img class="mr5" src="assets/icons/transportation.svg" width="25" height="25">Transport Service</a></li>
                                        <li><a class="dropdown-item" href="warehousing-service.php"><img class="mr5" src="assets/icons/warehouse.svg" width="25" height="25">Warehousing Services</a></li>
                                        <li><a class="dropdown-item" href="unpacking-service.php"><img class="mr5" src="assets/icons/unpacking.svg" width="25" height="25">Unpacking Services</a></li>
                                        <li><a class="dropdown-item" href="courier-service.php"><img class="mr5" src="assets/icons/courier.svg" width="25" height="25">Courier Services</a></li>
                                        <li><a class="dropdown-item" href="transit-service.php"><img class="mr5" src="assets/icons/insurance.svg" width="25" height="25">Transit Insurance</a></li>
                                    </ul>
                                </li>
                              <!--   <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Pages
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="team.php" class="nav-link">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pricing.php" class="nav-link">Pricing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="gallery.php" class="nav-link">Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faq.php" class="nav-link">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                User
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="my-account.php" class="nav-link">My Account</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="log-in.php" class="nav-link">Log In</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="register.php" class="nav-link">Register</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="request-quote.php" class="nav-link">Request A Quote</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="testimonials.php" class="nav-link">Testimonials </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="privacy-policy.php" class="nav-link">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="terms-conditions.php" class="nav-link">Terms & Conditions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="partner-details.php" class="nav-link">Partner Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="coming-soon.php" class="nav-link">Coming Soon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="404.php" class="nav-link">404 Page</a>
                                        </li>
                                    </ul>
                                </li> -->
                               <!--  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog.php" class="nav-link">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.php" class="nav-link">Blog Details</a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link">Contact</a>
                                </li>
                            </ul>
                            <div class="others-options">
                                <ul>
                                    <!-- <li>
                                        <div class="option-item">
                                            <i class="search-btn ri-search-line"></i>
                                            <i class="close-btn ri-close-line"></i>
                                            <div class="search-overlay search-popup">
                                                <div class='search-box'>
                                                    <form class="search-form">
                                                        <input class="search-input" name="search" placeholder="Search" type="text">
                                                        <button class="search-button" type="submit">
                                                            <i class="ri-search-line"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li> -->
                                    <li>
                                        <a href="tel:+91-8409531615" class="default-btn">
                                            <span>
                                                +91 8409531615
                                                <i class="ri-phone-fill"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-option justify-content-center d-flex align-items-center">
                                <ul>
                                    <li>
                                        <div class="option-item">
                                            <i class="search-btn ri-search-line"></i>
                                            <i class="close-btn ri-close-line"></i>
                                            <div class="search-overlay search-popup">
                                                <div class='search-box'>
                                                    <form class="search-form">
                                                        <input class="search-input" name="search" placeholder="Search" type="text">
                                                        <button class="search-button" type="submit">
                                                            <i class="ri-search-line"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="tel:+91-8409531615" class="default-btn">
                                            <span>
                                                +91 8409531615
                                                <i class="ri-phone-fill"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

