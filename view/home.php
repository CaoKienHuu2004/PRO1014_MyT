
<?php 

    // Sản phẩm giảm giá-------------------------------------------------------------------------------------------------------
    $html_product_sale = '';
    foreach ($product_select_sale as $item) {
        extract($item);
       $link_productdetails = 'index.php?pg=product_detail&idProduct='.$idProduct;
        $link_userdetails = 'index.php?pg=user&idUser='.$idUser;
        $btn_cart = '';
        if (isset($_SESSION['user'])&&($_SESSION['user']['idUser']==$idUser)||isset($_SESSION['user'])&& ( order_product_idUser_all($_SESSION['user']['idUser'], $idProduct))) {
            $btn_cart .= '<i class="feather-download" style="padding-right: 5px;"></i>
            <form action="view/layout/assets/files/'.$File.'" method="post">
                <button style="border: none;" type="submit" name="addcart" class="number">Tải về</button>
            </form>
            ';
        }else{
            $btn_cart .= '<i class="feather-shopping-cart" style="padding-right: 5px;"></i>
            <form action="index.php?pg=shopping_cart" method="post">
                <input type="hidden" name="masp" value="'.$idProduct.'">
                <input type="hidden" name="iduser" value="'.$idUser.'">
                <input type="hidden" name="idcate" value="'.$idCategories.'">
                <input type="hidden" name="tensp" value="'.$Name.'">
                <input type="hidden" name="hinh" value="'.$img.'">
                <input type="hidden" name="gia" value="'.$Price.'">
                <input type="hidden" name="gia2" value="'.$Price_2.'">
                <input type="hidden" name="test" value="'.$Test.'">
                <button style="border: none;" type="submit" name="addcart" class="number">Giỏ hàng</button>
            </form>';
        }
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
                        <a href="'.$link_productdetails.'"><img src="view/layout/assets/images/product/'.$img.'" alt="NFT_portfolio"></a>
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
                        <a href="'.$link_productdetails.'"><span class="product-name" style="margin: 0px;  overflow: hidden; text-overflow: ellipsis; max-height: 3em; line-height: 1.5em;">'.$Name.'</span></a>
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
                            
                            '.$btn_cart.'
                        </div>
                    </div>
                <span class="last-bid" style="margin: 0px;"><del>'.$Price.' PCoin</del></span>
                </div>
            </div>
            <!-- end single product -->
        ';
    }

    // Danh mục -------------------------------------------------------------------------------------------------------
    $html_category_select_all = '';
    foreach ($category_select_all as $item) {
        extract($item);
        $link_productdetails = 'index.php?pg=product_detail&idProduct='.$idProduct;
        $html_category_select_all .='
            <!-- start single category -->
            <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                <a class="category-style-one" href="#">
                    <i class="feather-'.$Img_C.'"></i>
                    <span class="category-label">'.$Name_C.'</span>
                </a>
            </div>
            <!-- end single category -->
        ';
    }


    // Sản phẩm bán chạy-------------------------------------------------------------------------------------------------------
    $html_product_bestsaler = '';
    foreach ($product_select_bestsaler as $item) {
        extract($item);
       $link_productdetails = 'index.php?pg=product_detail&idProduct='.$idProduct;
        $link_userdetails = 'index.php?pg=user&idUser='.$idUser;
        $btn_cart = '';
        if (isset($_SESSION['user'])&&($_SESSION['user']['idUser']==$idUser)||isset($_SESSION['user'])&& ( order_product_idUser_all($_SESSION['user']['idUser'], $idProduct))) {
            $btn_cart .= '<i class="feather-download" style="padding-right: 5px;"></i>
            <form action="view/layout/assets/files/'.$File.'" method="post">
                <button style="border: none;" type="submit" name="addcart" class="number">Tải về</button>
            </form>
            ';
        }else{
            $btn_cart .= '<i class="feather-shopping-cart" style="padding-right: 5px;"></i>
            <form action="index.php?pg=shopping_cart" method="post">
                <input type="hidden" name="masp" value="'.$idProduct.'">
                <input type="hidden" name="iduser" value="'.$idUser.'">
                <input type="hidden" name="idcate" value="'.$idCategories.'">
                <input type="hidden" name="tensp" value="'.$Name.'">
                <input type="hidden" name="hinh" value="'.$img.'">
                <input type="hidden" name="gia" value="'.$Price.'">
                <input type="hidden" name="gia2" value="'.$Price_2.'">
                <input type="hidden" name="test" value="'.$Test.'">
                <button style="border: none;" type="submit" name="addcart" class="number">Giỏ hàng</button>
            </form>';
        }
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
                            '.$btn_cart.'
                        </div>
                    </div>';
        }else {
            $gia = '<div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price_2.' PCoin</h6>
                        <div class="react-area">
                            '.$btn_cart.'
                        </div>
                    </div>
                    <span class="last-bid" style="margin: 0px;"><del>'.$Price.' PCoin</del></span>';
        }
        $html_product_bestsaler .='
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

    // Sản phẩm bán chạy-------------------------------------------------------------------------------------------------------
    $html_product_view = '';
    foreach ($product_select_view as $item) {
        extract($item);
        $link_productdetails = 'index.php?pg=product_detail&idProduct='.$idProduct;
        $btn_cart = '';
                if (isset($_SESSION['user'])&&($_SESSION['user']['idUser']==$idUser)||isset($_SESSION['user'])&& ( order_product_idUser_all($_SESSION['user']['idUser'], $idProduct))) {
                    $btn_cart .= '<i class="feather-download" style="padding-right: 5px;"></i>
                    <form action="view/layout/assets/files/'.$File.'" method="post">
                        <button style="border: none;" type="submit" name="addcart" class="number">Tải về</button>
                    </form>
                    ';
                }else{
                    $btn_cart .= '<i class="feather-shopping-cart" style="padding-right: 5px;"></i>
                    <form action="index.php?pg=shopping_cart" method="post">
                        <input type="hidden" name="masp" value="'.$idProduct.'">
                        <input type="hidden" name="iduser" value="'.$idUser.'">
                        <input type="hidden" name="idcate" value="'.$idCategories.'">
                        <input type="hidden" name="tensp" value="'.$Name.'">
                        <input type="hidden" name="hinh" value="'.$img.'">
                        <input type="hidden" name="gia" value="'.$Price.'">
                        <input type="hidden" name="gia2" value="'.$Price_2.'">
                        <input type="hidden" name="test" value="'.$Test.'">
                        <button style="border: none;" type="submit" name="addcart" class="number">Giỏ hàng</button>
                    </form>';
                }
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
                            '.$btn_cart.'
                        </div>
                    </div>';
        }else {
            $gia = '<div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price_2.' PCoin</h6>
                        <div class="react-area">
                            '.$btn_cart.'
                        </div>
                    </div>
                    <span class="last-bid" style="margin: 0px;"><del>'.$Price.' PCoin</del></span>';
        }
        $html_product_view .='
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

     // Sản phẩm với danh mục "Lập Trình"-------------------------------------------------------------------------------------------------------
     $html_product_category_0 = '';
     foreach ($product_select_category_0 as $item) {
         extract($item);
        $btn_cart = '';
                if (isset($_SESSION['user'])&&($_SESSION['user']['idUser']==$idUser)||isset($_SESSION['user'])&& ( order_product_idUser_all($_SESSION['user']['idUser'], $idProduct))) {
                    $btn_cart .= '<i class="feather-download" style="padding-right: 5px;"></i>
                    <form action="view/layout/assets/files/'.$File.'" method="post">
                        <button style="border: none;" type="submit" name="addcart" class="number">Tải về</button>
                    </form>
                    ';
                }else{
                    $btn_cart .= '<i class="feather-shopping-cart" style="padding-right: 5px;"></i>
                    <form action="index.php?pg=shopping_cart" method="post">
                        <input type="hidden" name="masp" value="'.$idProduct.'">
                        <input type="hidden" name="iduser" value="'.$idUser.'">
                        <input type="hidden" name="idcate" value="'.$idCategories.'">
                        <input type="hidden" name="tensp" value="'.$Name.'">
                        <input type="hidden" name="hinh" value="'.$img.'">
                        <input type="hidden" name="gia" value="'.$Price.'">
                        <input type="hidden" name="gia2" value="'.$Price_2.'">
                        <input type="hidden" name="test" value="'.$Test.'">
                        <button style="border: none;" type="submit" name="addcart" class="number">Giỏ hàng</button>
                    </form>';
                }
        $cert = "";
         if ($Test == 1) {
             $cert = '<i class="feather-check-circle" style="padding-right: 5px; color: #f27322;"></i><span class="more-author-text" style="color: #f27322;">Đã kiểm duyệt</span>';
         }else {
             $cert = '<i class="feather-x-circle" style="padding-right: 5px; color: gray;"></i><span class="more-author-text" >Chưa kiểm duyệt</span>';
         }
         $gia = "";
        if ($Price_2 == 0) {
            $gia = '<div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price.' PCoin</h6>
                        <div class="react-area">
                            '.$btn_cart.'
                        </div>
                    </div>';
        }else {
            $gia = '<div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price_2.' PCoin</h6>
                        <div class="react-area">
                            '.$btn_cart.'
                        </div>
                    </div>
                    <span class="last-bid" style="margin: 0px;"><del>'.$Price.' PCoin</del></span>';
        }
         $html_product_category_0 .='
             <!-- start single product -->
             <div class="single-slide-product">
                 <div class="product-style-one">
                     <div class="card-thumbnail">
                         <a href="'.$link_productdetails.'"><img src="view/layout/assets/images/product/'.$img.'" alt="NFT_portfolio"></a>
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
                         <a href="'.$link_productdetails.'"><span class="product-name" style="margin: 0px;  overflow: hidden; text-overflow: ellipsis; max-height: 3em; line-height: 1.5em;">'.$Name.'</span></a>
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
                    '.$gia.'
                 </div>
             </div>
             <!-- end single product -->
         ';
     }

     // Sản phẩm với danh mục "Đồ Họa"-------------------------------------------------------------------------------------------------------
     $html_product_category_1 = '';
     foreach ($product_select_category_1 as $item) {
         extract($item);
$btn_cart = '';
                if (isset($_SESSION['user'])&&($_SESSION['user']['idUser']==$idUser)||isset($_SESSION['user'])&& ( order_product_idUser_all($_SESSION['user']['idUser'], $idProduct))) {
                    $btn_cart .= '<i class="feather-download" style="padding-right: 5px;"></i>
                    <form action="view/layout/assets/files/'.$File.'" method="post">
                        <button style="border: none;" type="submit" name="addcart" class="number">Tải về</button>
                    </form>
                    ';
                }else{
                    $btn_cart .= '<i class="feather-shopping-cart" style="padding-right: 5px;"></i>
                    <form action="index.php?pg=shopping_cart" method="post">
                        <input type="hidden" name="masp" value="'.$idProduct.'">
                        <input type="hidden" name="iduser" value="'.$idUser.'">
                        <input type="hidden" name="idcate" value="'.$idCategories.'">
                        <input type="hidden" name="tensp" value="'.$Name.'">
                        <input type="hidden" name="hinh" value="'.$img.'">
                        <input type="hidden" name="gia" value="'.$Price.'">
                        <input type="hidden" name="gia2" value="'.$Price_2.'">
                        <input type="hidden" name="test" value="'.$Test.'">
                        <button style="border: none;" type="submit" name="addcart" class="number">Giỏ hàng</button>
                    </form>';
                }
        $cert = "";
         if ($Test == 1) {
             $cert = '<i class="feather-check-circle" style="padding-right: 5px; color: #f27322;"></i><span class="more-author-text" style="color: #f27322;">Đã kiểm duyệt</span>';
         }else {
             $cert = '<i class="feather-x-circle" style="padding-right: 5px; color: gray;"></i><span class="more-author-text" >Chưa kiểm duyệt</span>';
         }
         $gia = "";
        if ($Price_2 == 0) {
            $gia = '<div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price.' PCoin</h6>
                        <div class="react-area">
                            '.$btn_cart.'
                        </div>
                    </div>';
        }else {
            $gia = '<div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price_2.' PCoin</h6>
                        <div class="react-area">
                            '.$btn_cart.'
                        </div>
                    </div>
                    <span class="last-bid" style="margin: 0px;"><del>'.$Price.' PCoin</del></span>';
        }
         $html_product_category_1 .='
             <!-- start single product -->
             <div class="single-slide-product">
                 <div class="product-style-one">
                     <div class="card-thumbnail">
                         <a href="'.$link_productdetails.'"><img src="view/layout/assets/images/product/'.$img.'" alt="NFT_portfolio"></a>
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
                         <a href="'.$link_productdetails.'"><span class="product-name" style="margin: 0px;  overflow: hidden; text-overflow: ellipsis; max-height: 3em; line-height: 1.5em;">'.$Name.'</span></a>
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
                    '.$gia.'
                 </div>
             </div>
             <!-- end single product -->
         ';
     }

     // Sản phẩm với danh mục "Marketing"-------------------------------------------------------------------------------------------------------
     $html_product_category_2 = '';
     foreach ($product_select_category_2 as $item) {
         extract($item);
$btn_cart = '';
                if (isset($_SESSION['user'])&&($_SESSION['user']['idUser']==$idUser)||isset($_SESSION['user'])&& ( order_product_idUser_all($_SESSION['user']['idUser'], $idProduct))) {
                    $btn_cart .= '<i class="feather-download" style="padding-right: 5px;"></i>
                    <form action="view/layout/assets/files/'.$File.'" method="post">
                        <button style="border: none;" type="submit" name="addcart" class="number">Tải về</button>
                    </form>
                    ';
                }else{
                    $btn_cart .= '<i class="feather-shopping-cart" style="padding-right: 5px;"></i>
                    <form action="index.php?pg=shopping_cart" method="post">
                        <input type="hidden" name="masp" value="'.$idProduct.'">
                        <input type="hidden" name="iduser" value="'.$idUser.'">
                        <input type="hidden" name="idcate" value="'.$idCategories.'">
                        <input type="hidden" name="tensp" value="'.$Name.'">
                        <input type="hidden" name="hinh" value="'.$img.'">
                        <input type="hidden" name="gia" value="'.$Price.'">
                        <input type="hidden" name="gia2" value="'.$Price_2.'">
                        <input type="hidden" name="test" value="'.$Test.'">
                        <button style="border: none;" type="submit" name="addcart" class="number">Giỏ hàng</button>
                    </form>';
                }
        $cert = "";
         if ($Test == 1) {
             $cert = '<i class="feather-check-circle" style="padding-right: 5px; color: #f27322;"></i><span class="more-author-text" style="color: #f27322;">Đã kiểm duyệt</span>';
         }else {
             $cert = '<i class="feather-x-circle" style="padding-right: 5px; color: gray;"></i><span class="more-author-text" >Chưa kiểm duyệt</span>';
         }
         $gia = "";
        if ($Price_2 == 0) {
            $gia = '<div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price.' PCoin</h6>
                        <div class="react-area">
                            '.$btn_cart.'
                        </div>
                    </div>';
        }else {
            $gia = '<div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price_2.' PCoin</h6>
                        <div class="react-area">
                            '.$btn_cart.'
                        </div>
                    </div>
                    <span class="last-bid" style="margin: 0px;"><del>'.$Price.' PCoin</del></span>';
        }
         $html_product_category_2 .='
             <!-- start single product -->
             <div class="single-slide-product">
                 <div class="product-style-one">
                     <div class="card-thumbnail">
                         <a href="'.$link_productdetails.'"><img src="view/layout/assets/images/product/'.$img.'" alt="NFT_portfolio"></a>
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
                         <a href="'.$link_productdetails.'"><span class="product-name" style="margin: 0px;  overflow: hidden; text-overflow: ellipsis; max-height: 3em; line-height: 1.5em;">'.$Name.'</span></a>
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
                    '.$gia.'
                 </div>
             </div>
             <!-- end single product -->
         ';
     }

     // Sản phẩm với danh mục "GIÁO TRÌNH"-------------------------------------------------------------------------------------------------------
     $html_product_category_3 = '';
     foreach ($product_select_category_3 as $item) {
         extract($item);
$btn_cart = '';
                if (isset($_SESSION['user'])&&($_SESSION['user']['idUser']==$idUser)||isset($_SESSION['user'])&& ( order_product_idUser_all($_SESSION['user']['idUser'], $idProduct))) {
                    $btn_cart .= '<i class="feather-download" style="padding-right: 5px;"></i>
                    <form action="view/layout/assets/files/'.$File.'" method="post">
                        <button style="border: none;" type="submit" name="addcart" class="number">Tải về</button>
                    </form>
                    ';
                }else{
                    $btn_cart .= '<i class="feather-shopping-cart" style="padding-right: 5px;"></i>
                    <form action="index.php?pg=shopping_cart" method="post">
                        <input type="hidden" name="masp" value="'.$idProduct.'">
                        <input type="hidden" name="iduser" value="'.$idUser.'">
                        <input type="hidden" name="idcate" value="'.$idCategories.'">
                        <input type="hidden" name="tensp" value="'.$Name.'">
                        <input type="hidden" name="hinh" value="'.$img.'">
                        <input type="hidden" name="gia" value="'.$Price.'">
                        <input type="hidden" name="gia2" value="'.$Price_2.'">
                        <input type="hidden" name="test" value="'.$Test.'">
                        <button style="border: none;" type="submit" name="addcart" class="number">Giỏ hàng</button>
                    </form>';
                }
        $cert = "";
         if ($Test == 1) {
             $cert = '<i class="feather-check-circle" style="padding-right: 5px; color: #f27322;"></i><span class="more-author-text" style="color: #f27322;">Đã kiểm duyệt</span>';
         }else {
             $cert = '<i class="feather-x-circle" style="padding-right: 5px; color: gray;"></i><span class="more-author-text" >Chưa kiểm duyệt</span>';
         }
         $gia = "";
        if ($Price_2 == 0) {
            $gia = '<div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price.' PCoin</h6>
                        <div class="react-area">
                            '.$btn_cart.'
                        </div>
                    </div>';
        }else {
            $gia = '<div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price_2.' PCoin</h6>
                        <div class="react-area">
                            '.$btn_cart.'
                        </div>
                    </div>
                    <span class="last-bid" style="margin: 0px;"><del>'.$Price.' PCoin</del></span>';
        }
         $html_product_category_3 .='
             <!-- start single product -->
             <div class="single-slide-product">
                 <div class="product-style-one">
                     <div class="card-thumbnail">
                         <a href="'.$link_productdetails.'"><img src="view/layout/assets/images/product/'.$img.'" alt="NFT_portfolio"></a>
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
                         <a href="'.$link_productdetails.'"><span class="product-name" style="margin: 0px;  overflow: hidden; text-overflow: ellipsis; max-height: 3em; line-height: 1.5em;">'.$Name.'</span></a>
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
                    '.$gia.'
                 </div>
             </div>
             <!-- end single product -->
         ';
     }

     // Sản phẩm với danh mục "NGOẠI NGỮ"-------------------------------------------------------------------------------------------------------
     $html_product_category_4 = '';
     foreach ($product_select_category_4 as $item) {
         extract($item);
$btn_cart = '';
                if (isset($_SESSION['user'])&&($_SESSION['user']['idUser']==$idUser)||isset($_SESSION['user'])&& ( order_product_idUser_all($_SESSION['user']['idUser'], $idProduct))) {
                    $btn_cart .= '<i class="feather-download" style="padding-right: 5px;"></i>
                    <form action="view/layout/assets/files/'.$File.'" method="post">
                        <button style="border: none;" type="submit" name="addcart" class="number">Tải về</button>
                    </form>
                    ';
                }else{
                    $btn_cart .= '<i class="feather-shopping-cart" style="padding-right: 5px;"></i>
                    <form action="index.php?pg=shopping_cart" method="post">
                        <input type="hidden" name="masp" value="'.$idProduct.'">
                        <input type="hidden" name="iduser" value="'.$idUser.'">
                        <input type="hidden" name="idcate" value="'.$idCategories.'">
                        <input type="hidden" name="tensp" value="'.$Name.'">
                        <input type="hidden" name="hinh" value="'.$img.'">
                        <input type="hidden" name="gia" value="'.$Price.'">
                        <input type="hidden" name="gia2" value="'.$Price_2.'">
                        <input type="hidden" name="test" value="'.$Test.'">
                        <button style="border: none;" type="submit" name="addcart" class="number">Giỏ hàng</button>
                    </form>';
                }
        $cert = "";
         if ($Test == 1) {
             $cert = '<i class="feather-check-circle" style="padding-right: 5px; color: #f27322;"></i><span class="more-author-text" style="color: #f27322;">Đã kiểm duyệt</span>';
         }else {
             $cert = '<i class="feather-x-circle" style="padding-right: 5px; color: gray;"></i><span class="more-author-text" >Chưa kiểm duyệt</span>';
         }
         $gia = "";
        if ($Price_2 == 0) {
            $gia = '<div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price.' PCoin</h6>
                        <div class="react-area">
                            '.$btn_cart.'
                        </div>
                    </div>';
        }else {
            $gia = '<div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price_2.' PCoin</h6>
                        <div class="react-area">
                            '.$btn_cart.'
                        </div>
                    </div>
                    <span class="last-bid" style="margin: 0px;"><del>'.$Price.' PCoin</del></span>';
        }
         $html_product_category_4 .='
             <!-- start single product -->
             <div class="single-slide-product">
                 <div class="product-style-one">
                     <div class="card-thumbnail">
                         <a href="'.$link_productdetails.'"><img src="view/layout/assets/images/product/'.$img.'" alt="NFT_portfolio"></a>
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
                         <a href="'.$link_productdetails.'"><span class="product-name" style="margin: 0px;  overflow: hidden; text-overflow: ellipsis; max-height: 3em; line-height: 1.5em;">'.$Name.'</span></a>
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
                    '.$gia.'
                 </div>
             </div>
             <!-- end single product -->
         ';
     }

     // Sản phẩm với danh mục "TIN HỌC"-------------------------------------------------------------------------------------------------------
     $html_product_category_5 = '';
     foreach ($product_select_category_5 as $item) {
         extract($item);
       $link_productdetails = 'index.php?pg=product_detail&idProduct='.$idProduct;
        $link_userdetails = 'index.php?pg=user&idUser='.$idUser;
         $cert = "";
         if ($Test == 1) {
             $cert = '<i class="feather-check-circle" style="padding-right: 5px; color: #f27322;"></i><span class="more-author-text" style="color: #f27322;">Đã kiểm duyệt</span>';
         }else {
             $cert = '<i class="feather-x-circle" style="padding-right: 5px; color: gray;"></i><span class="more-author-text" >Chưa kiểm duyệt</span>';
         }
         $gia = "";
        if ($Price_2 == 0) {
            $gia = '<div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price.' PCoin</h6>
                        <div class="react-area">
                            '.$btn_cart.'
                        </div>
                    </div>';
        }else {
            $gia = '<div class="bid-react-area">
                        <h6 class="last-bid" style="margin: 0px;">'.$Price_2.' PCoin</h6>
                        <div class="react-area">
                            '.$btn_cart.'
                        </div>
                    </div>
                    <span class="last-bid" style="margin: 0px;"><del>'.$Price.' PCoin</del></span>';
        }
         $html_product_category_5 .='
             <!-- start single product -->
             <div class="single-slide-product">
                 <div class="product-style-one">
                     <div class="card-thumbnail">
                         <a href="'.$link_productdetails.'"><img src="view/layout/assets/images/product/'.$img.'" alt="NFT_portfolio"></a>
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
                         <a href="'.$link_productdetails.'"><span class="product-name" style="margin: 0px;  overflow: hidden; text-overflow: ellipsis; max-height: 3em; line-height: 1.5em;">'.$Name.'</span></a>
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
                    '.$gia.'
                 </div>
             </div>
             <!-- end single product -->
         ';
     }
    
?>
   
   <!-- banner 16 -->
   <div class="banner-area banner-16 pt--100 pb--120 pt_md--70 pt_sm--30 pb_md--90 pb_sm--50 bg-color--2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1 order-md-2 order-sm-2 order-2">
                    <div class="left-banner-16-wrapepr mt_md--100 mt_sm--100">
                        <h1 class="title">
                            Trao đổi & giao dịch <br><span> Tài nguyên học tập <br></span></h1>
                        <h6>MyT - STUDENT RESOURCE EXCHANGE WEBSITE</h6>
                        <p class="disc">Nơi trao đổi, giao dịch những tài liệu, tài nguyên học tập liên quan giữa các sinh viên và tất cả mọi người.</p>
                        <div class="button-group d-flex flex-wrap">
                            <a class="btn btn-large btn-primary mr--30" href="#01">Xem Ngay</a>
                            <?php 
                                if (isset($_SESSION['user'])) {
                                    echo '<a class="btn btn-large btn-primary-alta" href="index.php?pg=create_product">Chia sẻ tài nguyên <b class="feather-upload-cloud"></b></a> ';
                                }else{
                                    echo '<a class="btn btn-large btn-primary-alta" href="index.php?pg=login" onclick="thongbao()">Chia sẻ tài nguyên <b class="feather-upload-cloud"></b></a> ';
                                }
                            ?>
                            <script>function thongbao() {alert ('Bạn chưa đăng nhập, hãy đăng nhập nhé !');}</script>
                        </div>
                        <div class="odometer-area-slide ">
                            <div class="single-odometer" data-sal-delay="400" data-sal="slide-left" data-sal-duration="800">
                                <h3 class="counter">
                                    <span class="odometer" data-count="725">00</span>
                                    <span class="counter-label">Lượt giao dịch</span>
                                </h3>
                            </div>
                            <div class="single-odometer" data-sal-delay="600" data-sal="slide-left" data-sal-duration="800">
                                <h3 class="counter">
                                    <span class="odometer" data-count="950">00</span>
                                    <span class="counter-label">Thành viên</span>
                                </h3>
                            </div>
                            <div class="single-odometer" data-sal-delay="800" data-sal="slide-left" data-sal-duration="800">
                                <h3 class="counter">
                                    <span class="odometer" data-count="237">00</span>
                                    <span class="counter-label">Sản phẩm giao dịch</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-md-1 order-sm-1 order-1">
                    <div class="tilt-image-banner-16">
                        <img class="tilt" src="view/layout/assets/images/banner/banner-06.png" alt="Nft-profile">
                        <div class="joined-people-wrapper">
                            <div class="product-share-wrapper">
                                <div class="profile-share">
                                    <a href="author.html" class="avatar" data-tooltip="N.Hùng" tabindex="0"><img class="large" src="view/layout/assets/images/client/client-2.png" alt="Nft_Profile"></a>
                                    <a href="author.html" class="avatar" data-tooltip="Tuan Tran" tabindex="0"><img class="large" src="view/layout/assets/images/client/client-3.png" alt="Nft_Profile"></a>
                                    <a href="author.html" class="avatar" data-tooltip="Hựu" tabindex="0"><img class="large" src="view/layout/assets/images/client/client-5.png" alt="Nft_Profile"></a>
                                    <a href="author.html" class="avatar" data-tooltip="Hotb" tabindex="0"><img class="large" src="view/layout/assets/images/client/client-2.png" alt="Nft_Profile"></a>
                                    <a class="more-author-text" href="#" tabindex="0">+ 1k sinh viên </a>
                                </div>
                            </div>
                            <p class="disc">Hàng ngàn sinh viên đã tin dùng và trao đổi với nhau. Hãy tạo giao dịch tài nguyên của bạn !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner 16 ENd -->

<!-- Explore Style Carousel -->
<div class="rn-live-bidding-area rn-section-gapTop" id="01">
    <div class="container">
        <div class="row mb--50">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3 class="title mb--0 live-bidding-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">GIẢM GIÁ GIỜ VÀNG !</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-one-slick slick-activation-03 slick-arrow-style-one rn-slick-dot-style slick-gutter-15">
                    <?=$html_product_sale?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Explore Style Carousel End-->

    <!-- start category area -->
    <div class="category-area pt--110 pt_md--70 pt_sm--50">
        <div class="container">
            <div class="row g-5">
                <?=$html_category_select_all?>
            </div>
        </div>
    </div>
    <!-- end category area -->

    
<!-- New items Start -->
<div class="rn-new-items rn-section-gapTop">
    <div class="container">
        <div class="row mb--50 align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <h3 class="title mb--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">SẢN PHẨM BÁN CHẠY</h3>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--15">
                <div class="view-more-btn text-start text-sm-end" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <a class="btn-transparent" href="product.html">XEM TẤT CẢ<i data-feather="arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row g-5">
        <?=$html_product_bestsaler?>
        </div>
    </div>
</div>
<!-- New items End -->.

<!-- start service area -->
<div class="rn-service-area rn-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-12 mb--50">
                    <h3 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">TẠO VÀ GIAO DỊCH TRÊN MyT</h3>
                </div>
            </div>
            <div class="row g-5">
                <!-- start single service -->
                <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-6 col-12" >
                    <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800" class="rn-service-one color-shape-7">
                        <div class="inner">
                            <div class="icon">
                                <img src="view/layout/assets/images/icons/shape-1.png" alt="Shape">
                            </div>
                            <div class="subtitle">Bước 01</div>
                            <div class="content">
                                <h4 class="title"><a href="#">Tạo tài khoản / Đăng nhập</a></h4>
                                <p class="description">Hãy tạo tài khoản và gia nhập thành viên của MyT chúng tôi (Nếu bạn đã là thành viên, còn chần chờ gì mà vào nhà nào !)</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End single service -->
                <!-- start single service -->
                <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-6 col-12" >
                    <div data-sal="slide-up" data-sal-delay="200" data-sal-duration="800" class="rn-service-one color-shape-1">
                        <div class="inner">
                            <div class="icon">
                                <img src="view/layout/assets/images/icons/shape-6.png" alt="Shape">
                            </div>
                            <div class="subtitle">Bước 02</div>
                            <div class="content">
                                <h4 class="title"><a href="#">Xác thực tài khoản</a></h4>
                                <p class="description">Để chứng minh là một thành viên chất lượng, hãy xác thực danh tính của bạn, mọi người có thể biết đến bạn nhiều hơn.</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End single service -->
                <!-- start single service -->
                <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-6 col-12" >
                    <div data-sal="slide-up" data-sal-delay="250" data-sal-duration="800" class="rn-service-one color-shape-5">
                        <div class="inner">
                            <div class="icon">
                                <img src="view/layout/assets/images/icons/shape-5.png" alt="Shape">
                            </div>
                            <div class="subtitle">Bước 03</div>
                            <div class="content">
                                <h4 class="title"><a href="#">Tạo sản phẩm giao dịch</a></h4>
                                <p class="description">Hãy tạo ra một số sản phẩm giao dịch thật là chất lượng để có thể trao đổi trên cộng đồng MyT một cách lành mạnh !</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End single service -->
                
            </div>
        </div>
    </div>
    <!-- End service area -->

<!-- New items Start -->
<div class="rn-new-items rn-section-gapTop">
    <div class="container">
        <div class="row mb--50 align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <h3 class="title mb--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">QUAN TÂM NHIỀU NHẤT</h3>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--15">
                <div class="view-more-btn text-start text-sm-end" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <a class="btn-transparent" href="product.html">XEM TẤT CẢ<i data-feather="arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <?=$html_product_view?>
        </div>
    </div>
</div>
<!-- New items End -->

    <!-- start subscribe area -->
    <div class="nu-subscribe-area rn-section-gapTop" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscribe-wrapper_1 text-center">
                        <h3 class="title mb--10">Nhận thông báo ưu đãi giao dịch</h3>
                        <p class="subtitle">Hàng tuần, chúng tôi sẽ gửi đến cho bạn những giao dịch ưu đãi miễn phí mà bạn có thể cần nó</p>
                        <div class="subscribe-input-wrapper">
                            <div class="input-group">
                                <form class="input-group" action="index.php?pg=signmail" method="post">
                                    <input type="email" class="form-control bg-color--2" aria-label="Recipient's email" name="mail" placeholder="Email của bạn..." required />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary-alta btn-outline-secondary" type="submit" name="btnmail">Đăng ký</button>
                                    </div>
                                </form>
                                <!-- <input type="email" class="form-control bg-color--2" placeholder="Email của bạn ..." aria-label="Recipient's email"> -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end subscribe area -->

    <!-- Explore Style Carousel -->
    <div class="rn-live-bidding-area rn-section-gapTop" id="01">
        <div class="container">
            <div class="row mb--50">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="title mb--0 live-bidding-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">XU HƯỚNG "LẬP TRÌNH"</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-one-slick slick-activation-03 slick-arrow-style-one rn-slick-dot-style slick-gutter-15">
                       <?= $html_product_category_0?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Explore Style Carousel End-->
    <!-- Explore Style Carousel -->
    <div class="rn-live-bidding-area rn-section-gapTop" id="01">
        <div class="container">
            <div class="row mb--50">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="title mb--0 live-bidding-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">XU HƯỚNG "ĐỒ HỌA"</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-one-slick slick-activation-03 slick-arrow-style-one rn-slick-dot-style slick-gutter-15">
                       <?= $html_product_category_1?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Explore Style Carousel End-->
     <!-- Explore Style Carousel -->
     <div class="rn-live-bidding-area rn-section-gapTop" id="01">
        <div class="container">
            <div class="row mb--50">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="title mb--0 live-bidding-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">XU HƯỚNG "MARKETING"</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-one-slick slick-activation-03 slick-arrow-style-one rn-slick-dot-style slick-gutter-15">
                       <?= $html_product_category_2?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Explore Style Carousel End-->
    <!-- Explore Style Carousel -->
    <div class="rn-live-bidding-area rn-section-gapTop" id="01">
        <div class="container">
            <div class="row mb--50">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="title mb--0 live-bidding-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">XU HƯỚNG "NGOẠI NGỮ"</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-one-slick slick-activation-03 slick-arrow-style-one rn-slick-dot-style slick-gutter-15">
                       <?= $html_product_category_4?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Explore Style Carousel End-->
    <!-- Explore Style Carousel -->
    <div class="rn-live-bidding-area rn-section-gapTop" id="01">
        <div class="container">
            <div class="row mb--50">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="title mb--0 live-bidding-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">XU HƯỚNG "TIN HỌC"</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-one-slick slick-activation-03 slick-arrow-style-one rn-slick-dot-style slick-gutter-15">
                       <?= $html_product_category_5?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Explore Style Carousel End-->
    <!-- Explore Style Carousel -->
    <div class="rn-live-bidding-area rn-section-gapTop" id="01">
        <div class="container">
            <div class="row mb--50">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="title mb--0 live-bidding-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">CÁC TÀI LIỆU, GIÁO TRÌNH</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-one-slick slick-activation-03 slick-arrow-style-one rn-slick-dot-style slick-gutter-15">
                       <?= $html_product_category_3?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Explore Style Carousel End-->
    <!-- Modal -->
    <div class="rn-popup-modal share-modal-wrapper modal fade" id="shareModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content share-wrapper">
                <div class="modal-header share-area">
                    <h5 class="modal-title">Chia sẻ đến mọi người</h5>
                </div>
                <div class="modal-body">
                    <ul class="social-share-default">
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=kienhuu.id.vn"><span class="icon"><i data-feather="facebook"></i></span><span class="text">facebook</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="twitter"></i></span><span class="text">twitter</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="linkedin"></i></span><span class="text">linkedin</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="instagram"></i></span><span class="text">instagram</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="youtube"></i></span><span class="text">youtube</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="rn-popup-modal report-modal-wrapper modal fade" id="reportModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content report-content-wrapper">
                <div class="modal-header report-modal-header">
                    <h5 class="modal-title">Bạn muốn báo cáo sản phẩm này?
                    </h5>
                </div>
                <div class="modal-body">
                    <p>Describe why you think this item should be removed from marketplace</p>
                    <div class="report-form-box">
                        <h6 class="title">Message</h6>
                        <textarea name="message" placeholder="Write issues"></textarea>
                        <div class="report-button">
                            <button type="button" class="btn btn-primary mr--10 w-auto">Báo cáo</button>
                            <button type="button" class="btn btn-primary-alta w-auto" data-bs-dismiss="modal">Hủy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    