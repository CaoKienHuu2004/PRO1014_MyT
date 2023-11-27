 <?php 
    if (isset($_SESSION['giohang'])) {
        $i = 0;
        $html_cart = '';
        foreach ($_SESSION['giohang'] as $item) {
            extract($item);
            $category_select_by_id = category_select_by_id($idcate);
            $user_select_by_id = user_select_by_id($iduser);
            $cert = "";
            if ($test == 1) {
                $cert = '<span style="color: #f27322; margin-left: 20px;"><b><i class="feather-check-circle"></i></b> Đã kiểm duyệt</span>';
            }else {
                $cert = '<span style="color: gray; margin-left: 20px;"><b><i class="feather-check-circle"></i></b> Chưa kiểm duyệt</span>';
            }
            $gia = "";
            if ($price_2 == null) {
                $gia = '<div class="bid-react-area">
                            <h6 class="last-bid" style="margin: 0px;">'.$price.' PCoin</h6>
                        </div>';
            }else {
                $gia = '<div class="bid-react-area">
                            <h6 class="last-bid" style="margin: 0px;">'.$price_2.' PCoin</h6>
                            
                        </div>
                        <span class="last-bid" style="margin: 0px;"><del>'.$price.' PCoin</del></span>';
            }
            $html_cart .= '
            <div class="lg-product-wrapper">
            <div class="inner" >
                <div class="lg-left-content" style="justify-content: center;">
                    <a href="product-details.html" class="thumbnail">
                        <img src="view/layout/assets/images/portfolio/'.$img.'" alt="Nft_Portfolio">
                    </a>
                    <div class="read-content" style="max-width: 350px;">
                        <a href="index.php?pg=product_detail&idProduct='.$idproduct.'">
                            <h6 class="title">'.$name.'</h6>
                        </a>
                        <span class="more-author-text" style="color: #f27322;"><i class="feather-bookmark" style="padding-right: 5px;"></i><b>Chuyên mục: </b>'.$category_select_by_id['Name_C'].'</span><br><br>
                        <div class="product-share-wrapper">
                            <!-- all bids -->
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="@'.$user_select_by_id['Username'].'" tabindex="0"><img src="view/layout/assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                
                                <a class="more-author-text" href="#" tabindex="0">'.$user_select_by_id['Name_U'].'</a>
                                '.$cert.'
                            </div>
                            <!-- all bids End--> 
                            
                        </div>
                        '.$gia.'
                        <div class="share-wrapper d-flex">
                            <!-- react area -->
                            <!-- <div class="react-area mr--15">
                                <span  style="color: white; padding-left: 5px;">Xóa khỏi giỏ hàng</span>
                            </div> -->
                            <!-- end -->
                            <!-- share area -->
                            
                            <!-- sharea End -->
                        </div>
                    </div>
                </div>
                <div class="read-content" style="margin-left: 0px;">
                    <div class="share-wrapper d-flex">
                        
                        <div class="react-area mr--15" style="margin-right: 0px;">
                            <a href="index.php?pg=action_cart&delid='.$i.'"><span style="color: white;"><i class="feather-trash-2" style="color: white; padding-right: 5px;"></i>Xóa</span></a>
                        </div>
                        
                        <!-- <div class="share-btn share-btn-activation dropdown">
                            <button class="icon" data-bs-toggle="dropdown" aria-expanded="false" tabindex="0">
                                <i class="feather-trash-2"></i>
                            </button>
                            <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal" tabindex="0">
                                    Share
                                </button>
                                <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal" tabindex="0">
                                    Report
                                </button>
                            </div>
                        </div> -->
                        
                    </div>
                </div>
                <!-- <h6 class="latest-bid" style="color: #f27322;">20 PCoin</h6> -->
            </div>
            
        </div>
            ';
            $i++;
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
                        <li class="item"><a href="index.html">Home</a></li>
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
                        <!-- tav Button area  End-->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <!-- <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab">Recent Content</button>
                            </li> -->
                            <li class="nav-item" role="presentation">
                                <button onclick="window.location.href='index.php?pg=action_cart&del_cart'" class="nav-link"  id="profile-tab">Xóa tất cả giỏ hàng</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab">Cập nhật giỏ hàng</button>
                            </li>
                            
                        </ul>
                        <!-- Tab Content End -->
                        <?php 
                            if (!isset($_SESSION['giohang'])) {
                                echo $html_cart;
                            }else{
                                echo "<h6>Giỏ hàng của bạn đang trống !</h6>";
                            }
                        ?>
                        
                    </div>
                    
                </div>
                <div class="col-lg-4">
                    

                    <div class="rbt-single-widget widget_categories mt--30">
                        <h3 class="title">Giỏ hàng</h3>
                        <div class="inner">
                            <ul class="category-list ">
                                <li><a href="#"><span class="left-content">Tổng số sản phẩm:</span><span
                                            class="count-text">3</span></a></li>
                                <li><a href="#"><span class="left-content">Thành tiền:</span><span
                                            class="count-text">50 PCoin</span></a></li>
                               
                            </ul>
                        </div>
                    </div>
                    <button class="btn btn-primary add-community" href="#" style="margin-top: 50px;" >Tiếp tục thanh toán <i class="feather-arrow-right"></i></button>

                    
                </div>
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
                            <a href="product-details.html"><img src="view/layout/assets/images/portfolio/portfolio-08.jpg" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="view/layout/assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="view/layout/assets/images/client/client-2.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="view/layout/assets/images/client/client-3.png" alt="Nft_Profile"></a>
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
                        <a href="product-details.html"><span class="product-name">Preatent</span></a>
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