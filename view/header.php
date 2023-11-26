
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MyT - Sàn giao dịch tài nguyên sinh viên</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-style-mode" content="0"> <!-- 0 == light, 1 == dark -->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="view/layout/assets/images/icons/shape-1.png">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="view/layout/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="view/layout/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="view/layout/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="view/layout/assets/css/vendor/nice-select.css">
    <link rel="stylesheet" href="view/layout/assets/css/plugins/feature.css">
    <link rel="stylesheet" href="view/layout/assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="view/layout/assets/css/vendor/odometer.css">

    <!-- Style css -->
    <link rel="stylesheet" href="view/layout/assets/css/style.css">
</head>

<body class="template-color-1 nft-body-connect">
<!-- start header area -->
    <!-- Start Header -->
    <header class="rn-header haeder-default header--sticky">
        <div class="container">
            <div class="header-inner">
                <div class="header-left">
                    <div class="logo-thumbnail logo-custom-css">
                        <a class="logo-light" href="index.php"><img src="view/layout/assets/images/logo/MyT-01.png" alt="nft-logo"></a>
                        <a class="logo-dark" href="index.php"><img src="view/layout/assets/images/logo/logo_MyT-01.png" alt="nft-logo"></a>
                    </div>
                    <div class="mainmenu-wrapper">
                        <nav id="sideNav" class="mainmenu-nav d-none d-xl-block">
                            <!-- Start Mainmanu Nav -->
                            <ul class="mainmenu">
                                <li class="has-menu-child-item">
                                    <a href="index.php">Trang chủ</a>
                                    
                                </li>
                                <li><a href="categories.html">Chuyên mục</a>
                                </li>
                                <li class="has-menu-child-item">
                                    <a href="index.php?pg=product">Tài nguyên</a>
                                    
                                </li>
                                <li><a href="contact.html">Hỗ trợ</a></li>
                            </ul>
                            <!-- End Mainmanu Nav -->
                        </nav>
                    </div>
                </div>
                <div class="header-right">
                    <div class="setting-option d-none d-lg-block">
                        <form class="search-form-wrapper" method="POST" action="index.php?pg=search">
                            <input type="search" name="search" placeholder="Tìm kiếm ở đây ..." aria-label="Search">
                            <div class="search-icon">
                                <button type="submit" name="btnSearch"><i class="feather-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="setting-option rn-icon-list d-block d-lg-none">
                        <div class="icon-box search-mobile-icon">
                            <button><i class="feather-search"></i></button>
                        </div>
                        <form id="header-search-1" action="index.php?pg=search" method="POST" class="large-mobile-blog-search">
                            <div class="rn-search-mobile form-group">
                                <button type="submit" class="search-button"><i class="feather-search"></i></button>
                                <input type="text" placeholder="Tìm ...">
                            </div>
                        </form>
                    </div>
                    <!-- <div class="header_admin" id="header_admin">
                        <div class="setting-option rn-icon-list user-account notification-badge">
                            <div class="icon-box">
                                <a href="shopping-cart.html"><i class="feather-shopping-cart"></i><span class="badge">3</span></a>
                                <div class="rn-dropdown">
                                    <div style="display: flex; gap: 10px;">
                                        <div class="rn-inner-top">
                                            <h4 class="title"><a href="author.html">Giỏ hàng</a></h4>
                                            
                                        </div>
                                    </div>
                                    
                                    <hr>
                                    <ul class="list-inner">
                                        <li></li>
                                        <li style="display: flex; justify-content: space-between; align-items: center;"><a href="edit-profile.html">Template website HTML&CSS</a><b style="margin-left: 10px; color: #f27322;">50 PCoin</b></li>
                                        <li><a href="author.html"style="justify-content: flex-start;"><i style="margin-right: 10px;" class="feather-upload-cloud"></i>Tải lên tài nguyên</a></li>
                                        <li><a href="login.html"style="justify-content: flex-start;"><i style="margin-right: 10px;" class="feather-log-out"></i>Đăng xuất</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="setting-option rn-icon-list notification-badge">
                        <div class="icon-box">
                            <a href="shopping-cart.html"><i class="feather-shopping-cart"></i><span class="badge">3</span></a>
                        </div>
                    </div>
                    <!-- <div class="setting-option header-btn rbt-site-header" id="rbt-site-header">
                        <div class="icon-box">
                            <a id="connectbtn" class="btn btn-primary-alta btn-small" href="login.html">Đăng nhập</a>
                        </div>
                    </div>
                    <div class="setting-option header-btn rbt-site-header" id="rbt-site-header">
                        <div class="icon-box">
                            <a id="connectbtn" class="btn btn-primary-alta btn-small" href="sign-up.html">Đăng ký</a>
                        </div>
                    </div> -->



                    <?php 
                        if (isset($_SESSION["user"])) {
                            // extract($_SESSION["user"]);
                            echo '<div class="header_admin" id="header_admin">
                            <div class="setting-option rn-icon-list user-account">
                                <div class="icon-box">
                                    <a href="login.php"><img src="view/layout/assets/images/icons/boy-avater.png" alt="Images"></a>
                                    <div class="rn-dropdown">
                                        <div style="display: flex; gap: 10px;">
                                            <a href="index.php?pg=user&idUser=0"><img src="view/layout/assets/images/icons/" alt="Images"></a>
                                            <div class="rn-inner-top">
                                                <h4 class="title"><a href="author.html">'.$_SESSION["user"]['Username'].'</a></h4>
                                                <span><a>Quản trị viên</a></span>
                                            </div>
                                        </div>
                                        
                                        <hr>
                                        <ul class="list-inner">
                                            <li><a href="author.html" style="justify-content: flex-start;"><i style="margin-right: 10px;" class="feather-user"></i>Thông tin của tôi</a></li>
                                            <li><a href="edit-profile.html"style="justify-content: flex-start;"><i style="margin-right: 10px;" class="feather-edit-3"></i>Chỉnh sửa hồ sơ</a></li>
                                            <li><a href="author.html"style="justify-content: flex-start;"><i style="margin-right: 10px;" class="feather-upload-cloud"></i>Tải lên tài nguyên</a></li>
                                            <li><a href="index.php?pg=logout"style="justify-content: flex-start;"><i style="margin-right: 10px;" class="feather-log-out"></i>Đăng xuất</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                        }else {
                            echo ' <div class="setting-option header-btn rbt-site-header" id="rbt-site-header">
                            <div class="icon-box">
                                <a id="connectbtn" class="btn btn-primary-alta btn-small" href="index.php?pg=login">Đăng nhập</a>
                            </div>
                        </div>
                        <div class="setting-option header-btn rbt-site-header" id="rbt-site-header">
                            <div class="icon-box">
                                <a id="connectbtn" class="btn btn-primary-alta btn-small" href="sign-up.html">Đăng ký</a>
                            </div>
                        </div>';
                        }
                    ?>
                   
                    

                    <div class="setting-option mobile-menu-bar d-block d-xl-none">
                        <div class="hamberger">
                            <button class="hamberger-button">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>

                    <div id="my_switcher" class="my_switcher setting-option">
                        <ul>
                            <li>
                                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                    <img class="sun-image" src="view/layout/assets/images/icons/sun-01.svg" alt="Sun images">
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                    <img class="Victor Image" src="view/layout/assets/images/icons/vector.svg" alt="Vector Images">
                                </a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->

    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="header-top">
                <div class="logo logo-custom-css">
                    <a class="logo-light" href="index.php"><img src="assets/images/logo/MyT-01.png" alt="nft-logo"></a>
                    <a class="logo-dark" href="index.php"><img src="assets/images/logo/logo_MyT-01.png" alt="nft-logo"></a>
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
                        <a href="index.php">Trang chủ</a>
                        
                    </li>
                    <li><a href="about.html">Về chúng tôi</a>
                    </li>
                    <li class="has-menu-child-item">
                        <a href="index.php?pg=product">Tài nguyên</a>
                        
                    </li>
                    <li><a href="contact.html">Hỗ trợ</a></li>
                </ul>
                <!-- End Mainmanu Nav -->
            </nav>
        </div>
    </div>
    <!-- ENd Header Area -->
<!-- end header -->