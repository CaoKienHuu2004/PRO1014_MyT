<?php 
    $html_checkout_product = "";
    $tongxu = 0;
    $tongxugiam = 0;
    $xugiam = 0;
    $thanhtien = 0;
    foreach ($_SESSION['giohang'] as $item) {
        extract($item);
        $user_select_by_id = user_select_by_id($iduser);
        extract($user_select_by_id);
        if ($test == 1) {
            $cert = '<span style="color: #f27322; margin-left: 20px;"><b><i class="feather-check-circle"></i></b> Đã kiểm duyệt</span>';
        }else {
            $cert = '<span style="color: gray; margin-left: 20px;"><b><i class="feather-check-circle"></i></b> Chưa kiểm duyệt</span>';
        }
        $gia = "";
        
        if ($price_2 == null) {
            $gia = '<div class="read-content" style="margin-left: 0px;">
                        <div class="share-wrapper d-flex">
                            
                                <h6 class="latest-bid" style="color: #f27322;margin: 0px;">'.$price.'PCoin</h6>
                            
                        </div>
                    </div>';
            $tongxu += $price;
        }else {
            $gia = '<div class="read-content" style="margin-left: 0px;">
                        <div class="share-wrapper d-flex" style="justify-content: center;">
                        <del style="color: var(--color-body);"><span class="last-bid" style="margin: 0px; color: var(--color-body);">'.$price.' PCoin</span></del>
                                <h6 class="latest-bid" style="color: #f27322; margin: 0px 0px 0px 15px;">'.$price_2.' PCoin</h6>
                                
                        </div>
                    </div>
                    ';
            $tongxu += $price;
            $tongxugiam += $price_2;
            $xugiam += number_format($price - $price_2);
        }
        $html_checkout_product .= '
            <div class="inner" >
            <div class="lg-left-content" style="justify-content: center;">
                <div class="read-content" style="max-width: 350px;">
                    <a href="index.php?pg=product_detail&idProduct='.$idproduct.'">
                        <h6 class="title">'.$name.'</h6>
                    </a>
                    
                    <div class="product-share-wrapper">
                        <!-- all bids -->
                        <div class="profile-share">
                            <span class="more-author-text" style="color: #f27322;"><b>Người bán: </b>'.$Name_U.'</span>
                            '.$cert.'
                        </div>
                        <!-- all bids End--> 
                        
                    </div>
                    
                    <div class="share-wrapper d-flex">
                        <!-- react area -->
                        <!-- <div class="react-area mr--15">
                            <span style="color: white; padding-left: 5px;">Xóa khỏi giỏ hàng</span>
                        </div> -->
                        <!-- end -->
                    
                    </div>
                </div>
            </div>
            '.$gia.'
            <!-- <h6 class="latest-bid" style="color: #f27322;">20 PCoin</h6> -->
        </div><hr>
            ';
    }
?>
<!-- start page title area -->
<div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Xác nhận thanh toán</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="index.php">TRANG CHỦ</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">Giỏ hàng</li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">Xác nhận thanh toán</li>
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
                        <!-- <h5 style="margin: 20px;">Xác nhận & thanh toán</h5> -->
                        <!-- tav Button area  End-->
                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding-left: 20px;padding-right: 20px;justify-content: space-between;" >
                            <li class="nav-item" role="presentation">
                                <h5 style="margin: 20px;">Tên tài nguyên</h5>
                            </li>
                            <li class="nav-item" role="presentation">
                                <h5 style="margin: 20px;">Số xu</h5>
                            </li>
                            <!-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab">Cập nhật giỏ hàng</button>
                            </li> -->
                        </ul>
                        <!-- Tab Content End -->
                        <div class="lg-product-wrapper">
                            <?=$html_checkout_product?>
                            <div class="inner" style="border-bottom: none;">
                                <div class="lg-left-content" style="justify-content: center;">
                                    <div class="read-content" style="max-width: 350px;">
                                        <h6 class="title" style="margin: 0px;">Tạm tính: </h6>
                                    </div>
                                </div>
                                <div class="read-content" style="margin-left: 0px;">
                                    <div class="share-wrapper d-flex">
                                        
                                        <p class="latest-bid" style="color: gray;"><b><?=$tongxu?> PCoin</b></p>
                                        
                                    </div>
                                </div>
                                <!-- <h6 class="latest-bid" style="color: #f27322;">20 PCoin</h6> -->
                            </div>
                            <div class="inner" style="align-items: center;">
                                <div class="lg-left-content" style="justify-content: center;">
                                    <div class="read-content" style="max-width: 350px;">
                                        <h6 style="margin: 0px;" class="title">Khấu trừ: </h6>
                                    </div>
                                </div>
                                <div class="read-content" style="margin-left: 0px;">
                                    <div class="share-wrapper d-flex">
                                        
                                        <p class="latest-bid" style="color: gray;"><b>- <?=$xugiam?> PCoin</b></p>
                                        
                                    </div>
                                </div>
                                <!-- <h6 class="latest-bid" style="color: #f27322;">20 PCoin</h6> -->
                            </div>
                            <div class="inner" style="align-items: center;">
                                <div class="lg-left-content" style="justify-content: center;">
                                    <div class="read-content" style="max-width: 350px;">
                                        <h6 style="margin: 0px;" class="title">THÀNH TIỀN XU: </h6>
                                    </div>
                                </div>
                                <div class="read-content" style="margin-left: 0px;">
                                    <div class="share-wrapper d-flex">
                                        
                                        <h6 class="latest-bid" style="color: #f27322;"><b><?php echo number_format($tongxu - $xugiam);?> PCoin</b><br></h6>
                                        
                                    </div>
                                </div>
                                <!-- <h6 class="latest-bid" style="color: #f27322;">20 PCoin</h6> -->
                            </div>
                            
                            

                            
                        </div>
                       
                    </div>
                    
                </div>
                <div class="col-lg-4">
                    <div class="rbt-single-widget widget_categories mt--30">
                        <h3 class="title">Thông tin người giao dịch</h3>
                        <div class="inner">
                            <ul class="category-list ">
                                <li>
                                    <a>
                                        <span class="left-content"><b>Người giao dịch:</b></span>
                                        <span class="count-text"><?=$_SESSION['user']['Name_U']?></span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="left-content"><b>Email: </b></span>
                                        <span class="count-text"><?=$_SESSION['user']['Email']?></span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="left-content"><b>Số điện thoại: </b></span>
                                        <span class="count-text"><?=$_SESSION['user']['Phone']?></span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="left-content"><b>Địa chỉ:</b></span>
                                        <span class="count-text"><?=$_SESSION['user']['Address']?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rbt-single-widget widget_categories mt--30">
                        <h3 class="title">Thông tin đơn hàng</h3>
                        <div class="inner">
                            <ul class="category-list ">
                                <li>
                                    <a>
                                        <span class="left-content"><b>Tổng số sản phẩm:</b></span>
                                        <span class="count-text"><?php echo count($_SESSION['giohang']); ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="left-content"><b>Tổng giao dịch: </b></span>
                                        <span class="count-text"><p class="latest-bid" style="color: #f27322;"><b><?php echo number_format($tongxu - $xugiam);?> PCoin</b><br></p></span>
                                    </a>
                                </li>
                                
                                
                                
                               
                            </ul>
                        </div>
                    </div>
                    <?php 
                        $tongxu = 0;
                        $tongxugiam = 0;
                        $xugiam = 0;
                        $thanhtien = 0;
                        echo '<form method="POST" action="index.php?pg=order">';
                        
                        foreach ($_SESSION['giohang'] as $item) {
                            extract($item);
                            $user_select_by_id = user_select_by_id($iduser);
                            extract($user_select_by_id);
                            $gia = "";
                            if ($price_2 == null) {
                                $gia = '<div class="read-content" style="margin-left: 0px;">
                                            <div class="share-wrapper d-flex">
                                                
                                                    <h6 class="latest-bid" style="color: #f27322;margin: 0px;">'.$price.'PCoin</h6>
                                                
                                            </div>
                                        </div>';
                                $tongxu += $price;
                            }else {
                                $gia = '<div class="read-content" style="margin-left: 0px;">
                                            <div class="share-wrapper d-flex" style="justify-content: center;">
                                            <del style="color: var(--color-body);"><span class="last-bid" style="margin: 0px; color: var(--color-body);">'.$price.' PCoin</span></del>
                                                    <h6 class="latest-bid" style="color: #f27322; margin: 0px 0px 0px 15px;">'.$price_2.' PCoin</h6>
                                                    
                                            </div>
                                        </div>
                                        ';
                                $tongxu += $price;
                                $tongxugiam += $price_2;
                                $xugiam += number_format($price - $price_2);
                            }
                            
                        }
                        
                        echo '
                                
                                    <input type="hidden" name="idUser" value="'.$_SESSION['user']['idUser'].'">
                                    <input type="hidden" name="Name_seller" value="'.$Name_U.'">
                                    <input type="hidden" name="Phone_seller" value="'.$Phone.'">
                                    <input type="hidden" name="Email_seller" value="'.$Email.'">
                                    <input type="hidden" name="Name_buyer" value="'.$_SESSION['user']['Name_U'].'">
                                    <input type="hidden" name="Phone_buyer" value="'.$_SESSION['user']['Phone'].'">
                                    <input type="hidden" name="Email_buyer" value="'.$_SESSION['user']['Email'].'">
                                    <input type="hidden" name="Total_Pcoin" value="'.number_format($tongxu - $xugiam).'">
                                
                            ';
                        echo '
                            <button name="btnorder" type="submit" class="btn btn-primary add-community" style="margin-top: 25px;">Tiến hành tải về<i class="feather-download-cloud"></i></button></form>
                        ';
                    ?>
                    <a></a>
                    <!-- <a href="index.php?pg=product" style="color: gray;"><div class="add-community" href="#" style="margin-top: 25px;" >Đặt hàng thêm <i class="feather-arrow-right"></i></div></a> -->

                    
                </div>
            </div>
        </div>
    </div>
    <!-- community area end -->




   <!-- Modal -->
   <div class="rn-popup-modal share-modal-wrapper modal fade" id="shareModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content share-wrapper">
                <div class="modal-header share-area">
                    <h5 class="modal-title">GIAO DỊCH THÀNH CÔNG !</h5>
                </div>
                <div class="modal-body">
                    <ul class="social-share-default">
                        <li><a href="#"><span class="icon"><i data-feather="check"></i></span><span class="text">Giao dịch của bạn vừa hoàn tất</span></a></li>
                        
                    </ul>
                </div>
                <div class="modal-header share-area">
                    <p class="modal-title"><b>Truy cập vào đơn hàng của bạn để xem nhé !</b></p>
                </div>
            </div>
        </div>
    </div>