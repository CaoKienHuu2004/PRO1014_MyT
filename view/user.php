<?php
        extract($user_select_by_id);
        $product_select_idUser = product_select_idUser($idUser);
        $count_product = "";
        $count_order = "";
        $count_product .= count(product_select_idUser($idUser));
        // $count_order .= count(order_product_buyer($idUser));
    
// if (isset($_SESSION['user'])) {
    
// }
?>

<div class="rn-author-bg-area bg_image--9 bg_image ptb--150">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>

    <div class="rn-author-area mb--30 mt_dec--120">
        <div class="container">
            <div class="row padding-tb-50 align-items-center d-flex">
                <div class="col-lg-12">
                    <div class="author-wrapper">
                        <div class="author-inner">
                            <div class="user-thumbnail">
                                <img width="250" src="view/layout/assets/images/<?= $Avata_img ?>" alt="">
                            </div>
                            <div class="rn-author-info-content">
                                <h4 class="title"><?= $Name_U?></h4>
                                <a href="#" class="social-follw">
                                    <i data-feather="twitter"></i>
                                    <span class="user-name"><?= $Username ?></span>
                                </a>
                                <div class="follow-area">
                                    <div class="follow followers">
                                        <span><?= $count_product ?><a href="#" class="color-body">Sản phẩm</a></span>
                                    </div>
                                    
                                    <div class="follow following">
                                        <span><?= $Total_Pcoin ?><a href="#" class="color-body">PCoin</a></span>
                                    </div>
                                </div>
                                <?php 
                                    if (isset($_SESSION['user'])&&($_SESSION['user']['idUser']==$idUser)) {
                                        echo '
                                        <div class="author-button-area">
                                            <a href="index.php?pg=create_product">"<span class="btn at-follw follow-button"><i data-feather="upload-cloud"></i> Tải tài nguyên</span></a>
                                            <span class="btn at-follw share-button" data-bs-toggle="modal" data-bs-target="#shareModal"><i data-feather="share-2"></i> Share</span>
                                            <a href="index.php?pg=edit_user" class="btn at-follw follow-button edit-btn"><i data-feather="edit"></i></a>
                                        </div>
                                        ';
                                    }else {
                                        echo '
                                        <div class="author-button-area">
                                            <a href="">"<span class="btn at-follw follow-button"><i data-feather="upload-cloud"></i>Không có gì</span></a>
                                            <span class="btn at-follw share-button" data-bs-toggle="modal" data-bs-target="#shareModal"><i data-feather="share-2"></i> Share</span>
                                            <a href="" class="btn at-follw follow-button edit-btn"><i data-feather="edit"></i>ở đây cũng v</a>
                                        </div>
                                        ';
                                    }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rn-authore-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-wrapper-one">
                        <?php 
                            if (isset($_SESSION['user'])&&($_SESSION['user']['idUser']==$idUser)) {
                                echo '
                                    <nav class="tab-button-one">
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Đã đăng</button>
                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Đang chờ duyệt</button>
                                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Đơn hàng của tôi</button>
                                        </div>
                                    </nav>
                                ';
                            }else {
                                echo '
                                    <nav class="tab-button-one">
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Đã đăng</button>
                                        </div>
                                    </nav>
                                ';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php 
                if (isset($_SESSION['user'])&&($_SESSION['user']['idUser']==$idUser)) {
                    echo '
                    <div class="tab-pane row g-5 d-flex fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        ';foreach ($product_select_idUser as $item){  
                            extract($item);
                            $link_productdetails = 'index.php?pg=product_detail&idProduct='.$idProduct;
                            $cert = "";
                            if ($Test == 1) {
                                $cert = '<span><i class="feather-check-circle" style="padding-right: 5px; color: #f27322;"></i><span class="more-author-text" style="color: #f27322;">Đã kiểm duyệt</span></span>';
                            }else {
                                $cert = '<span><i class="feather-x-circle" style="padding-right: 5px; color: gray;"></i><span class="more-author-text" >Chưa kiểm duyệt</span></span>';
                            }
                            $gia = "";
                            if ($Price_2 == 0) {
                                $gia = '<div class="bid-react-area">
                                            <h6 class="last-bid" style="margin: 0px;">'.$Price.' PCoin</h6>
                                            <div class="react-area">
                                                <i class="feather-download-cloud" style="padding-right: 10px;"></i>
                                                    <a href="view/layout/assets/files/'.$File.'"> <button style="border: none;" type="submit" name="addcart" class="number">Tải xuống</button></a>
                                            </div>
                                        </div>';
                            }else {
                                $gia = '<div class="bid-react-area">
                                            <h6 class="last-bid" style="margin: 0px;">'.$Price_2.' PCoin</h6>
                                            <div class="react-area">
                                                <i class="feather-download-cloud" style="padding-right: 10px;"></i>
                                                    <button style="border: none;" type="submit" name="addcart" class="number">Tải xuống</button>
                                            </div>
                                        </div>
                                        <span class="last-bid" style="margin: 0px;"><del>'.$Price.' PCoin</del></span>';
                            }
                            echo '
                            <!-- start single product -->
                            <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800" class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-style-one overlay">
                                    <div class="card-thumbnail">
                                        <a href="'.$link_productdetails.'"><img style="width: 100%;" src="view/layout/assets/images/product/'.$img.'" alt="NFT_portfolio"></a>
                                        <div class="countdown" data-date="'.$Date_Sale.'">
                                            <div class="countdown-container days">
                                                <span class="countdown-value">87</span>
                                                <span class="countdown-heading">Ds</span>
                                            </div>
                                            <div class="countdown-container hours">
                                                <span class="countdown-value">23</span>
                                                <span class="countdown-heading">Hs</span>
                                            </div>
                                            <div class="countdown-container minutes">
                                                <span class="countdown-value">38</span>
                                                <span class="countdown-heading">Mins</span>
                                            </div>
                                            <div class="countdown-container seconds">
                                                <span class="countdown-value">27</span>
                                                <span class="countdown-heading">Sec</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-share-wrapper">
                                        <a href="'.$link_productdetails.'"><span class="product-name" style="  overflow: hidden; text-overflow: ellipsis; max-height: 3em; line-height: 1.5em;">'.$Name.'</span></a>
                                        <div class="share-btn share-btn-activation dropdown">
                                            <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                                </svg>
                                            </button>

                                            <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                                <button href="index.php" type="button" class="btn-setting-text share-text" >
                                                    Sửa sản phẩm
                                                </button>
                                                <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                    Xóa sản phẩm
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div style="display: flex; justify-content: space-between; align-items: center">'.$cert.'<span class=""><b style="color: #f27322">Lượt bán:</b> '.$best_saler.'</div>
                                    <br>
                                    <div style="overflow: hidden; text-overflow: ellipsis; max-height: 3em; line-height: 1.5em;"><span style="font-weight: 400; font-size: 15px; margin-top: 20px; ">'.$Describe.'</span></div>
                                    '.$gia.'
                                </div>
                            </div>
                            <!-- end single product -->
                            ';
                        } echo '
                    </div>
                    <div class="tab-pane row g-5 d-flex fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    ';foreach ($product_select_idUser as $item) {
                            
                        extract($item);
                        $link_productdetails = 'index.php?pg=product_detail&idProduct='.$idProduct;
                        $cert = "";
                        if ($Test == 1) {
                            $cert = '<span><i class="feather-check-circle" style="padding-right: 5px; color: #f27322;"></i><span class="more-author-text" style="color: #f27322;">Đã kiểm duyệt</span></span>';
                        }else {
                            $cert = '<span><i class="feather-x-circle" style="padding-right: 5px; color: gray;"></i><span class="more-author-text" >Chưa kiểm duyệt</span></span>';
                        }
                        $gia = "";
                        if ($Price_2 == 0) {
                            $gia = '<div class="bid-react-area">
                                        <h6 class="last-bid" style="margin: 0px;">'.$Price.' PCoin</h6>
                                        <div class="react-area">
                                            <i class="feather-download-cloud" style="padding-right: 10px;"></i>
                                            
                                                <a href="view/layout/assets/files/'.$File.'"> <button style="border: none;" type="submit" name="addcart" class="number">Tải xuống</button></a>
                                            
                                        </div>
                                    </div>';
                        }else {
                            $gia = '<div class="bid-react-area">
                                        <h6 class="last-bid" style="margin: 0px;">'.$Price_2.' PCoin</h6>
                                        <div class="react-area">
                                            <i class="feather-download-cloud" style="padding-right: 10px;"></i>
                                            
                                                <button style="border: none;" type="submit" name="addcart" class="number">Tải xuống</button>
                                            
                                        </div>
                                    </div>
                                    <span class="last-bid" style="margin: 0px;"><del>'.$Price.' PCoin</del></span>';
                        }
                        echo '
                        <!-- start single product -->
                        <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800" class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-one overlay">
                                <div class="card-thumbnail">
                                    <a href="'.$link_productdetails.'"><img style="width: 100%;" src="view/layout/assets/images/product/'.$img.'" alt="NFT_portfolio"></a>
                                    <div class="countdown" data-date="'.$Date_Sale.'">
                                        <div class="countdown-container days">
                                            <span class="countdown-value">87</span>
                                            <span class="countdown-heading">Ds</span>
                                        </div>
                                        <div class="countdown-container hours">
                                            <span class="countdown-value">23</span>
                                            <span class="countdown-heading">Hs</span>
                                        </div>
                                        <div class="countdown-container minutes">
                                            <span class="countdown-value">38</span>
                                            <span class="countdown-heading">Mins</span>
                                        </div>
                                        <div class="countdown-container seconds">
                                            <span class="countdown-value">27</span>
                                            <span class="countdown-heading">Sec</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-share-wrapper">
                                    <a href="'.$link_productdetails.'"><span class="product-name" style="  overflow: hidden; text-overflow: ellipsis; max-height: 3em; line-height: 1.5em;">'.$Name.'</span></a>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button href="index.php" type="button" class="btn-setting-text share-text" >
                                                Sửa sản phẩm
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Xóa sản phẩm
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <div style="display: flex; justify-content: space-between; align-items: center">'.$cert.'<span class=""><b style="color: #f27322">Lượt bán:</b> '.$best_saler.'</div>
                                <br>
                                <div style="overflow: hidden; text-overflow: ellipsis; max-height: 3em; line-height: 1.5em;"><span style="font-weight: 400; font-size: 15px; margin-top: 20px; ">'.$Describe.'</span></div>
                                '.$gia.'
                            </div>
                        </div>
                        <!-- end single product -->
                        '; } echo'

                    </div>
                    <div class="tab-pane row g-5 d-flex fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <!-- start single product -->
                        <div class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="product-details.html">
                                        <img src="view/layout/assets/images/portfolio/portfolio-09.jpg" alt="NFT_portfolio">
                                    </a>
                                    <a href="product-details.html" class="btn btn-primary">Place Bid</a>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="author.html" class="avatar" data-tooltip="Sadikur Ali"><img src="view/layout/assets/images/client/client-2.png" alt="Nft_Profile"></a>
                                        <a href="author.html" class="avatar" data-tooltip="Ali"><img src="view/layout/assets/images/client/client-3.png" alt="Nft_Profile"></a>
                                        <a href="author.html" class="avatar" data-tooltip="Sadikur"><img src="view/layout/assets/images/client/client-4.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">9+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

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
                                <a href="product-details.html"><span class="product-name">BadBo66</span></a>
                                <span class="latest-bid">Highest bid 6/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">0.234wETH</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single product -->
                    </div>
                    ';
                }
            ?>
            <div class="tab-content rn-bid-content" id="nav-tabContent">
                <div class="tab-pane row g-5 d-flex fade" id="nav-TRANG CHỦ" role="tabpanel" aria-labelledby="nav-TRANG CHỦ-tab">
                    <!-- start single product -->
                    <div class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-one no-overlay with-placeBid">
                            <div class="card-thumbnail">
                                <a href="product-details.html">
                                    <img src="view/layout/assets/images/portfolio/portfolio-09.jpg" alt="NFT_portfolio">
                                </a>
                                <a href="product-details.html" class="btn btn-primary">Place Bid</a>
                            </div>
                            <div class="product-share-wrapper">
                                <div class="profile-share">
                                    <a href="author.html" class="avatar" data-tooltip="Sadikur Ali"><img src="view/layout/assets/images/client/client-2.png" alt="Nft_Profile"></a>
                                    <a href="author.html" class="avatar" data-tooltip="Ali"><img src="view/layout/assets/images/client/client-3.png" alt="Nft_Profile"></a>
                                    <a href="author.html" class="avatar" data-tooltip="Sadikur"><img src="view/layout/assets/images/client/client-4.png" alt="Nft_Profile"></a>
                                    <a class="more-author-text" href="#">9+ Place Bit.</a>
                                </div>
                                <div class="share-btn share-btn-activation dropdown">
                                    <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                        </svg>
                                    </button>

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
                            <a href="product-details.html"><span class="product-name">BadBo66</span></a>
                            <span class="latest-bid">Highest bid 6/20</span>
                            <div class="bid-react-area">
                                <div class="last-bid">0.234wETH</div>
                                <div class="react-area">
                                    <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                        <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                    </svg>
                                    <span class="number">322</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single product -->
                </div>
                <div class="tab-pane row g-5 d-flex fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <!-- start single product -->
                    <div class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-one no-overlay with-placeBid">
                            <div class="card-thumbnail">
                                <a href="product-details.html">
                                    <img src="view/layout/assets/images/portfolio/portfolio-06.jpg" alt="NFT_portfolio">
                                </a>
                                <a href="product-details.html" class="btn btn-primary">Place Bid</a>
                            </div>
                            <div class="product-share-wrapper">
                                <div class="profile-share">
                                    <a href="author.html" class="avatar" data-tooltip="Tawhid Sabir"><img src="view/layout/assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                    <a href="author.html" class="avatar" data-tooltip="Tawhid"><img src="view/layout/assets/images/client/client-10.png" alt="Nft_Profile"></a>
                                    <a href="author.html" class="avatar" data-tooltip="Sabir"><img src="view/layout/assets/images/client/client-11.png" alt="Nft_Profile"></a>
                                    <a class="more-author-text" href="#">5+ Place Bit.</a>
                                </div>
                                <div class="share-btn share-btn-activation dropdown">
                                    <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                        </svg>
                                    </button>

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
                            <a href="product-details.html"><span class="product-name">NameStroam</span></a>
                            <span class="latest-bid">Highest bid 1/20</span>
                            <div class="bid-react-area">
                                <div class="last-bid">0.244wETH</div>
                                <div class="react-area">
                                    <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                        <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                    </svg>
                                    <span class="number">532</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single product -->

                </div>
                <div class="tab-pane row g-5 d-flex fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <!-- start single product -->
                    <div class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-style-one no-overlay with-placeBid">
                            <div class="card-thumbnail">
                                <a href="product-details.html">
                                    <img src="view/layout/assets/images/portfolio/portfolio-09.jpg" alt="NFT_portfolio">
                                </a>
                                <a href="product-details.html" class="btn btn-primary">Place Bid</a>
                            </div>
                            <div class="product-share-wrapper">
                                <div class="profile-share">
                                    <a href="author.html" class="avatar" data-tooltip="Sadikur Ali"><img src="view/layout/assets/images/client/client-2.png" alt="Nft_Profile"></a>
                                    <a href="author.html" class="avatar" data-tooltip="Ali"><img src="view/layout/assets/images/client/client-3.png" alt="Nft_Profile"></a>
                                    <a href="author.html" class="avatar" data-tooltip="Sadikur"><img src="view/layout/assets/images/client/client-4.png" alt="Nft_Profile"></a>
                                    <a class="more-author-text" href="#">9+ Place Bit.</a>
                                </div>
                                <div class="share-btn share-btn-activation dropdown">
                                    <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                        </svg>
                                    </button>

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
                            <a href="product-details.html"><span class="product-name">BadBo66</span></a>
                            <span class="latest-bid">Highest bid 6/20</span>
                            <div class="bid-react-area">
                                <div class="last-bid">0.234wETH</div>
                                <div class="react-area">
                                    <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                        <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                    </svg>
                                    <span class="number">322</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single product -->
                </div>
                
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="rn-popup-modal share-modal-wrapper modal fade" id="shareModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content share-wrapper">
                <div class="modal-header share-area">
                    <h5 class="modal-title">Chia sẽ với bạn bè</h5>
                </div>
                <div class="modal-body">
                    <ul class="social-share-default">
                        <li><a href="#"><span class="icon"><i data-feather="facebook"></i></span><span class="text">facebook</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="twitter"></i></span><span class="text">twitter</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="linkedin"></i></span><span class="text">linkedin</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="instagram"></i></span><span class="text">instagram</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="youtube"></i></span><span class="text">youtube</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    