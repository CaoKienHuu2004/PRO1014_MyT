 
 <?php 
    // Sản phẩm giảm giá-------------------------------------------------------------------------------------------------------
    $html_product_sale = '';
    foreach ($product_select_sale as $item) {
        extract($item);
        $cert = "";
        if ($Test == 1) {
            $cert = '<i class="feather-check-circle" style="padding-right: 5px; color: #f27322;"></i><span class="more-author-text" style="color: #f27322;">Đã kiểm duyệt</span>';
        }else {
            $cert = '<i class="feather-x-circle" style="padding-right: 5px; color: gray;"></i><span class="more-author-text" >Chưa kiểm duyệt</span>';
        }
        $html_product_sale .='
            <!-- start single product -->
            <div class="single-slide-product">
                <div class="product-style-one">
                    <div class="card-thumbnail">
                        <a href="product-details.html"><img src="view/layout/assets/images/product/'.$img.'" alt="NFT_portfolio"></a>
                        <div class="countdown" data-date="'.$Date_Sale.'">
                            <div class="countdown-container days">
                                <span class="countdown-value">0</span>
                                <span class="countdown-heading">Ngày</span>
                            </div>
                            <div class="countdown-container hours">
                                <span class="countdown-value">0</span>
                                <span class="countdown-heading">Giờ</span>
                            </div>
                            <div class="countdown-container minutes">
                                <span class="countdown-value">0</span>
                                <span class="countdown-heading">Phút</span>
                            </div>
                            <div class="countdown-container seconds">
                                <span class="countdown-value">0</span>
                                <span class="countdown-heading">Giây</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-share-wrapper">
                        <a href="product-details.html"><span class="product-name" style="margin: 0px;  overflow: hidden; text-overflow: ellipsis; max-height: 3em; line-height: 1.5em;">'.$Name.'</span></a>
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
                    '.$cert.'
                    <div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price_2.' PCoin</h6>
                        <div class="react-area">
                            <i class="feather-shopping-cart" style="padding-right: 10px;"></i> 
                            <span class="number"><a href="" style="color: gray">Giỏ hàng</a></span>
                        </div>
                    </div>
                <span class="last-bid" style="margin: 0px;"><del>'.$Price.' PCoin</del></span>
                </div>
            </div>
            <!-- end single product -->
        ';
    }

    // Sản phẩm bán chạy-------------------------------------------------------------------------------------------------------
    $html_product_all = '';
    foreach ($product_select_all as $item) {
        extract($item);
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
                            <i class="feather-shopping-cart" style="padding-right: 10px;"></i> 
                            <span class="number">Giỏ hàng</span>
                        </div>
                    </div>';
        }else {
            $gia = '<div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price_2.' PCoin</h6>
                        <div class="react-area">
                            <i class="feather-shopping-cart" style="padding-right: 10px;"></i> 
                            <span class="number">Giỏ hàng</span>
                        </div>
                    </div>
                    <span class="last-bid" style="margin: 0px;"><del>'.$Price.' PCoin</del></span>';
        }
        $html_product_all .='
        <!-- start single product -->
        <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800" class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="product-style-one overlay">
                <div class="card-thumbnail">
                    <a href="product-details.html"><img style="width: 100%;" src="view/layout/assets/images/product/'.$img.'" alt="NFT_portfolio"></a>
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
                    <a href="product-details.html"><span class="product-name" style="  overflow: hidden; text-overflow: ellipsis; max-height: 3em; line-height: 1.5em;">'.$Name.'</span></a>
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
                <div style="display: flex; justify-content: space-between; align-items: center">'.$cert.'<span class=""><b style="color: #f27322">Lượt bán:</b> '.$best_saler.'</div>
                <br>
                <div style="overflow: hidden; text-overflow: ellipsis; max-height: 3em; line-height: 1.5em;"><span style="font-weight: 400; font-size: 15px; margin-top: 20px; ">'.$Describe.'</span></div>
                '.$gia.'
            </div>
        </div>
        <!-- end single product -->
        ';
    }
 ?>
 
 <!-- start page title area -->
 <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">TÀI NGUYÊN SẢN PHẨM</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="index.php">Home</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">TÀI NGUYÊN SẢN PHẨM</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->


    <!-- Explore Style Carousel -->
    <div class="rn-live-bidding-area rn-section-gapTop">
        <div class="container">
            <div class="row mb--30">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="title mb--0 live-bidding-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">GIẢM GIÁ GIỜ VÀNG</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="banner-one-slick slick-activation-05 slick-arrow-style-one slick-arrow-style-one rn-slick-dot-style slick-gutter-15">
                    <?=$html_product_sale?>
                </div>
            </div>
        </div>
    </div>
    <!-- Explore Style Carousel End-->
    
    <!-- next product -->
    <div class="rn-product-area rn-section-gapTop">
        <div class="container">
            <div class="row mb--50 align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h3 class="title mb--0 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"></h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--15">
                    <div class="view-more-btn text-start text-sm-end sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <button class="discover-filter-button discover-filter-activation btn btn-primary">Filter<i class="feather-filter"></i></button>
                    </div>
                </div>
            </div>

            <div class="default-exp-wrapper default-exp-expand">
                <div class="inner">
                    <div class="filter-select-option">
                        <label class="filter-leble">Giống</label>
                        <select style="display: none;">
                            <option data-display="Chưa chọn"></option>
                            <option value="1">Mới ra mắt</option>
                            <option value="1">Quan tâm nhất</option>
                            <option value="1">Bán chạy nhất</option>
                        </select>
                    </div>

                    <div class="filter-select-option">
                        <label class="filter-leble">Chuyên mục</label>
                        <select style="display: none;">
                            <option data-display="Chưa chọn"></option>
                            <option value="1">Lập Trình</option>
                            <option value="1">Đồ Họa</option>
                        </select>
                    </div>

                    <div class="filter-select-option">
                        <label class="filter-leble">Collections</label>
                        <select style="display: none;">
                            <option data-display="Collections">Collections</option>
                            <option value="1">BoredApeYachtClub</option>
                            <option value="2">MutantApeYachtClub</option>
                            <option value="4">Art Blocks Factory</option>
                        </select><div class="nice-select" tabindex="0"><span class="current">Collections</span><ul class="list"><li data-value="Collections" data-display="Collections" class="option selected">Collections</li><li data-value="1" class="option">BoredApeYachtClub</li><li data-value="2" class="option">MutantApeYachtClub</li><li data-value="4" class="option">Art Blocks Factory</li></ul></div>
                    </div>

                    <div class="filter-select-option">
                        <label class="filter-leble">Sale type</label>
                        <select style="display: none;">
                            <option data-display="Sale type">Sale type</option>
                            <option value="1">Fixed price</option>
                            <option value="2">Timed auction</option>
                            <option value="4">Not for sale</option>
                            <option value="4">Open for offers</option>
                        </select><div class="nice-select" tabindex="0"><span class="current">Sale type</span><ul class="list"><li data-value="Sale type" data-display="Sale type" class="option selected">Sale type</li><li data-value="1" class="option">Fixed price</li><li data-value="2" class="option">Timed auction</li><li data-value="4" class="option">Not for sale</li><li data-value="4" class="option">Open for offers</li></ul></div>
                    </div>

                    <div class="filter-select-option">
                        <label class="filter-leble">Price Range</label>
                        <div class="price_filter s-filter clear">
                            <form action="#" method="GET">
                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 18.3673%; width: 40.8163%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 18.3673%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 59.1837%;"></span></div>
                                <div class="slider__range--output">
                                    <div class="price__output--wrap">
                                        <div class="price--output">
                                            <span>Price :</span><input type="text" id="amount" readonly="">
                                        </div>
                                        <div class="price--filter">
                                            <a class="btn btn-primary btn-small" href="#">Filter</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <?=$html_product_all?>                
            </div>
        </div>
    </div>
    <!-- end product -->