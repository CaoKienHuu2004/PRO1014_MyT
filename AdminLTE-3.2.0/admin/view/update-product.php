<?php
if (isset($listCate)) {
    $option = '';
    $selected = '';
    foreach ($listCate as $row) {
        $row['id'] === $detail_pro['iddm'] ? $selected = 'selected' : $selected = '';
        $option .= '<option value="' . $row['id'] . '" ' . $selected . '>' . $row['name'] . '</option>';
    }
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="index.php?page=query_update_product" method="POST" enctype="multipart/form-data">
                <input type="text" name="id" value="<?=$detail_pro['id']?>" hidden>
                <input type="text" name="old_img" value="<?=$detail_pro['image']?>" hidden>
                <div class="form-group">
                    <label for="file-input">Ảnh sản phẩm</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input file-input" id="file-input">
                            <label class="custom-file-label" class="name-file" for="file-input">Chọn ảnh</label>
                        </div>
                    </div>
                    <div class="form-group mt-1 d-flex justify-content-center">
                        <img class="preview" src="../<?= PATH_IMG_PRO . $detail_pro['image'] ?>" alt="Xem trước ảnh" style="max-width: 200px; max-height: 200px;">
                    </div>
                </div>

                <!-- <div class="form-group">
                    <label for="name">Hình ảnh phụ:</label>
                    <div class="d-flex">
                        <div class="col-sm-12 col-md-6 col-xl-3">
                            <div class="image-upload">
                                <label for="file-input-1" class="preview-secondary-image" id="label-1">
                                    <div style="font-size: 40px;">+</div>
                                </label>
                                <input type="file" id="file-input-1" class="file-input" name="images[]" accept="image/*" multiple>
                                <div class="delete-button" id="delete-button-1">&times;</div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-3">
                            <div class="image-upload">
                                <label for="file-input-2" class="preview-secondary-image" id="label-2">
                                    <div style="font-size: 40px;">+</div>
                                </label>
                                <input type="file" id="file-input-2" class="file-input" name="images[]" accept="image/*" multiple>
                                <div class="delete-button" id="delete-button-2">&times;</div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-3">
                            <div class="image-upload">
                                <label for="file-input-3" class="preview-secondary-image" id="label-3">
                                    <div style="font-size: 40px;">+</div>
                                </label>
                                <input type="file" id="file-input-3" class="file-input" name="images[]" accept="image/*" multiple>
                                <div class="delete-button" id="delete-button-3">&times;</div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-3">
                            <div class="image-upload">
                                <label for="file-input-4" class="preview-secondary-image" id="label-4">
                                    <div style="font-size: 40px;">+</div>
                                </label>
                                <input type="file" id="file-input-4" class="file-input" name="images[]" accept="image/*" multiple>
                                <div class="delete-button" id="delete-button-1">&times;</div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="name">Tên sản phẩm:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm" value="<?= $detail_pro['name'] ?>">
                </div>
                <script>
                    // Lắng nghe sự kiện thay đổi của input file
                    document.getElementById('file-input').addEventListener('change', function(event) {
                        var file = event.target.files[0], // Lấy tệp đã chọn
                            nameFile = event.target.files[0].name,
                            viewName = document.getElementById('name-file');
                        // Kiểm tra xem tệp đã chọn là ảnh
                        if (file && file.type.startsWith('image/')) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                // Đặt src của thẻ img để hiển thị ảnh xem trước
                                var preview = document.getElementById('preview');
                                preview.src = e.target.result;
                                preview.style.display = 'block'; // Hiển thị thẻ img
                            }
                            // Đọc dữ liệu của tệp ảnh
                            reader.readAsDataURL(file);
                            viewName.innerHTML = nameFile;
                        }
                    });
                </script>
                <div class="form-group">
                    <label for="categories">Danh mục:</label>
                    <select class="custom-select rounded-0" name="id_cate" id="categories">
                        <option value="0">Chọn danh mục cho sản phẩm</option>
                        <?= $option ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Giá gốc:</label>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text">VND</span>
                        </div>
                        <input type="text" autocomplete="off" name="price" id="price" class="form-control" value="<?= $detail_pro['price'] ?>" placeholder="Nhập giá gốc">
                    </div>
                </div>
                <div class="form-group">
                    <label for="discount">Khuyến mãi:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="discount" id="discount" class="form-control" value="<?= $detail_pro['discount'] ?>" placeholder="Khuyễn mãi (nhập số phần trăm)">
                        <div class="input-group-append">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price_sale">Giá khuyến mãi:</label>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text">VND</span>
                        </div>
                        <input autocomplete="off" type="text" name="price_sale" id="price_sale" class="form-control" value="<?= $detail_pro['price_sale'] ?>" placeholder="Giá khuyến mãi">
                    </div>
                </div>
                <div class="form-group">
                    <label>Mô tả ngắn</label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;">
                    <?= $detail_pro['description'] ?>    
                </textarea>
                </div>
                <div class="form-group">
                    <label>Mô tả chi tiết</label>
                    <textarea class="form-control" name="detail" rows="3" placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;">
                        <?= $detail_pro['detail'] ?>
                    </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php
require_once('view/footer.php');
?>
<script>
    CKEDITOR.replace("description");
    CKEDITOR.replace("detail");
</script>
<script>
    // Function to calculate discount price based on original price and discount percentage
    function calculateDiscountPrice() {
        var originalPrice = parseFloat(document.getElementById('price').value);
        var discountPercentage = parseFloat(document.getElementById('discount').value);
        var discountPrice = originalPrice - (originalPrice * (discountPercentage / 100));
        document.getElementById('price_sale').value = Math.floor(discountPrice);
    }

    // Function to calculate discount percentage based on original price and sale price
    function calculateDiscountPercentage() {
        var originalPrice = parseFloat(document.getElementById('price').value);
        var salePrice = parseFloat(document.getElementById('price_sale').value);
        var discountPercentage = 100 - (salePrice * 100) / originalPrice;
        document.getElementById('discount').value = Math.floor(discountPercentage);
    }

    // Add event listeners to input fields for real-time calculation
    document.getElementById('price').addEventListener('input', calculateDiscountPrice);
    document.getElementById('discount').addEventListener('input', calculateDiscountPrice);
    document.getElementById('price_sale').addEventListener('input', calculateDiscountPercentage);
</script>