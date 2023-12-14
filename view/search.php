<?php
if (!isset($search)) $search = '';

?>

<!-- start page title area -->
<div class="rn-breadcrumb-inner ptb--30">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <h5 class="title text-center text-md-start">Search: "<?= $search ?>"</h5>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-list">
                    <li class="item"><a href="index.html">TRANG CHỦ</a></li>
                    <li class="separator"><i class="feather-chevron-right"></i></li>
                    <li class="item current">Tìm kiếm: "<?= $search ?>"</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end page title area -->
<!-- Start Tab Product list style area -->
<div class="rn-product-area rn-section-gapTop">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 custom-product-col">
                <!-- <h2 class="text-left mb--50">OUR All NFT'S</h2> -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane  lg-product_tab-pane fade show active" id="nav-TRANG CHỦ" role="tabpanel" aria-labelledby="nav-TRANG CHỦ-tab">
                        <?php
                        if (count($pro_search) < 1) {
                            echo "Không có dữ liệu cho kết quả: ".$search;
                        } else {
                            foreach ($pro_search as $value) {
                                extract($value);
                                $link_productdetails = 'index.php?pg=product_detail&idProduct='.$idProduct;
                        ?>
                                <!-- start single product -->
                                <div class="lg-product-wrapper">

                                    <div class="inner">
                                        <div class="lg-left-content">
                                            <a href="product-details.html" class="thumbnail">
                                                <img style="width: 200px; height: 200px; object-fit: cover;" src="view/layout/assets/images/product/<?= $img ?>" alt="Nft_Portfolio">
                                            </a>
                                            <div class="read-content">

                                                <a href="<?=$link_productdetails?>">
                                                    <h6 class="title"><?= $Name ?></h6>
                                                </a>
                                                <div class="product-share-wrapper">
                                                    <!-- all bids -->
                                                    <div class="profile-share">
                                                        <a href="author.html" class="avatar" data-tooltip="<?=(string) check_uname_user($idUser)?>" tabindex="0"><img src="view/layout/assets/images/client/client-1.png" alt="Nft_Profile"></a>

                                                        <a class="more-author-text" href="#" tabindex="0"><?= (string) check_name_user($idUser) ?></a>
                                                    </div>
                                                    <!-- all bids End-->
                                                    <span class="latest-bid"> <b>Chuyên mục:</b> <?= category_select_by_id($idCategories)['Name_C']; ?></span>
                                                </div>
                                                <h6 class="latest-bid" style="color: #f27322;"><?= $Price ?> PCoin</h6>
                                                <div class="share-wrapper d-flex">
                                                    <!-- react area -->
                                                    <div class="react-area mr--15">

                                                        <span class="number"><b>10 </b></span>
                                                        <span style="color: white; padding-left: 5px;">Lượt bán</span>
                                                    </div>
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
                                        <form action="index.php?pg=shopping_cart" method="post">
                                            <input type="hidden" name="masp" value="<?php echo $idProduct;?>">
                                            <input type="hidden" name="iduser" value="<?php echo $idUser;?>">
                                            <input type="hidden" name="idcate" value="<?php echo $idCategories;?>">
                                            <input type="hidden" name="tensp" value="<?php echo $Name;?>">
                                            <input type="hidden" name="hinh" value="<?php echo $img;?>">
                                            <input type="hidden" name="gia" value="<?php echo $Price;?>">
                                            <input type="hidden" name="gia2" value="<?php echo $Price_2;?>">
                                            <input type="hidden" name="test" value="<?php echo $Test;?>">
                                            <button type="submit" name="addcart" class="btn btn-primary-alta mt--30"><i class="feather-shopping-cart"></i> Thêm vào giỏ hàng </button>
                                        </form>
                                        <!-- <button type="button" class="btn btn-primary-alta mr--30" data-bs-toggle="modal" data-bs-target="#placebidModal">Mua ngay</button> -->
                                    </div>

                                </div>
                        <?php
                            }
                        }
                        ?>
                        <!-- End single product -->
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
<!-- end Tab Product list style area -->