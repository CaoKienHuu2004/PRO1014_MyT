<?php

//         if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
//             if(sizeof($_SESSION['giohang'])>0){
//                 $tong=0;
//                 $tongs=0;
//                 for ($i=0; $i < sizeof($_SESSION['giohang']); $i++){
                    
//                     $box_pr='';
//                     $box_check='';
//                     $tt=$_SESSION['giohang'][$i][2];
//                     $tong+=$tt;
//                     $tts=$_SESSION['giohang'][$i][3];
//                     $tongs+=$tts;
//                     $box_pr .= '';

//                 }
//             $box_check .= '<div class="col-lg-4">
                    

//             <div class="rbt-single-widget widget_categories mt--30">
//                 <h3 class="title">Giỏ hàng</h3>
//                 <div class="inner">
//                     <ul class="category-list ">
//                         <li><a href="#"><span class="left-content">Tổng số sản phẩm:</span><span
//                                     class="count-text">'.$tongs.'</span></a></li>
//                         <li><a href="#"><span class="left-content">Thành tiền:</span><span
//                                     class="count-text">'.$tong.' PCoin</span></a></li>
                       
//                     </ul>
//                 </div>
//             </div>
//             <button class="btn btn-primary add-community" href="#" style="margin-top: 50px;" >Tiếp tục thanh toán <i class="feather-arrow-right"></i></button>';
//         }else{
//             echo "Giỏ hàng rỗng hãy bỏ hang vào giỏ!!";
//         }
    
// }

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
                        <div class="lg-product-wrapper">
//                     <div class="inner" >
//                         <div class="lg-left-content" style="justify-content: center;">
//                             <a href="product-details.php" class="thumbnail">
//                                 <img src="view/layout/assets/images/portfolio/'.$_SESSION['giohang'][$i][0].'" alt="Nft_Portfolio">
//                             </a>
//                             <div class="read-content" style="max-width: 350px;">
//                                 <a href="product-details.php">
//                                     <h6 class="title">'.$_SESSION['giohang'][$i][1].'</h6>
//                                 </a>
//                                 <div class="product-share-wrapper">
//                                     <!-- all bids -->
//                                     <div class="profile-share">
//                                         <a href="author.php" class="avatar" data-tooltip="@lyhuu123" tabindex="0"><img src="view/layout/assets/images/client/'.$_SESSION['giohang'][$i][0].'" alt="Nft_Profile"></a>
                                        
//                                         <a class="more-author-text" href="#" tabindex="0">Cao Kiến Hựu</a>
//                                         <span style="color: #f27322; margin-left: 20px;"><b><i class="feather-check-circle"></i></b> đã được kiểm thử</span>
//                                     </div>
//                                     <!-- all bids End--> 
                                    
//                                 </div>
//                                 <h6 class="latest-bid" style="color: #f27322;">'.$_SESSION['giohang'][$i][2].'</h6>
//                                 <div class="share-wrapper d-flex">
//                                     <!-- react area -->
//                                     <!-- <div class="react-area mr--15">
//                                         <span style="color: white; padding-left: 5px;">Xóa khỏi giỏ hàng</span>
//                                     </div> -->
//                                     <!-- end -->
//                                     <!-- share area -->
//                                     <div class="share-btn share-btn-activation dropdown">
//                                         <button class="icon" data-bs-toggle="dropdown" aria-expanded="false" tabindex="0">
//                                             <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
//                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
//                                             </svg>
//                                         </button>
//                                         <div class="share-btn-setting dropdown-menu dropdown-menu-end">
//                                             <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal" tabindex="0">
//                                                 Share
//                                             </button>
//                                             <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal" tabindex="0">
//                                                 Report
//                                             </button>
//                                         </div>
//                                     </div>
//                                     <!-- sharea End -->
//                                 </div>
//                             </div>
//                         </div>
//                         <div class="read-content" style="margin-left: 0px;">
//                             <div class="share-wrapper d-flex">
                                
//                                 <div class="react-area mr--15" style="margin-right: 0px;">
//                                     <span style="color: white;"><i class="feather-trash-2" href="index.php?pg=shopping-cart&delid=" style="color: white; padding-right: 5px;"></i>Xóa</span>
//                                 </div>
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
    