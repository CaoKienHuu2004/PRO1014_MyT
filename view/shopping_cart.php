<?php
session_start();
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    //làm rỗng giỏ hàng
    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);
    //xóa sp trong giỏ hàng
    if(isset($_GET['delid'])&&($_GET['delid']>=0)){
        array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }

    //Lấy dữ liệu từ form
    if(isset($_POST['addcart'])&&($_POST['addcart'])){
        $hinh=$_POST['hinh'];
        $tensp=$_POST['tensp'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];
        //thêm moi san pham vao gio hang
        $sp=[$hinh,$tensp,$gia,$soluong];
        $_SESSION['giohang'][]=$sp;
        var_dump($_SESSION['giohang']);

    }

    function showgiohang(){
        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
            if(sizeof($_SESSION['giohang'])>0){
            $tong=0;
            $tongs=0;
            for ($i=0; $i < sizeof($_SESSION['giohang']); $i++){

                $tt=$_SESSION['giohang'][$i][2];
                $tong+=$tt;
                $tts=$_SESSION['giohang'][$i][3];
                $tongs+=$tts;
                echo '<div class="lg-product-wrapper">
                <div class="inner" >
                    <div class="lg-left-content" style="justify-content: center;">
                        <a href="product-details.php" class="thumbnail">
                            <img src="view/layout/assets/images/portfolio/'.$_SESSION['giohang'][$i][0].'" alt="Nft_Portfolio">
                        </a>
                        <div class="read-content" style="max-width: 350px;">
                            <a href="product-details.php">
                                <h6 class="title">'.$_SESSION['giohang'][$i][1].'</h6>
                            </a>
                            <div class="product-share-wrapper">
                                <!-- all bids -->
                                <div class="profile-share">
                                    <a href="author.php" class="avatar" data-tooltip="@lyhuu123" tabindex="0"><img src="view/layout/assets/images/client/'.$_SESSION['giohang'][$i][0].'" alt="Nft_Profile"></a>
                                    
                                    <a class="more-author-text" href="#" tabindex="0">Cao Kiến Hựu</a>
                                    <span style="color: #f27322; margin-left: 20px;"><b><i class="feather-check-circle"></i></b> đã được kiểm thử</span>
                                </div>
                                <!-- all bids End--> 
                                
                            </div>
                            <h6 class="latest-bid" style="color: #f27322;">'.$_SESSION['giohang'][$i][2].'</h6>
                            <div class="share-wrapper d-flex">
                                <!-- react area -->
                                <!-- <div class="react-area mr--15">
                                    <span style="color: white; padding-left: 5px;">Xóa khỏi giỏ hàng</span>
                                </div> -->
                                <!-- end -->
                                <!-- share area -->
                                <div class="share-btn share-btn-activation dropdown">
                                    <button class="icon" data-bs-toggle="dropdown" aria-expanded="false" tabindex="0">
                                        <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                    <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                        <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal" tabindex="0">
                                            Share
                                        </button>
                                        <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal" tabindex="0">
                                            Report
                                        </button>
                                    </div>
                                </div>
                                <!-- sharea End -->
                            </div>
                        </div>
                    </div>
                    <div class="read-content" style="margin-left: 0px;">
                        <div class="share-wrapper d-flex">
                            
                            <div class="react-area mr--15" style="margin-right: 0px;">
                                <span style="color: white;"><i class="feather-trash-2" href="index.php?pg=shopping-cart&delid=" style="color: white; padding-right: 5px;"></i>Xóa</span>
                            </div>';

            }
            echo '<div class="col-lg-4">
                    

            <div class="rbt-single-widget widget_categories mt--30">
                <h3 class="title">Giỏ hàng</h3>
                <div class="inner">
                    <ul class="category-list ">
                        <li><a href="#"><span class="left-content">Tổng số sản phẩm:</span><span
                                    class="count-text">'.$tongs.'</span></a></li>
                        <li><a href="#"><span class="left-content">Thành tiền:</span><span
                                    class="count-text">'.$tong.' PCoin</span></a></li>
                       
                    </ul>
                </div>
            </div>
            <button class="btn btn-primary add-community" href="#" style="margin-top: 50px;" >Tiếp tục thanh toán <i class="feather-arrow-right"></i></button>';
        }else{
            echo "Giỏ hàng rỗng hãy bỏ hang vào giỏ!!";
        }
    }
}

?>
    <!-- start page title area -->
    <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Giỏ hàng của bạn</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="index.php">Home</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">Giỏ hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->


    <!-- community area start -->
    <div class="nu-community-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="community-content-wrapper">

                        
                        <!-- <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding-right:20px;padding-left:20px;display: flex; grid-row: 20px; align-items: center; justify-content: space-between;">
                            
                            <li class="nav-item" role="presentation" style="margin-top: 20px; margin-bottom: 20px;">
                                <h6 style="margin: 0px;"><b>Tổng sản phẩm: </b><span style="color: #f27322;">3</span></h6>
                            </li>
                            <li style="margin-top: 20px; margin-bottom: 20px;">
                                <h6 style="margin: 0px;"><b>Thành tiền: </b><span style="color: #f27322;">50 PCoin</span></h6>
                            </li>
                            
                        </ul> -->
                        <!-- tav Button area  End-->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <!-- <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab">Recent Content</button>
                            </li> -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab">Xóa tất cả giỏ hàng</button><a href="index.php?pg=shopping-cart&delcart=1"></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab">Cập nhật giỏ hàng</button><a href="index.php"></a>
                            </li>
                            
                        </ul>
                        <!-- tav Button area  End-->

                        <!-- tab Content Start -->
                        <!-- <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                
                                <div class="single-community-box">
                                    <div class="community-bx-header">
                                        <div class="header-left">
                                            <div class="thumbnail">
                                                <img src="view/layout/assets/images/client/client-2.png" alt="NFT-thumbnail">
                                            </div>
                                            <div class="name-date">
                                                <a href="#" class="name">Elijavd May</a>
                                                <span class="date">6 Hour Ago</span>
                                            </div>
                                        </div>
                                       
                                        <div class="header-right">
                                            <div class="product-share-wrapper">
                                                <div class="profile-share">
                                                    <a href="author.php" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img class="large" src="view/layout/assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                                    <a href="author.php" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img class="large" src="view/layout/assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                                    <a href="author.php" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img class="large" src="view/layout/assets/images/client/client-11.png" alt="Nft_Profile"></a>
                                                    <a class="more-author-text" href="#">20+ People.</a>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="community-content">
                                        <h3 class="title"><a href="forum-details.php">But NFTs aren't exactly new.
                                                CryptoKitties, a digital trading game on the cryptocurrency platform
                                                Ethereum, was one of the original NFTs</a></h3>
                                        <p class="desc">
                                            Hey guys! I want to start buying interest art from crypto artists so please
                                            feel free to share anything. I really love animated pieces and 3d stuff, but
                                            I’d give a try to anything different or new (for me) like AR nft ...
                                        </p>
                                        <img class="community-img" src="view/layout/assets/images/blog/community/community-post-01.jpg" alt="Nft_Community-image">
                                        <div class="tags">
                                            <span>#Bit Coin</span>
                                            <span>#NFT Marketplace</span>
                                            <span>#crypto Artists</span>
                                            <span>#NFT Artists</span>
                                        </div>
                                        <div class="hr"></div>
                                        <div class="rn-community-footer">
                                            <div class="community-reaction">
                                                <a href="#" class="likes">
                                                    <i class="feather-heart"></i>
                                                    <span>2.1k</span>
                                                </a>
                                                <a href="post_details.php" class="comments">
                                                    <i class="feather-message-circle"></i>
                                                    <span>257 Comments</span>
                                                </a>
                                                <span class="views">
                                                    <i class="feather-eye"></i>
                                                    <span>257 Views</span>
                                                </span>
                                                <span class="time">
                                                    <i class="feather-clock"></i>
                                                    <span>2 days ago</span>
                                                </span>
                                            </div>
                                            <div class="answer">
                                                <a href="#" class="btn btn-primary-alta rounded">Answer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="single-community-box mt--30">
                                    <div class="community-bx-header">
                                        <div class="header-left">
                                            <div class="thumbnail">
                                                <img src="view/layout/assets/images/client/client-1.png" alt="NFT-thumbnail">
                                            </div>
                                            <div class="name-date">
                                                <a href="#" class="name">Elijavd May</a>
                                                <span class="date">6 Hour Ago</span>
                                            </div>
                                        </div>
                                       
                                        <div class="header-right">
                                            <div class="product-share-wrapper">
                                                <div class="profile-share">
                                                    <a href="author.php" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img class="large" src="view/layout/assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                                    <a href="author.php" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img class="large" src="view/layout/assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                                    <a href="author.php" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img class="large" src="view/layout/assets/images/client/client-11.png" alt="Nft_Profile"></a>
                                                    <a class="more-author-text" href="#">20+ People.</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="community-content">
                                        <h3 class="title"><a href="forum-details.php">Non-fungible tokens, or NFTs, are
                                                pieces of digital content linked to the blockchain...</a></h3>
                                        <p class="desc">
                                            Hey guys! I want to start buying interest art from crypto artists so please
                                            feel free to share anything. I really love animated pieces and 3d stuff, but
                                            I’d give a try to anything different or new (for me) like AR nft ...
                                        </p>
                                        <div class="tags">
                                            <span>#NFT Marketplace</span>
                                            <span>#crypto Artists</span>
                                            <span>#NFT Artists</span>
                                        </div>
                                        <div class="hr"></div>
                                        <div class="rn-community-footer">
                                            <div class="community-reaction">
                                                <a href="#" class="likes">
                                                    <i class="feather-heart"></i>
                                                    <span>2.1k</span>
                                                </a>
                                                <a href="post_details.php" class="comments">
                                                    <i class="feather-message-circle"></i>
                                                    <span>257 Comments</span>
                                                </a>
                                                <span class="views">
                                                    <i class="feather-eye"></i>
                                                    <span>257 Views</span>
                                                </span>
                                                <span class="time">
                                                    <i class="feather-clock"></i>
                                                    <span>2 days ago</span>
                                                </span>
                                            </div>
                                            <div class="answer">
                                                <a href="#" class="btn btn-primary-alta rounded">Answer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                               
                                <div class="single-community-box mt--30">
                                    <div class="community-bx-header">
                                        <div class="header-left">
                                            <div class="thumbnail">
                                                <img src="view/layout/assets/images/client/client-3.png" alt="NFT-thumbnail">
                                            </div>
                                            <div class="name-date">
                                                <a href="#" class="name">Elijavd May</a>
                                                <span class="date">6 Hour Ago</span>
                                            </div>
                                        </div>
                                        
                                        <div class="header-right">
                                            <div class="product-share-wrapper">
                                                <div class="profile-share">
                                                    <a href="author.php" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img class="large" src="view/layout/assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                                    <a href="author.php" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img class="large" src="view/layout/assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                                    <a href="author.php" class="avatar" data-tooltip="Owener:Mr.Jone-lee"><img class="large" src="view/layout/assets/images/client/client-11.png" alt="Nft_Profile"></a>
                                                    <a class="more-author-text" href="#">20+ People.</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="community-content">
                                        <h3 class="title"><a href="forum-details.php">How to make an NFT?</a></h3>
                                        <p class="desc">
                                            Non-fungible tokens, or NFTs, are the latest cryptocurrency phenomenon to go
                                            mainstream. And after Christie's auction house sold the first-ever NFT
                                            artwork — a collage of images by digital artist Beeple for a whopping $69.3
                                            million — NFTs have suddenly captured the world's attention.
                                        </p>
                                        <img class="community-img" src="view/layout/assets/images/blog/community/community-post-02.jpg" alt="Nft_Community-image">
                                        <div class="tags">
                                            <span>#NFT Marketplace</span>
                                            <span>#crypto Artists</span>
                                            <span>#NFT Artists</span>
                                        </div>
                                        <div class="hr"></div>
                                        <div class="rn-community-footer">
                                            <div class="community-reaction">
                                                <a href="#" class="likes">
                                                    <i class="feather-heart"></i>
                                                    <span>2.1k</span>
                                                </a>
                                                <a href="post_details.php" class="comments">
                                                    <i class="feather-message-circle"></i>
                                                    <span>257 Comments</span>
                                                </a>
                                                <span class="views">
                                                    <i class="feather-eye"></i>
                                                    <span>257 Views</span>
                                                </span>
                                                <span class="time">
                                                    <i class="feather-clock"></i>
                                                    <span>2 days ago</span>
                                                </span>
                                            </div>
                                            <div class="answer">
                                                <a href="#" class="btn btn-primary-alta rounded">Answer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                            
                        </div> -->
                        <!-- Tab Content End -->
                    
            </div>
        </div>
    </div>
    <!-- community area end -->




    <!-- Modal -->
    <div class="rn-popup-modal upload-modal-wrapper modal fade" id="uploadModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content share-wrapper">
                <div class="modal-body">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.php"><img src="view/layout/assets/images/portfolio/portfolio-08.jpg" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.php" class="avatar" data-tooltip="Jone lee"><img src="view/layout/assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                <a href="author.php" class="avatar" data-tooltip="Jone lee"><img src="view/layout/assets/images/client/client-2.png" alt="Nft_Profile"></a>
                                <a href="author.php" class="avatar" data-tooltip="Jone lee"><img src="view/layout/assets/images/client/client-3.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">9+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                        Share
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                        Report
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.php"><span class="product-name">Preatent</span></a>
                        <span class="latest-bid">Highest bid 1/20</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.244wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">322</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Area -->
    <div class="rn-footer-one rn-section-gap bg-color--1 mt--100 mt_md--80 mt_sm--80">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="widget-content-wrapper">
                        <div class="footer-left">
                            <div class="logo-thumbnail logo-custom-css">
                                <a class="logo-light" href="index.php"><img src="view/layout/assets/images/logo/logo-white.png" alt="nft-logo"></a>
                                <a class="logo-dark" href="index.php"><img src="view/layout/assets/images/logo/logo-dark.png" alt="nft-logo"></a>
                            </div>
                            <p class="rn-footer-describe">
                                Created with the collaboration of over 60 of the world's best Nuron Artists.
                            </p>
                        </div>
                        <div class="widget-bottom mt--40 pt--40">
                            <h6 class="title">Get The Latest Nuron Updates </h6>
                            <div class="input-group">
                                <input type="text" class="form-control bg-color--2" placeholder="Your username" aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary-alta btn-outline-secondary" type="button">Subscribe</button>
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
                            <li class="single-list"><a href="blog.php">Blog Grid</a></li>
                            <li class="single-list"><a href="about.php">About Us</a></li>
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
                                    <a href="product-details.php">
                                        <img src="view/layout/assets/images/portfolio/portfolio-01.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="product-details.php">#21 The Wonder</a></h6>
                                    <p>Highest bid 1/20</p>
                                    <span class="price">0.244wETH</span>
                                </div>
                            </li>
                            <li class="recent-post">
                                <div class="thumbnail">
                                    <a href="product-details.php">
                                        <img src="view/layout/assets/images/portfolio/portfolio-02.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="product-details.php">Diamond Dog</a></h6>
                                    <p>Highest bid 1/20</p>
                                    <span class="price">0.022wETH</span>
                                </div>
                            </li>
                            <li class="recent-post">
                                <div class="thumbnail">
                                    <a href="product-details.php">
                                        <img src="view/layout/assets/images/portfolio/portfolio-03.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="product-details.php">Morgan11</a></h6>
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
                            <li><a href="terms-condition.php">Terms</a></li>
                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
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
    <script src="view/layout/assets/js/vendor/jquery.js"></script>
    <script src="view/layout/assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="view/layout/assets/js/vendor/jquery-ui.js"></script>
    <script src="view/layout/assets/js/vendor/modernizer.min.js"></script>
    <script src="view/layout/assets/js/vendor/feather.min.js"></script>
    <script src="view/layout/assets/js/vendor/slick.min.js"></script>
    <script src="view/layout/assets/js/vendor/bootstrap.min.js"></script>
    <script src="view/layout/assets/js/vendor/sal.min.js"></script>
    <script src="view/layout/assets/js/vendor/particles.js"></script>
    <script src="view/layout/assets/js/vendor/jquery.style.swicher.js"></script>
    <script src="view/layout/assets/js/vendor/js.cookie.js"></script>
    <script src="view/layout/assets/js/vendor/count-down.js"></script>
    <script src="view/layout/assets/js/vendor/isotop.js"></script>
    <script src="view/layout/assets/js/vendor/imageloaded.js"></script>
    <script src="view/layout/assets/js/vendor/backtoTop.js"></script>
    <script src="view/layout/assets/js/vendor/odometer.js"></script>
    <script src="view/layout/assets/js/vendor/jquery-appear.js"></script>
    <script src="view/layout/assets/js/vendor/scrolltrigger.js"></script>
    <script src="view/layout/assets/js/vendor/jquery.custom-file-input.js"></script>
    <script src="view/layout/assets/js/vendor/savePopup.js"></script>
    <script src="view/layout/assets/js/vendor/vanilla.tilt.js"></script>

    <!-- main JS -->
    <script src="view/layout/assets/js/main.js"></script>
    <!-- Meta Mask  -->
    <script src="view/layout/assets/js/vendor/web3.min.js"></script>
    <script src="view/layout/assets/js/vendor/maralis.js"></script>
    <script src="view/layout/assets/js/vendor/nft.js"></script>
</body>

</php>