<!-- start page title area -->
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
                            <!-- <img id="createfileImage" src="assets/images/portfolio/portfolio-02.jpg" alt="" data-black-overlay="1"> -->
                            <!-- our custom upload button -->
                            <label for="createinputfile" title="No File Choosen">
                                <i class="feather-upload"></i>
                                <span class="text-center">Chọn file trên máy</span>
                                <p class="text-center mt--10">Chấp nhận tất cả các tệp<br>    Tối đa 1GB</p>
                            </label>
                        </div>
                        

                        
                    </div>
                    <!-- end upoad file area -->


                </div>

                <div class="col-lg-7">
                    <div class="form-wrapper-one">
                        <h4>Đăng tải tài nguyên</h4>
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
                                    <label for="dollerValue" class="form-label">Phí tải về *</label>
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
                                    <label for="Propertie" class="form-label">Thời hạn khuyến mãi (nếu có)</label>
                                    <input id="Propertie" type="date">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-box pb--20">
                                    <label for="dollerValue" class="form-label">Upload tài nguyên sản phẩm *</label>
                                    <input id="dollerValue" type="file">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <span class="input-box pb--20" style="padding:10px; background-color: var(--color-gray-2); margin-bottom:20px;">
                                    <span  rows="3" > <b>LƯU Ý:</b> <br>
                                    - Mọi thông tin của thành viên đăng tải trên diễn đàn MyT phải chính xác.<br>
                                    - Mọi tài nguyên khi upload phải đảm bảo chạy tốt, mô tả đầy đủ thông tin và đúng như hình ảnh đính kèm.<br>
                                    - Nội dung file nén đã được kiểm tra, đảm bảo không chứa tệp tin không khả dụng, độc hại, virus hoặc bất cứ liên kết khác...<br>
                                    - Có đầy đủ file chạy, thông tin chi tiết về tài nguyên, hướng dẫn cài đặt<br>
                                    - Cam kết hỗ trợ hoặc fix lỗi, khi người mua liên lạc qua email hoặc số điện thoại của bạn do phí download đã bao gồm phí hỗ trợ.<br>
                                    - Tất cả tài nguyên bị báo cáo vi phạm bản quyền nếu được ban quản trị xác nhận là đúng, tài nguyên sẽ bị xóa bỏ.<br>
                                    - Tài nguyên đã upload lên MyT là thành viên upload đã đồng ý cho phép các thành viên download và sử dụng.<br>
                                </span>
                                </div>
                            <br><br>
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
                                        Bạn tick vào nút này, sẽ đồng ý với các điều khoản & chính sách cộng đồng từ phía MyT đề ra 
                                    </label>
                                </div>
                            </div>

                            .
                            

                            <div class="col-md-12 col-xl-8 mt_lg--15 mt_md--15 mt_sm--15">
                                <div class="input-box">
                                    <button class="btn btn-primary btn-large">Đăng bán</button>
                                </div>
                            </div>
                            
                            
                        </form>

                    </div>

                </div>

              
            </div>
        </div>
    </div>
    <!-- create new product area -->