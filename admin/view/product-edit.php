<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sửa tài nguyên</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sửa tài nguyên</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-6">
                    <div class="mb-3">
                        <a class="btn btn-danger btn-icon-left m-b-10" href="index.php?page=categories" type="button"><i class="fas fa-undo-alt mr-1"></i>Quay Lại</a>
                    </div>
                </section>
                <section class="col-lg-6">
                </section>
                <section class="col-lg-12 connectedSortable">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-cart-plus mr-1"></i>
                                Sửa tài nguyên
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn bg-success btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn bg-warning btn-sm" data-card-widget="maximize"><i class="fas fa-expand"></i>
                                </button>
                                <button type="button" class="btn bg-danger btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên chuyên mục</label>
                                <input type="text" class="form-control" value="<?= $info_pro['Name'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá</label>
                                <input type="text" class="form-control" value="<?= $info_pro['Price'] ?> PCoin" disabled>
                            </div>
                        </div>
                        <div class="card-footer clearfix">
                            <button id="btnEditCate" name="AddCategory" class="btn btn-info btn-icon-left m-b-10"><i class="fas fa-save mr-1"></i> Lưu ngay</button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php
require_once('view/footer.php');
?>
<script type="text/javascript">
    $("#btnEditCate").on("click", function() {
        $('#btnEditCate').html('<i class="fa fa-spinner fa-spin"></i> Loading...').prop('disabled',
            true);
        $.ajax({
            url: "../ajaxs/admin/categories-edit.php",
            method: "POST",
            dataType: "json",
            data: {
                id: <?= $info_cate['idCategories'] ?>,
                name: $("#nameCate").val()
            },
            success: function(respone) {
                if (respone.status == 'success') {
                    cuteToast({
                        type: "success",
                        message: respone.msg,
                        timer: 5000
                    });
                    setTimeout("location.href = 'index.php?page=categories';", 1500);
                } else {
                    cuteAlert({
                        type: "error",
                        title: "Error",
                        message: respone.msg,
                        buttonText: "Okay"
                    });
                    $('#btnEditCate').html('<i class="fas fa-plus mr-1"></i> Thêm Ngay').prop('disabled',
                        false);
                }
            },
            error: function() {
                alert(html(response));
                location.reload();
            }

        });
    });
</script>