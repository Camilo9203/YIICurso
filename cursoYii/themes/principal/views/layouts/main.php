<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="es">
<head
    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="es">>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- SITE TITLE -->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/favicon.png" type="image/x-icon">

    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/bootstrap/css/bootstrap.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/fonts/font-awesome.css">
    <!--magnific-popup Css-->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/magnific-popup.css">
    <!--animate Css-->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/animate.css">
    <!--slick Css-->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/slick.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't gallery if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
<!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- START PRELOADER -->
    <div class="atf-preloader">
        <div class="atf-status">
            <div class="atf-status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->
    <!-- START back-to-top -->
    <button class="atf-scroll-top atf-back-to-top" data-targets="html">
        <i class="fa fa-angle-up atf-scrollup-icon"></i>
    </button>
    <!-- END back-to-top-->
    <!-- Start Header Section -->
    <header class="atf-site-header atf-style1 atf-sticky-header">
        <div class="atf-top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="atf-top-header-in wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                            <ul class="atf-top-header-list">
                                <li><i class="fas fa-envelope"></i>Email: <a href="#">example@gmail.com</a></li>
                                <li><i class="fas fa-phone-volume"></i>Contact: <a href="#">000-1112-2221 </a></li>
                            </ul>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-4 col-md-4">
                        <div class="nav-right-part nav-right-part-desktop">
                            <ul>
                                <li><a class="search header-search" href="#"><i class="fa fa-search"></i></a></li>
                                <li class=""><a class="login-btn" href="#">Login</a></li>
                                <li><a class="shopping-cart-btn" href="#"><i class="fa fa-shopping-cart"></i><span>2</span></a></li>
                            </ul>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->
        </div><!--- END TOP HEADER -->

        <div class="atf-main-header">
            <div class="container">
                <div class="atf-main-header-in">
                    <div class="atf-main-header-left">
                        <a class="atf-site-branding atf-white-logo" href="<?php echo Yii::app()->request->baseUrl; ?>">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logo.png" alt="Logo">
                        </a>
                    </div>

                    <div class="nav-right-part nav-right-part-mobile">
                        <ul>
                            <li><a class="search header-search" href="#"><i class="fa fa-search"></i></a></li>
                            <li class=""><a class="login-btn" href="#">Login</a></li>
                            <li><a class="shopping-cart-btn" href="#"><i class="fa fa-shopping-cart"></i><span>2</span></a></li>
                        </ul>
                    </div>

                    <div class="atf-main-header-right">
                        <div class="atf-nav">
                            <div id="mainmenu">
                                <?php $this->widget('zii.widgets.CMenu',array(
                                    'htmlOptions' => array("class" => "atf-nav-list atf-onepage-nav"),
                                    'items'=>array(
                                        array('label'=>'Home', 'url'=>array('/site/index')),
                                        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                                        array('label'=>'Contact', 'url'=>array('/site/contact')),
                                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                                    ),
                                )); ?>
                            </div><!-- mainmenu -->
                        </div>
                    </div><!--- END MAIN HEADER RIGHT -->
                </div>
            </div><!--- END CONTAINER -->
        </div><!--- END MAIN HEADER -->
    </header>
    <!-- End Header Section -->

    <?php echo $content ?>
    
    <!-- FOOTER SECTION START-->
    <footer class="atf-footer-area atf-pattern-area">
        <div class="container">
            <div class="atf-footer-top mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                        <div class="atf-footer-box">
                            <h5><a href=""><img class="atf-footer-logo" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logo.png" alt="" /></a></h5>
                            <ul class="pr-lg-5">
                                <li>1 Grafton Street, Dublin, Ireland</li>
                                <li>(+222) 245 88 <br> (+258) 878 369</li>
                                <li>example@gmail.com</li>
                            </ul>
                        </div>
                    </div><!--- END COL -->

                    <div class="col-lg-2 col-md-6 col-12 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                        <h5>Quick Links</h5>
                        <ul class="atf-list-menu">
                            <li> <a href="#"><i class="fas fa-angle-right mr-2"></i>Get Stared</a></li>
                            <li> <a href="#"><i class="fas fa-angle-right mr-2"></i>Our Team</a></li>
                            <li> <a href="#"><i class="fas fa-angle-right mr-2"></i>About Us</a></li>
                            <li> <a href="#"><i class="fas fa-angle-right mr-2"></i>Need Helps</a></li>
                            <li> <a href="#"><i class="fas fa-angle-right mr-2"></i>Contact Us</a></li>
                        </ul>
                    </div><!--- END COL -->

                    <div class="col-lg-2 col-md-6 col-12 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
                        <h5>Support Links</h5>
                        <ul class="atf-list-menu">
                            <li><a href="#"><i class="fas fa-angle-right mr-2"></i>Our Terms</a></li>
                            <li><a href="#"><i class="fas fa-angle-right mr-2"></i>Our Service</a></li>
                            <li><a href="#"><i class="fas fa-angle-right mr-2"></i>Privacy Policy</a></li>
                            <li><a href="#"><i class="fas fa-angle-right mr-2"></i>Licenses</a></li>
                            <li><a href="#"><i class="fas fa-angle-right mr-2"></i>Our News</a></li>
                        </ul>
                    </div><!--- END COL -->

                    <div class="col-lg-4 col-md-6 col-12 atf-footer-link text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
                        <h5>Contact Us</h5>
                        <div class="atf-footer-con">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Maecenas gravida nulla.</p>
                        </div>
                        <h4 class="text-white mt-2">Follow Us</h4>
                        <div class="atf-footer-social-icon mt-3 text-left">
                            <a href="#" class="icon"> <i class="fab fa-facebook"></i> </a>
                            <a href="#" class="icon"> <i class="fab fa-dribbble"></i> </a>
                            <a href="#" class="icon"> <i class="fab fa-behance"></i> </a>
                            <a href="#" class="icon"> <i class="fab fa-linkedin"></i> </a>
                            <a href="#" class="icon"> <i class="fab fa-twitter"></i> </a>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
            </div><!--- END SINGLE FOOTER -->
        </div><!--- END CONTAINER -->

        <div class="atf-footer-boottom mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xl-5 col-12 my-auto text-lg-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                        <p>&copy;Copyright - All Right Reserved.Designed <i class="fa fa-heart ml-1 mr-1"></i> by <a href="#">Theme Family</a> </p>
                    </div><!--- END COL -->

                    <div class="col-lg-7 col-xl-7 col-12">
                        <div class="atf-payment-area text-lg-right my-auto mx-auto">
                            <ul>
                                <li><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/payment/1.png" alt="img"></a></li>
                                <li><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/payment/2.png" alt="img"></a></li>
                                <li><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/payment/3.png" alt="img"></a></li>
                                <li><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/payment/1.png" alt="img"></a></li>
                                <li><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/payment/2.png" alt="img"></a></li>
                                <li><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/payment/3.png" alt="img"></a></li>
                            </ul>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
            </div>
        </div>
        <!-- FOOTER SECTION END-->
    </footer><!--- END FOOTER -->
</div>
<!-- PAGE WRAPPER END-->
<!-- Latest compiled and minified Bootstrap -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/bootstrap/js/bootstrap.js"></script>
<!-- modernizer JS -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/modernizr.custom.js"></script>
<!-- magnific-popup js -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.magnific-popup.js"></script>
<!-- stellar js -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.stellar.min.js"></script>
<!-- slick js -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/slick.js"></script>
<!-- countdown js -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.countdown.js"></script>
<!-- wow js -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/wow.min.js"></script>
<!-- ajaxchimp js -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/ajaxchimp.min.js"></script>
<!-- form-contact js -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/form-contact.js"></script>
<!-- main js -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/main.js"></script>

</body>
</html>