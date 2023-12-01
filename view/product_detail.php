<?php
extract($product_select_id);
product_view_count($idProduct);
$category_select_by_id = category_select_by_id($idCategories);
$user_select_by_id = user_select_by_id($idUser);
extract($category_select_by_id);
extract($user_select_by_id);


$cert = '';
$gia = '';
if ($Test == 1) {
    $cert .= '<i class="feather-check-circle" style="padding-right: 5px; color: #f27322;"></i><span class="more-author-text" style="color: #f27322;">Đã kiểm duyệt</span>';
} else {
    $cert .= '<i class="feather-x-circle" style="padding-right: 5px; color: gray;"></i><span class="more-author-text" style="color: gray;">Chưa kiểm duyệt</span>';
}
if ($Price_2 == 0) {
    $gia .= '<div class="top-seller-wrapper">
                        <div class="last-bid" style="font-size: 30px; font-weight: bold; color: #f27322;">' . $Price . ' PCoin</div>
                    </div>
                    <i><span class="last-bid">1 PCoin = 1.000 VNĐ</span></i>
                </div>
            </div>
            <div class="bid-list left-bid">
                <h6 class="title">Thời gian khuyến mãi</h6>
                <span class="last-bid">Không có khuyến mãi !</span>
                <div class="countdown mt--15" data-date="0">
                <div class="countdown-container days">
                        <span class="countdown-value">00</span>
                        <span class="countdown-heading">Ds</span>
                    </div>
                    <div class="countdown-container hours">
                        <span class="countdown-value">00</span>
                        <span class="countdown-heading">Hs</span>
                    </div>
                    <div class="countdown-container minutes">
                        <span class="countdown-value">00</span>
                        <span class="countdown-heading">Mins</span>
                    </div>
                    <div class="countdown-container seconds">
                        <span class="countdown-value">00</span>
                        <span class="countdown-heading">Sec</span>
                    </div>
                </div>
            </div>';
} else {
    $gia .= '<div class="top-seller-wrapper">
                        <div class="last-bid" style="font-size: 30px; font-weight: bold; color: #f27322;">' . $Price_2 . ' PCoin</div>
                    </div>
                    <del><div class="last-bid" style="font-size: 20px; font-weight: bold; color: gray;">' . $Price . ' PCoin</div></del>
                    <i><span class="last-bid">1 PCoin = 1.000 VNĐ</span></i>
                </div>
            </div>
            <div class="bid-list left-bid">
                <h6 class="title">Thời gian khuyến mãi</h6>
                <div class="countdown mt--15" data-date="' . $Date_Sale . '">
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
            </div>';
}
$html_cmt = '';
foreach ($all_cmt as $value) {
    extract($value);
    $user = user_select_by_id($idUser);
    $html_cmt .= '<div class="forum-single-ans">
                            <div class="ans-header">
                                <a href="author.html"><img src="view/layout/assets/images/client/' . $user['Avata_img'] . '" alt="Nft-Profile"></a>
                                <a href="author.html">
                                    <p class="name">' . $user['Name_U'] . '</p>
                                </a>
                                <div class="date">
                                    <i class="feather-watch"></i>
                                    <span>' . date("H:i d/m/Y", strtotime($Date)) . '</span>
                                </div>
                            </div>
                            <div class="ans-content">
                                <p>' . $Content . '</p>
                                <div class="reaction">
                                    <a href="#" class="like">
                                        <i class="feather-thumbs-up"></i>
                                        <span>27 Like</span>
                                    </a>
                                    <a href="#" class="dislike">
                                        <i class="feather-thumbs-down"></i>
                                        <span>27 dislike</span>
                                    </a>
                                </div>
                                <hr class="form-ans-separator">
                            </div>
                        </div>';
}

?>
<!-- start page title area -->
<div class="rn-breadcrumb-inner ptb--30">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <h5 class="title text-center text-md-start"><?php echo $Name; ?>
                </h5>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-list">
                    <li class="item"><a href="index.html">Home</a></li>
                    <li class="separator"><i class="feather-chevron-right"></i></li>
                    <li class="item current"><?php echo $Name; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end page title area -->

<!-- start product details area -->
<div class="product-details-area rn-section-gapTop">
    <div class="container">
        <div class="row g-1" style="justify-content: space-between;">
            <!-- product image area -->

            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="product-tab-wrapper rbt-sticky-top-adjust">
                    <div class="">
                        <!-- <div class="nav rn-pd-nav rn-pd-rt-content nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <span class="rn-pd-sm-thumbnail">
                                        <img src="view/layout/assets/images/portfolio/sm/<?php echo $img ?>" alt="Nft_Profile">
                                    </span>
                                </button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    <span class="rn-pd-sm-thumbnail">
                                        <img src="view/layout/assets/images/portfolio/sm/<?php echo $img1 ?>" alt="Nft_Profile">
                                    </span>
                                </button>
                            </div> -->

                        <div class="tab-content rn-pd-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="rn-pd-thumbnail">
                                    <img src="view/layout/assets/images/portfolio/lg/<?php echo $img ?>" alt="Nft_Profile">
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="rn-pd-thumbnail">
                                        <img src="view/layout/assets/images/portfolio/sm/<?php echo $img1 ?>" alt="Nft_Profile">
                                    </div>
                                </div> -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- product image area end -->

            <div class="col-lg-5 col-md-12 col-sm-12 mt_md--50 mt_sm--60">
                <div class="rn-pd-content-area">
                    <div class="pd-title-area">
                        <h4 class="title"><?php echo $Name; ?></h4>
                        <div class="pd-react-area">
                            <div class="heart-count">
                                <i data-feather="eye"></i>
                                <span><?php echo $view; ?></span>
                            </div>
                            <div class="count">
                                <div class="share-btn share-btn-activation dropdown">
                                    <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="true">
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
                        </div>
                    </div>


                    <div class="catagory-collection">
                        <div class="catagory">
                            <?= $cert ?> |
                            <span class="more-author-text" style="color: #f27322;"><i class="feather-bookmark" style="padding-right: 5px;"></i><b><?php echo $Name_C ?></b></span><br><br>
                            <span>Người bán:</span>
                            <div class="top-seller-inner-one">
                                <div class="top-seller-wrapper">
                                    <div class="thumbnail">
                                        <a href="#"><img src="view/layout/assets/images/client/<?php echo $Avata_img ?>" alt="Nft_Profile"></a>
                                    </div>
                                    <div class="top-seller-content">
                                        <a href="#">
                                            <h6 class="name"><?php echo $Name_U ?></h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rn-bid-details">
                        <div class="tab-wrapper-one">
                            <!-- <nav class="tab-button-one">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">Bids</button>
                                        <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Details</button>
                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">History</button>
                                    </div>
                                </nav> -->
                            <div class="tab-content rn-bid-content" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <!-- single -->
                                    <div class="rn-pd-bd-wrapper">
                                        <!-- single -->

                                        <div class="rn-pd-sm-property-wrapper">
                                            <h6 class="pd-property-title">
                                                Mô tả
                                            </h6>
                                            <div class="property-wrapper">
                                                <!-- single property -->
                                                <div class="pd-property-inner">
                                                    <span class="color-white value"><?php echo $Describe; ?></span>
                                                </div>
                                                <!-- single property End -->
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <!-- single -->

                                        <!-- single -->
                                    </div>
                                    <!-- single -->
                                </div>

                            </div>
                        </div>
                        <div class="place-bet-area">
                            <div class="rn-bet-create">
                                <div class="bid-list winning-bid left-bid">
                                    <h6 class="title">Phí giao dịch: </h6>
                                    <div class="top-seller-inner-one">
                                        <?= $gia ?>

                                    </div>
                                    <!-- <a class="btn btn-primary-alta mt--30" href="#">Place a Bid</a> -->
                                    <div style="display: flex; justify-content: space-between; gap: 5px;">
                                        <form action="index.php?pg=shopping_cart" method="post">
                                            <input type="hidden" name="masp" value="<?php echo $idProduct; ?>">
                                            <input type="hidden" name="iduser" value="<?php echo $idUser; ?>">
                                            <input type="hidden" name="idcate" value="<?php echo $idCategories; ?>">
                                            <input type="hidden" name="tensp" value="<?php echo $Name; ?>">
                                            <input type="hidden" name="hinh" value="<?php echo $img; ?>">
                                            <input type="hidden" name="gia" value="<?php echo $Price; ?>">
                                            <input type="hidden" name="gia2" value="<?php echo $Price_2; ?>">
                                            <input type="hidden" name="test" value="<?php echo $Test; ?>">
                                            <button type="submit" name="addcart" class="btn btn-primary-alta mt--30"><i class="feather-shopping-cart"></i> TẢI VỀ NGAY </button>
                                        </form>
                                        <!-- <button type="button" class="btn btn-primary-alta mt--30" data-bs-toggle="modal" data-bs-target="#placebidModal" style="background-color:#F27322;">TẢI TÀI NGUYÊN VỀ</button> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End product details area -->

        <div class="nu-community-area rn-section-gapTop" style="padding-top: 50px;">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="community-content-wrapper">
                            <!-- start Community single box -->
                            <div class="single-community-box">
                                <div class="community-content">
                                    <h3 class="title">Mô tả chi tiết</h3>
                                    <p class="desc">
                                        <?php echo $Instruct; ?>
                                    </p>
                                </div>
                            </div>
                            <br>
                            <!-- end Community single box -->
                            <h3 class="title mb--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Comment</h3><a style="color: #f27322;" href="post_details.html" class="comments">
                                <i class="feather-message-circle"></i>
                                <span><?= $count_comment ?> Comments</span>
                            </a>

                            
                            <!-- comment Box -->
                            <?php
                            if (isset($_SESSION['user']) && check_cmt($_SESSION['user']['idUser'], $idProduct) > 0) {
                                echo '<form action="index.php?pg=product_detail&idProduct='.$idProduct.'" method="post">
                                        <div class="forum-input-ans-wrapper">
                                            <img src="view/layout/assets/images/client/'.$_SESSION['user']['Avata_img'].'" alt="Nft-Profile">
                                            <input type="text" name="content" placeholder="Bình luận của bạn...">
                                            <button name="btnCmt" type="submit" class="btn btn-primary rounded">Bình luận</button>
                                        </div>
                                    </form>';
                            }
                            ?>

                            <!-- comment Box -->
                            <!-- answers box -->
                            <div class="forum-ans-box">
                                <!-- single answer -->
                                <?= $html_cmt ?>
                            </div>
                            <!-- single answer End -->
                            <!-- single answer -->
                            <!-- <div class="forum-single-ans">
                                <div class="ans-header">
                                    <a href="author.html"><img src="view/layout/assets/images/client/client-4.png" alt="Nft-Profile"></a>
                                    <a href="author.html">
                                        <p class="name">@Jone Lee</p>
                                    </a>
                                    <div class="date">
                                        <i class="feather-watch"></i>
                                        <span>7 days ago</span>
                                    </div>
                                </div>
                                <div class="ans-content">
                                    <p>
                                        Check regularly the website, cause I’m in the same situation. They will add more
                                        artists sooner or later, check also the discord channel they have. But most
                                        important, be patient and keep sharing your work in other social media But most
                                        important, be patient and keep sharing your work in other social media</p>
                                    <div class="reaction">
                                        <a href="#" class="like">
                                            <i class="feather-thumbs-up"></i>
                                            <span>27 Like</span>
                                        </a>
                                        <a href="#" class="dislike">
                                            <i class="feather-thumbs-down"></i>
                                            <span>27 dislike</span>
                                        </a>
                                    </div>
                                    <hr class="form-ans-separator">
                                </div>
                            </div> -->
                            <!-- single answer End -->
                            <!-- single answer -->
                            <!-- <div class="forum-single-ans">
                                <div class="ans-header">
                                    <a href="author.html"><img src="view/layout/assets/images/client/client-5.png" alt="Nft-Profile"></a>
                                    <a href="author.html">
                                        <p class="name">@Alamin</p>
                                    </a>
                                    <div class="date">
                                        <i class="feather-watch"></i>
                                        <span>9 days ago</span>
                                    </div>
                                </div>
                                <div class="ans-content">
                                    <p>
                                        Check regularly the website, cause I’m in the same situation. They will add more
                                        artists sooner or later, check also the discord channel they have. But most
                                        important, be patient and keep sharing your work in other social media But most
                                        important, be patient and keep sharing your work in other social media</p>
                                    <div class="reaction">
                                        <a href="#" class="like">
                                            <i class="feather-thumbs-up"></i>
                                            <span>27 Like</span>
                                        </a>
                                        <a href="#" class="dislike">
                                            <i class="feather-thumbs-down"></i>
                                            <span>27 dislike</span>
                                        </a>
                                    </div>
                                    <hr class="form-ans-separator">
                                </div>
                            </div> -->
                            <!-- single answer End -->
                            <!-- single answer -->
                            <!-- <div class="forum-single-ans">
                                <div class="ans-header">
                                    <a href="author.html"><img src="view/layout/assets/images/client/client-6.png" alt="Nft-Profile"></a>
                                    <a href="author.html">
                                        <p class="name">@Mikle</p>
                                    </a>
                                    <div class="date">
                                        <i class="feather-watch"></i>
                                        <span>11 days ago</span>
                                    </div>
                                </div>
                                <div class="ans-content">
                                    <p>
                                        Check regularly the website, cause I’m in the same situation. They will add more
                                        artists sooner or later, check also the discord channel they have. But most
                                        important, be patient and keep sharing your work in other social media But most
                                        important, be patient and keep sharing your work in other social media</p>
                                    <div class="reaction">
                                        <a href="#" class="like">
                                            <i class="feather-thumbs-up"></i>
                                            <span>27 Like</span>
                                        </a>
                                        <a href="#" class="dislike">
                                        <i class="feather-thumbs-down"></i>
                                            <span>27 dislike</span>
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                            <!-- single answer End -->
                        </div>
                        <!-- answers box End -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- New items Start -->
    <div class="rn-new-items rn-section-gapTop">
        <div class="container">
            <div class="row mb--30 align-items-center">
                <div class="col-12">
                    <h3 class="title mb--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Recent View</h3>
                </div>
            </div>
            <div class="row g-5">
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="view/layout/assets/images/portfolio/portfolio-01.jpg" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="view/layout/assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Jone Due"><img src="view/layout/assets/images/client/client-2.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Nisat Tara"><img src="view/layout/assets/images/client/client-3.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">9+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
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
                <!-- end single product -->

                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="200" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="view/layout/assets/images/portfolio/portfolio-02.jpg" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="view/layout/assets/images/client/client-4.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Nira Ara"><img src="view/layout/assets/images/client/client-5.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Fatima Afrafy"><img src="view/layout/assets/images/client/client-6.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">10+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a href="product-details.html"><span class="product-name">Diamond Dog</span></a>
                        <span class="latest-bid">Highest bid 5/11</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.892wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">420</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->

                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="250" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="view/layout/assets/images/portfolio/portfolio-03.jpg" alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="view/layout/assets/images/client/client-1.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Janin Ara"><img src="view/layout/assets/images/client/client-8.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="Atif Islam"><img src="view/layout/assets/images/client/client-9.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">10+ Place Bit.</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a href="product-details.html"><span class="product-name">OrBid6</span></a>
                        <span class="latest-bid">Highest bid 2/31</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.2128wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">12</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->

                <!-- start single product -->

                <!-- end single product -->
                <!-- start single product -->

                <!-- end single product -->
            </div>
        </div>
    </div>
    <?php

    ?>