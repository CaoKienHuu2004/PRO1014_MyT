
    <!-- start page title area -->
    <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Sign Up</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="index.html">TRANG CHỦ</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">Sign Up</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->

    <!-- login form -->
    <div class="login-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="offset-2 col-lg-4 col-md-6 ml_md--0 ml_sm--0 col-sm-12">
                    <div class="form-wrapper-one registration-area">
                        <h4>ĐĂNG KÝ</h4>
                        <?php if (isset($_SESSION['thongbao'])): ?>
                            <div class="alert alert-success" role="alert">
                                CD0104
                                <?= $_SESSION['thongbao'] ?>
                            </div>
                        <?php endif;
                        unset($_SESSION['thongbao']); ?>
                        <?php if (isset($_SESSION['loi'])): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_SESSION['loi'] ?>
                            </div>
                        <?php endif;
                        unset($_SESSION['loi']); ?>
                        <form action="" method="post">

                            <div class="mb-5">
                                <label for="username" class="form-label">Full name</label>
                                <input type="username" name="username" id="username">
                            </div>
                            <div class="mb-5">
                                <label for="name_U" class="form-label">Họ và Tên</label>
                                <input type="name_U" name="name_U" id="name_U">
                            </div>
                            <div class="mb-5">
                                <label for="username" class="form-label">Username</label>
                                <input type="username" name="username" id="username">
                            </div>
                            <div class="mb-5">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="mb-5">
                                <label for="newPassword" class="form-label">Tạo mật khẩu</label>
                                <input type="password" name="password" id="newPassword">
                            </div>
                            <div class="mb-5">
                                <label for="exampleInputPassword1" class="form-label">Nhập lại mật khẩu</label>
                                <input type="password" name="re-password" id="exampleInputPassword1">
                            </div>
                            <div class="mb-5 rn-check-box">
                                <input type="checkbox" name="check" value="0" class="rn-check-box-input"
                                    id="exampleCheck1">
                                <label class="rn-check-box-label" for="exampleCheck1">Chấp nhận các điều khoản và chính sách của chúng tôi</label>
                            </div>
                            <button type="submit" name="submit" name="submit" class="btn btn-primary mr--15">Đăng ký</button>
                            <a href="index.php?pg=login" class="btn btn-primary-alta">Đăng nhập</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="social-share-media form-wrapper-one">
                        <h6>Hoặc bạn có thể đăng nhập mạng xã hội</h6>
                        <p> Dễ dàng kết nối với bạn bè của bạn</p>
                        <button class="another-login login-facebook"> <img class="small-image" src="view/layout/assets/images/icons/google.png" alt=""> <span>Log in with Google</span></button>
                        <button class="another-login login-facebook"> <img class="small-image" src="view/layout/assets/images/icons/facebook.png" alt=""> <span>Log in with Facebook</span></button>
                        <button class="another-login login-twitter"> <img class="small-image" src="view/layout/assets/images/icons/tweeter.png" alt=""> <span>Log in with Twitter</span></button>
                        <button class="another-login login-linkedin"> <img class="small-image" src="view/layout/assets/images/icons/linkedin.png" alt=""> <span>Log in with linkedin</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login form end -->


    