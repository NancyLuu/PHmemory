<?php

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>澎湖島嶼生活記憶</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="">

    <!--Google Fonts link-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/fonticons.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootsnav.css">
    <link rel="stylesheet" href="assets/css/PHstyle.css">


    <!--For Plugins external css-->
    <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <script src="assets/js/md5.min.js"></script>
    
    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar-collapse">


    <!-- Preloader -->

    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
            </div>
        </div>
    </div>

    <!--End off Preloader -->


    <div class="culmn">
        <!--Home page style-->


        <nav class="navbar navbar-default navbar-fixed no-background bootsnav text-uppercase">
            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">
                <!-- Start Atribute Navigation -->

                <!--<div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>-->

                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#">
                        <h3 class="text-uppercase">澎湖島嶼生活記憶</h3>
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse bg-drak" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        
                        <li><a href="login.php">登入</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>


        </nav>


        <!--Home Sections-->

        <section id="company" class="company bg-light">
            <div class="container">
                <div class="row">
                    <div class="main_company roomy-40 text-center">

                    </div>
                </div>
            </div>
        </section>

        <!--Home Sections-->

        <!--Blog Features Section-->
        <section id="blog_details" class="blog_details roomy-100">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <form name="sentMessage" id="" novalidate>
                            <div class="col-sm-10 col-sm-offset-1">
                                <h2>上傳空間資料</h2>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>帳號:</label>
                                        <input type="text" class="form-control" id="userId" required=""
                                            data-validation-required-message="Please enter your account.">
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>密碼:</label>
                                        <input type="password" class="form-control" id="userPw" required=""
                                            data-validation-required-message="Please enter your passward.">
                                    </div>
                                </div>
                                <div class="right">
                                    <button type="submit" class="btn btn-default" onclick="login()">登入</button>

                                </div>

                        </form>
                    </div><!-- End off col-md-4 -->

                </div><!-- End off row -->

            </div><!-- End off container -->
        </section><!-- End off blog Fashion -->

        <!-- map section-->
        <div id="map" class="map">
            <div class="ourmap"></div>
        </div><!-- End off Map section-->

        <!-- scroll up-->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div><!-- End off scroll up -->

        <footer id="footer" class="footer bg-mega">
            <div class="container">
                <div class="row">
                    <div class="main_footer p-top-40 p-bottom-30">
                        <div class="col-md-6 text-left sm-text-center">
                            <p class="wow fadeInRight" data-wow-duration="1s">
                                | Copyright © 2019 · IDELab, NPU |
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- JS includes -->

    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.collapse.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/PHmain.js"></script>


    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/jquery.tx3-tag-cloud.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/api/api_login.js"></script>

</body>

</html>