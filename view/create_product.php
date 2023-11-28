<!-- start page title area -->
<div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Đăng tải tài nguyên</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="index.html">Home</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">Đăng tải tài nguyên</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->
    <!-- create new product area -->
    <div class="create-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 offset-1 ml_md--0 ml_sm--0">
                    <!-- file upload area -->
                    <div class="upload-area">

                        <div class="upload-formate mb--30">
                            <h6 class="title">
                            <b> Tải ảnh đại diện sản phẩm</b>
                            </h6>
                            <p class="formate">
                                Kéo hoặc chọn file ảnh cần upload
                            </p>
                        </div>
                        <div class="brows-file-wrapper">
                            <!-- actual upload which is hidden -->
                            <input name="createinputfile" id="createinputfile" type="file" class="inputfile" />
                            <!-- <img id="createfileImage" src="assets/images/portfolio/portfolio-02.jpg" alt="" data-black-overlay="6"> -->
                            <!-- our custom upload button -->
                            <label for="createinputfile" title="No File Choosen">
                                <i class="feather-upload"></i>
                                <span class="text-center">Chọn file trên máy</span>
                                <p class="text-center mt--10">Chấp nhận tất cả các tệp<br>    Tối đa 1GB</p>
                            </label>
                        </div>
                        <br>
                        <br>
                        <div class="upload-formate mb--30">
                            <h6 class="title">
                               <b> Tải ảnh demo sản phẩm </b>
                            </h6>
                            <p class="formate">
                                Kéo hoặc chọn file ảnh cần upload
                            </p>
                        </div>

                        <div class="brows-file-wrapper">
                            <!-- actual upload which is hidden -->
                            <input name="createinputfile" id="createinputfile" type="file" class="inputfile" />
                            <!-- <img id="createfileImage" src="assets/images/portfolio/portfolio-02.jpg" alt="" data-black-overlay="6"> -->
                            <!-- our custom upload button -->
                            <label for="createinputfile" title="No File Choosen">
                                <i class="feather-upload"></i>
                                <span class="text-center">Chọn file trên máy</span>
                                <p class="text-center mt--10">Chấp nhận tất cả các tệp<br>    Tối đa 1GB</p>
                            </label>
                        </div>
                    </div>
                    <!-- end upoad file area -->

                    <div class="mt--100 mt_sm--30 mt_md--30 d-none d-lg-block">
                        <h5> Note: </h5>
                        <span> Service fee : <strong>2.5%</strong> </span> <br>
                        <span> You will receive : <strong>25.00 ETH $50,000</strong></span>
                    </div>

                </div>

                <div class="col-lg-7">
                    <div class="form-wrapper-one">
                        <form class="row" action="#">

                            <div class="col-md-12">
                                <div class="input-box pb--20">
                                    <label for="name" class="form-label">Tên sản phẩm *</label>
                                    <input id="name" placeholder="vd: Bộ ấn phẩm đồ họa MyT123, ...">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="input-box pb--20">
                                    <label for="Discription" class="form-label">Mô tả ngắn *</label>
                                    <textarea id="Discription" rows="3" placeholder="vd: đây là sản phẩm đồ họa thông mình ..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-box pb--20">
                                    <label for="Discription" class="form-label">Mô tả chi tiết *</label>
                                    <textarea id="motachitiet" rows="3" placeholder="e. g. “After purchasing the product you can get item...”"></textarea>
                                </div>
                            </div>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#motachitiet' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>

                            <div class="col-md-4">
                                <div class="input-box pb--20">
                                    <label for="dollerValue" class="form-label">Giá sản phẩm *</label>
                                    <input id="dollerValue" placeholder="50 Pcoin">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="input-box pb--20">
                                    <label for="Size" class="form-label">Giá khuyến mãi (nếu có)</label>
                                    <input id="Size" placeholder="25 PCoin">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="input-box pb--20">
                                    <label for="Propertie" class="form-label">Thời gian khuyến mãi (nếu có)</label>
                                    <input id="Propertie" type="date">
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="input-box pb--20 rn-check-box">
                                    <input class="rn-check-box-input" type="checkbox" id="putonsale">
                                    <label class="rn-check-box-label" for="putonsale">
                                        Xác thực kiểm duyệt
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="input-box pb--20 rn-check-box">
                                    <input class="rn-check-box-input" type="checkbox" id="instantsaleprice">
                                    <label class="rn-check-box-label" for="instantsaleprice">
                                        Bạn tick vào nút này, sẽ đồng ý với các điều khoản & chính sách cộng đồng
                                    </label>
                                </div>
                            </div>

                            <

                            <div class="col-md-12 col-xl-4">
                                <div class="input-box">
                                    <button type="button" class="btn btn-primary-alta btn-large w-100" data-bs-toggle="modal" data-bs-target="#uploadModal">Preview</button>
                                </div>
                            </div>

                            <div class="col-md-12 col-xl-8 mt_lg--15 mt_md--15 mt_sm--15">
                                <div class="input-box">
                                    <button class="btn btn-primary btn-large w-100">Submit Item</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>

                <div class="mt--100 mt_sm--30 mt_md--30 d-block d-lg-none">
                    <h5> Note: </h5>
                    <span> Service fee : <strong>2.5%</strong> </span> <br>
                    <span> You will receive : <strong>25.00 ETH $50,000</strong></span>
                </div>
            </div>
        </div>
    </div>
    <!-- create new product area -->