<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tài nguyên</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Tài nguyên</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary btn-icon-left mb-2" href="index.php?page=categories-add" type="button"><i class="fas fa-plus-circle mr-1"></i>Thêm danh mục</a>
            </div>
            <div class="row">
                <div class="col-12 connectedSortable">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Tài nguyên</h3>
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
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Ảnh</th>
                                        <th>Tên tài nguyên</th>
                                        <th>Giá</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($all_pro as $row) {
                                        # code...
                                    ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td>Test ảnh</td>
                                            <td><?= $row['Name'] ?></td>
                                            <td>50 PCoin</td>
                                            <td><?=badge_status_pro($row['status'])?></td>
                                            <td>
                                                <a href="index.php?page=product-edit&id=<?=$row['idCategories']?>" style="color:white;" class="btn btn-info btn-sm btn-icon-left m-b-10" type="button">
                                                    <i class="fas fa-edit mr-1"></i><span class="">Edit</span>
                                                </a>

                                                <a href="../uploads/document/<?=urlencode(basename($row['File']))?>" style="color:white;" class="btn btn-primary btn-sm btn-icon-left m-b-10" type="button">
                                                <i class="fa-solid fa-download"></i><span class="">Tải xuống</span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
</div>
<?php
require_once('view/footer.php')
?>
<!-- <script type="text/javascript">
    function RemoveRow(id) {
        cuteAlert({
            type: "question",
            title: "Xác Nhận Xóa Chuyên Mục",
            message: "Bạn có chắc chắn muốn xóa chuyên mục ID " + id + " không ?",
            confirmText: "Đồng Ý",
            cancelText: "Hủy"
        }).then((e) => {
            if (e) {
                $.ajax({
                    url: "../ajaxs/admin/removeCategory.php",
                    method: "POST",
                    dataType: "JSON",
                    data: {
                        id: id
                    },
                    success: function(respone) {
                        if (respone.status == 'success') {
                            cuteToast({
                                type: "success",
                                message: respone.msg,
                                timer: 5000
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1500);
                        } else {
                            cuteAlert({
                                type: "error",
                                title: "Error",
                                message: respone.msg,
                                buttonText: "Okay"
                            });
                        }
                    },
                    error: function() {
                        alert(html(response));
                        location.reload();
                    }
                });
            }
        })
    }
</script> -->