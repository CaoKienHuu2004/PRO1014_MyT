<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign Up || Nuron - NFT Marketplace Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/vendor/odometer.css">

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="template-color-1 nft-body-connect">
    <!-- Start Header -->
    <!-- start header area -->

    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="header-top">
                <div class="logo logo-custom-css">
                    <a class="logo-light" href="index.html"><img src="assets/images/logo/MyT-01.png" alt="nft-logo"></a>
                    <a class="logo-dark" href="index.html"><img src="assets/images/logo/logo_MyT-01.png"
                            alt="nft-logo"></a>
                </div>
                <div class="close-menu">
                    <button class="close-button">
                        <i class="feather-x"></i>
                    </button>
                </div>
            </div>
            <nav>
                <!-- Start Mainmanu Nav -->
                <ul class="mainmenu">
                    <li class="has-menu-child-item">
                        <a href="index.html">Trang chủ</a>

                    </li>
                    <li><a href="about.html">Về chúng tôi</a>
                    </li>
                    <li class="has-menu-child-item">
                        <a href="product.html">Tài nguyên</a>

                    </li>
                    <li><a href="contact.html">Hỗ trợ</a></li>
                </ul>
                <!-- End Mainmanu Nav -->
            </nav>
        </div>
    </div>
    <!-- ENd Header Area -->
    <!-- end header -->
    <!-- start page title area -->
    <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Sign Up</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="index.html">Home</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">Sign Up</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->

    <!-- login form -->
    <div class="login-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="offset-2 col-lg-4 col-md-6 ml_md--0 ml_sm--0 col-sm-12">
                    <div class="form-wrapper-one registration-area">
                        <h4>Sign up</h4>
                        <?php if (isset($_SESSION['thongbao'])): ?>
                            <div class="alert alert-success" role="alert">
                                CD0104
                                <?= $_SESSION['thongbao'] ?>
                            </div>
                        <?php endif;
                        unset($_SESSION['thongbao']); ?>
                        <?php if (isset($_SESSION['loi'])): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_SESSION['loi'] ?>
                            </div>
                        <?php endif;
                        unset($_SESSION['loi']); ?>
                        <form action="" method="post">

                            <div class="mb-5">
                                <label for="username" class="form-label">Full name</label>
                                <input type="username" name="username" id="username">
                            </div>
                            <div class="mb-5">
                                <label for="name_U" class="form-label">Full name</label>
                                <input type="name_U" name="name_U" id="name_U">
                            </div>
                            <div class="mb-5">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="mb-5">
                                <label for="newPassword" class="form-label">Create Password</label>
                                <input type="password" name="password" id="newPassword">
                            </div>
                            <div class="mb-5">
                                <label for="exampleInputPassword1" class="form-label">Re Password</label>
                                <input type="password" name="re-password" id="exampleInputPassword1">
                            </div>
                            <div class="mb-5 rn-check-box">
                                <input type="checkbox" name="check" value="0" class="rn-check-box-input"
                                    id="exampleCheck1">
                                <label class="rn-check-box-label" for="exampleCheck1">Allow to all tearms &
                                    condition</label>
                            </div>
                            <button type="submit" name="submit" name="submit" class="btn btn-primary mr--15">Sign
                                Up</button>
                            <a href="login.html" class="btn btn-primary-alta">Log In</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="social-share-media form-wrapper-one">
                        <h6>Another way to sign up</h6>
                        <p> Lorem ipsum dolor sit, amet sectetur adipisicing elit.cumque.</p>
                        <button class="another-login login-facebook"> <img class="small-image"
                                src="assets/images/icons/google.png" alt=""> <span>Log in with Google</span></button>
                        <button class="another-login login-facebook"> <img class="small-image"
                                src="assets/images/icons/facebook.png" alt=""> <span>Log in with
                                Facebook</span></button>
                        <button class="another-login login-twitter"> <img class="small-image"
                                src="assets/images/icons/tweeter.png" alt=""> <span>Log in with Twitter</span></button>
                        <button class="another-login login-linkedin"> <img class="small-image"
                                src="assets/images/icons/linkedin.png" alt=""> <span>Log in with
                                linkedin</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login form end -->


    <!-- Start Footer Area -->
    <div class="rn-footer-one rn-section-gap bg-color--1 mt--100 mt_md--80 mt_sm--80">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="widget-content-wrapper">
                        <div class="footer-left">
                            <div class="logo-thumbnail logo-custom-css">
                                <a class="logo-light" href="index.html"><img src="assets/images/logo/logo-white.png"
                                        alt="nft-logo"></a>
                                <a class="logo-dark" href="index.html"><img src="assets/images/logo/logo-dark.png"
                                        alt="nft-logo"></a>
                            </div>
                            <p class="rn-footer-describe">
                                Created with the collaboration of over 60 of the world's best Nuron Artists.
                            </p>
                        </div>
                        <div class="widget-bottom mt--40 pt--40">
                            <h6 class="title">Get The Latest Nuron Updates </h6>
                            <div class="input-group">
                                <input type="text" class="form-control bg-color--2" placeholder="Your username"
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary-alta btn-outline-secondary"
                                        type="button">Subscribe</button>
                                </div>
                            </div>
                            <div class="newsletter-dsc">
                                <p>Email is safe. We don't spam.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_mobile--40">
                    <div class="footer-widget widget-quicklink">
                        <h6 class="widget-title">Nuron</h6>
                        <ul class="footer-list-one">
                            <li class="single-list"><a href="#">Protocol Explore</a></li>
                            <li class="single-list"><a href="#">System Token</a></li>
                            <li class="single-list"><a href="#">Otimize Time</a></li>
                            <li class="single-list"><a href="#">Visual Checking</a></li>
                            <li class="single-list"><a href="#">Fadeup System</a></li>
                            <li class="single-list"><a href="#">Activity Log</a></li>
                            <li class="single-list"><a href="#">System Auto Since</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40">
                    <div class="footer-widget widget-information">
                        <h6 class="widget-title">Information</h6>
                        <ul class="footer-list-one">
                            <li class="single-list"><a href="#">Market Explore</a></li>
                            <li class="single-list"><a href="#">Ready Token</a></li>
                            <li class="single-list"><a href="#">Main Option</a></li>
                            <li class="single-list"><a href="#">Product Checking</a></li>
                            <li class="single-list"><a href="blog.html">Blog Grid</a></li>
                            <li class="single-list"><a href="about.html">About Us</a></li>
                            <li class="single-list"><a href="#">Fix Bug </a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40">
                    <div class="footer-widget">
                        <h6 class="widget-title">Recent Sold Out</h6>
                        <ul class="footer-recent-post">
                            <li class="recent-post">
                                <div class="thumbnail">
                                    <a href="product-details.html">
                                        <img src="assets/images/portfolio/portfolio-01.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="product-details.html">#21 The Wonder</a></h6>
                                    <p>Highest bid 1/20</p>
                                    <span class="price">0.244wETH</span>
                                </div>
                            </li>
                            <li class="recent-post">
                                <div class="thumbnail">
                                    <a href="product-details.html">
                                        <img src="assets/images/portfolio/portfolio-02.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="product-details.html">Diamond Dog</a></h6>
                                    <p>Highest bid 1/20</p>
                                    <span class="price">0.022wETH</span>
                                </div>
                            </li>
                            <li class="recent-post">
                                <div class="thumbnail">
                                    <a href="product-details.html">
                                        <img src="assets/images/portfolio/portfolio-03.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="product-details.html">Morgan11</a></h6>
                                    <p>Highest bid 1/20</p>
                                    <span class="price">0.892wETH</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->
    <!-- Start Footer Area -->
    <div class="copy-right-one ptb--20 bg-color--1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="copyright-left">
                        <span>©2022 Nuron, Inc. All rights reserved.</span>
                        <ul class="privacy">
                            <li><a href="terms-condition.html">Terms</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="copyright-right">
                        <ul class="social-copyright">
                            <li><a href="#"><i data-feather="facebook"></i></a></li>
                            <li><a href="#"><i data-feather="twitter"></i></a></li>
                            <li><a href="#"><i data-feather="instagram"></i></a></li>
                            <li><a href="#"><i data-feather="linkedin"></i></a></li>
                            <li><a href="#"><i data-feather="mail"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Start Top To Bottom Area  -->
    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS ============================================ -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <script src="assets/js/vendor/modernizer.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/sal.min.js"></script>
    <script src="assets/js/vendor/particles.js"></script>
    <script src="assets/js/vendor/jquery.style.swicher.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/count-down.js"></script>
    <script src="assets/js/vendor/isotop.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>
    <script src="assets/js/vendor/backtoTop.js"></script>
    <script src="assets/js/vendor/odometer.js"></script>
    <script src="assets/js/vendor/jquery-appear.js"></script>
    <script src="assets/js/vendor/scrolltrigger.js"></script>
    <script src="assets/js/vendor/jquery.custom-file-input.js"></script>
    <script src="assets/js/vendor/savePopup.js"></script>
    <script src="assets/js/vendor/vanilla.tilt.js"></script>

    <!-- main JS -->
    <script src="assets/js/main.js"></script>
    <!-- Meta Mask  -->
    <script src="assets/js/vendor/web3.min.js"></script>
    <script src="assets/js/vendor/maralis.js"></script>
    <script src="assets/js/vendor/nft.js"></script>
</body>

</html>