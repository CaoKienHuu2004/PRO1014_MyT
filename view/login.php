    <!-- login form -->
    <div class="login-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class=" offset-2 col-lg-4 col-md-6 ml_md--0 ml_sm--0 col-sm-12">
                    <div class="form-wrapper-one">
                        <h4>ĐĂNG NHẬP</h4>
                        <span><b>Chào mừng bạn đã quay trở lại. Hãy bắt đầu một trải nghiệm thú vị trong ngày mới nhé !</b></span><br>
                        <?php if(isset($_SESSION['loi'])):?>
                            <?=$_SESSION['loi']?>
                        <?php endif; unset($_SESSION['loi']);?>
                        <form method="post">
                            <div class="mb-5">
                                <label for="user" class="form-label">Tên đăng nhập</label>
                                <input type="text" id="user" name="user">
                            </div>
                            <div class="mb-5">
                                <label for="pass" class="form-label">Mật khẩu</label>
                                <input type="pass" id="pass" name="pass">
                            </div>
                            <div class="mb-5 rn-check-box">
                                <input type="checkbox" class="rn-check-box-input" id="exampleCheck1">
                                <label class="rn-check-box-label" for="exampleCheck1">Ghi nhớ tài khoản này !</label>
                            </div>
                            <input type="submit" name="btnlogin" class="btn_login" style="background-color: #F27322; color:aliceblue; border: none;" value="Đăng nhập"><br><br>
                            <!-- <button type="submit"  >Log In</button> -->
                            Bạn chưa có tài khoản ? 
                            <a href="index.php?pg=signup" class="btn-primary-alta" style="color: #F27322;"> Đăng ký ngay !</a>
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

