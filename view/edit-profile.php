<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edit Profile || Nuron - NFT Marketplace Template</title>
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

    <!-- start header area -->

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
                    <h5 class="title text-center text-md-start">Edit Profile</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="index.html">Home</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">Edit Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->


    <!-- Start tabs area -->
    <div class="edit-profile-area rn-section-gapTop">
        <div class="container">
            <div class="row plr--70 padding-control-edit-wrapper pl_md--0 pr_md--0 pl_sm--0 pr_sm--0">
                <div class="col-12 d-flex justify-content-between mb--30 align-items-center">
                    <h4 class="title-left">Edit Your Profile</h4>
                    <a href="author.html" class="btn btn-primary ml--10"><i class="feather-eye mr--5"></i> Preview</a>
                </div>
            </div>
            <div class="row plr--70 padding-control-edit-wrapper pl_md--0 pr_md--0 pl_sm--0 pr_sm--0">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <!-- Start tabs area -->
                    <nav class="left-nav rbt-sticky-top-adjust-five">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true"><i class="feather-edit"></i>Edit Profile Image</button>
                            <button class="nav-link" id="nav-home-tabs" data-bs-toggle="tab" data-bs-target="#nav-homes"
                                type="button" role="tab" aria-controls="nav-homes" aria-selected="false"><i
                                    class="feather-user"></i>Personal Information</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false"> <i class="feather-unlock"></i>Change Password</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false"><i class="feather-bell"></i>Notification Setting</button>
                        </div>
                    </nav>
                    <!-- End tabs area -->
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 mt_sm--30">
                    <div class="tab-content tab-content-edit-wrapepr" id="nav-tabContent">

                        <!-- sigle tab content -->
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <!-- start personal information -->
                            <div class="nuron-information">

                                <div class="profile-change row g-5">
                                    <div class="profile-left col-lg-4">
                                        <div class="profile-image mb--30">
                                            <h6 class="title">Change Your Profile Picture</h6>
                                            <img id="rbtinput1"
                                                src="view/layout/assets/images/<?= $_SESSION["user"]['Avata_img'] ?>"
                                                alt="Profile-NFT">
                                        </div>
                                        <div class="button-area">
                                            <div class="brows-file-wrapper">
                                                <!-- actual upload which is hidden -->
                                                <input name="fatima" id="fatima" type="file">
                                                <!-- our custom upload button -->
                                                <label for="fatima" title="No File Choosen">
                                                    <span class="text-center color-white">Upload Profile</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- End personal information -->
                        </div>
                        <!-- End single tabv content -->
                        <!-- sigle tab content -->
                        <div class="tab-pane fade" id="nav-homes" role="tabpanel" aria-labelledby="nav-home-tab">
                            <!-- start personal information -->
                            <div class="nuron-information">

                                <div class="profile-form-wrapper">
                                    <div class="input-two-wrapper mb--15">
                                        <div class="first-name half-wid">
                                            <label for="contact-name" class="form-label">First Name</label>
                                            <input name="contact-name" id="contact-name" type="text" value="Mr.">
                                        </div>
                                        <div class="last-name half-wid">
                                            <label for="contact-name-last" class="form-label">Last Name</label>
                                            <input name="contact-name" id="contact-name-last" type="text"
                                                value="Sunayra">
                                        </div>
                                    </div>
                                    <div class="email-area">
                                        <label for="Email" class="form-label">Edit Your Email</label>
                                        <input name="email" id="Email" type="email" value="example@gmail.com">
                                    </div>
                                </div>


                                <!-- edit bio area Start-->
                                <div class="edit-bio-area mt--20">
                                    <label for="Discription" class="form-label">Edit Your Bio</label>
                                    <textarea id="Discription">Hello, I am Alamin, A Front-end Developer...</textarea>
                                </div>
                                <!-- edit bio area End -->

                                <!--  -->
                                <div class="input-two-wrapepr-prifile">
                                    <!-- start Role area -->
                                    <div class="role-area mt--15">
                                        <label for="Role" class="form-label mb--10">Your Role</label>
                                        <input name="Role" id="Role" type="text" value="Front-end Developer">
                                    </div>
                                    <!-- End Role area -->
                                    <!-- select gender -->
                                    <select class="profile-edit-select">
                                        <option selected>Select Your Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Third Gender</option>
                                    </select>
                                    <!-- end gender -->
                                </div>

                                <div class="input-two-wrapper mt--15">
                                    <div class="half-wid currency">
                                        <!-- select gender -->
                                        <select class="profile-edit-select">
                                            <option selected>Currency</option>
                                            <option value="1">($)USD</option>
                                            <option value="2">wETH</option>
                                            <option value="3">BIT Coin</option>
                                        </select>
                                        <!-- end gender -->
                                    </div>
                                    <div class="half-wid phone-number">
                                        <label for="PhoneNumber" class="form-label">Phone Number</label>
                                        <input name="contact-name" id="PhoneNumber" type="text" value="+880100000000">
                                    </div>
                                </div>
                                <div class="input-two-wrapper mt--15">
                                    <div class="half-wid currency">
                                        <!-- select gender -->
                                        <select class="profile-edit-select">
                                            <option selected>Location</option>
                                            <option value="1">United State</option>
                                            <option value="2">Katar</option>
                                            <option value="3">Canada</option>
                                        </select>
                                        <!-- end gender -->
                                    </div>
                                    <div class="half-wid phone-number">
                                        <label for="PhoneNumbers" class="form-label">Address</label>
                                        <input name="contact-name" id="PhoneNumbers" type="text" value="USA Cidni">
                                    </div>
                                </div>
                                <div class="button-area save-btn-edit">
                                    <a href="#" class="btn btn-primary-alta mr--15"
                                        onclick="customAlert.alert('Cancel Edit Profile?')">Cancel</a>
                                    <a href="#" class="btn btn-primary"
                                        onclick="customAlert.alert('Successfully Saved Your Profile?')">Save</a>
                                </div>

                            </div>
                            <!-- End personal information -->
                        </div>
                        <!-- End single tabv content -->

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <!-- change password area Start -->
                            <form class="nuron-information" action="" method="post">
                                <div class="condition">
                                    <h5 class="title">Change Your Password</h5>
                                    <p class="condition">
                                        Choose a password that is easy to remember but difficult for others to guess.
                                    </p>
                                    <hr />
                                    <div class="email-area">
                                        <label for="Email2" class="form-label">Enter Email</label>
                                        <input name="email" id="email" type="email">
                                    </div>
                                </div>
                                <div class="input-two-wrapper mt--15">
                                    <div class="old-password half-wid">
                                        <label for="oldPass" class="form-label">Enter Old Password</label>
                                        <input name="oldPass" id="oldPass" type="oldPass">
                                    </div>
                                    <div class="new-password half-wid">
                                        <label for="NewPass" class="form-label">Create New Password</label>
                                        <input name="new-password" id="new-password" type="new-password">
                                    </div>
                                </div>
                                <div class="email-area mt--15">
                                    <label for="rePass" class="form-label">Confirm Password</label>
                                    <input name="re-password" id="re-password" type="re-password">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary save-btn-edit">Save</button>
                            </form>
                            <!-- change password area ENd -->
                        </div>

                        <div class="tab-pane fade " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                            <!-- start Notification Setting  -->
                            <div class="nuron-information">
                                <h5 class="title">Make Sure Your Notification setting </h5>
                                <p class="notice-disc">
                                    Notification Center is where you can find app notifications and Quick Settings—which
                                    give you quick access to commonly used settings and apps. You can change your
                                    notification settings at any time from the Settings app. Select Start , then select
                                    Settings
                                </p>
                                <hr />
                                <!-- start notice wrapper parrent -->
                                <div class="notice-parent-wrapper d-flex">
                                    <div class="notice-child-wrapper">
                                        <!-- single notice wrapper -->
                                        <div class="single-notice-setting">
                                            <div class="input">
                                                <input type="checkbox" id="themeSwitch" name="theme-switch"
                                                    class="theme-switch__input" />
                                                <label for="themeSwitch" class="theme-switch__label">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="content-text">
                                                <p>Order Confirmation Notice</p>
                                            </div>
                                        </div>
                                        <!-- single notice wrapper End -->

                                        <!-- single notice wrapper -->
                                        <div class="single-notice-setting mt--15">
                                            <div class="input">
                                                <input type="checkbox" id="themeSwitchs" name="theme-switch"
                                                    class="theme-switch__input" />
                                                <label for="themeSwitchs" class="theme-switch__label">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="content-text">
                                                <p>New Items Notification</p>
                                            </div>
                                        </div>
                                        <!-- single notice wrapper End -->

                                        <!-- single notice wrapper -->
                                        <div class="single-notice-setting mt--15">
                                            <div class="input">
                                                <input type="checkbox" id="OrderNotice" name="theme-switch"
                                                    class="theme-switch__input" />
                                                <label for="OrderNotice" class="theme-switch__label">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="content-text">
                                                <p>New Bid Notification</p>
                                            </div>
                                        </div>
                                        <!-- single notice wrapper End -->

                                        <!-- single notice wrapper -->
                                        <div class="single-notice-setting mt--15">
                                            <div class="input">
                                                <input type="checkbox" id="newPAy" name="theme-switch"
                                                    class="theme-switch__input" />
                                                <label for="newPAy" class="theme-switch__label">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="content-text">
                                                <p>Payment Card Notification</p>
                                            </div>
                                        </div>
                                        <!-- single notice wrapper End -->

                                        <!-- single notice wrapper -->
                                        <div class="single-notice-setting mt--15">
                                            <div class="input">
                                                <input type="checkbox" id="EndBid" name="theme-switch"
                                                    class="theme-switch__input" />
                                                <label for="EndBid" class="theme-switch__label">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="content-text">
                                                <p>Ending Bid Notification Before 5 min</p>
                                            </div>
                                        </div>
                                        <!-- single notice wrapper End -->

                                        <!-- single notice wrapper -->
                                        <div class="single-notice-setting mt--15">
                                            <div class="input">
                                                <input type="checkbox" id="Approve" name="theme-switch"
                                                    class="theme-switch__input" />
                                                <label for="Approve" class="theme-switch__label">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="content-text">
                                                <p>Notification for approving product</p>
                                            </div>
                                        </div>
                                        <!-- single notice wrapper End -->
                                    </div>



                                    <div class="notice-child-wrapper">
                                    </div>
                                </div>
                                <!-- end notice wrapper parrent -->
                                <a href="#" class="btn btn-primary save-btn-edit"
                                    onclick="customAlert.alert('Successfully saved Your Notificationm setting')">Save</a>
                            </div>
                            <!-- End Notification Setting  -->


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End tabs area -->


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