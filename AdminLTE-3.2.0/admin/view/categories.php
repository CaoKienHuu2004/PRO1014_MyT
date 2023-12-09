<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chuyên mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Chuyên mục</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-default">
                    Thêm chủ đề
                </button>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                                      <h3 class="card-title ">Danh sách chủ đề</h3>
                                  </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Ảnh</th>
                                        <th scope="col">Tên danh mục</th>
                                        <th scope="col">Số lượng sản phẩm</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($all_cate as $row) {
                                        # code...
                                    ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td class="d-flex justify-content-center">
                                                <img src="<?= '../' . PATH_IMG_CATE . $row['image'] ?>" alt="" width="100">
                                            </td>
                                            <td><?= $row['name'] ?></td>
                                            <td>3</td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#cate<?= $row['id'] ?>">
                                                    <i class="fa-solid fa-pen-to-square"></i> Sửa
                                                </button>
                                                <button onclick="confirm_del_cate(<?= $row['id'] ?>)" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</button>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="cate<?= $row['id'] ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Sửa chủ đề</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="index.php?page=query_update_cate" method="POST" enctype="multipart/form-data">
                                                        <input type="text" name="id" value="<?= $row['id'] ?>" hidden>
                                                        <input type="text" name="old_img" value="<?= $row['image'] ?>" hidden>
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="cate-name" class="col-form-label">Tên
                                                                    chủ đề:</label>
                                                                <input type="text" class="form-control" name="name" placeholder="Tên chủ đề" value="<?= $row['name'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="topic-name" class="col-form-label">Hình ảnh:</label>
                                                                <div class="custom-file">
                                                                    <input type="file" id="file-input" class="file-input" name="image">
                                                                    <label class="custom-file-label" for="file-input">Chọn ảnh</label>
                                                                </div>

                                                            </div>
                                                            <div class="mb-3 d-flex justify-content-center">
                                                                <img id="preview" class="preview" src="<?= '../' . PATH_IMG_CATE . $row['image'] ?>" alt="Xem trước ảnh" style="max-width: 300px; max-height: 300px;">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary" name="updateCate">Lưu thay đổi</button>
                                                        </div>
                                                    </form>

                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                                <!-- <tfoot>
                            <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Tên chủ đề</th>
                                  <th scope="col">Chế độ</th>
                                  <th scope="col">Số lượng câu hỏi</th>
                                  <th scope="col">Thao tác</th>
                              </tr>
                          </tfoot> -->
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm chủ đề</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="index.php?page=query_add_cate" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Tên chủ đề:</label>
                        <input type="text" class="form-control" name="name" placeholder="Tên chủ đề">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Hình ảnh:</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input file-input" name="image" accept="image/*">
                            <label class="custom-file-label" id="name-file" for="file-input">Chọn ảnh</label>
                        </div>

                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <img id="preview" class="preview" src="#" alt="Xem trước ảnh" style="max-width: 300px; max-height: 300px; display: none;">
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="addCate">Thêm</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php
require_once('view/footer.php');
?>
<script>
    function confirm_del_cate(id) {
        console.log(id);
        swal({
                title: "Bạn chắc chưa?",
                text: "Danh mục đã xóa sẽ không thể khôi phục",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "../ajaxs/admin/del_cate.php",
                        method: "POST",
                        dataType: "JSON",
                        data: {
                            id: id
                        },
                        success: function(response) {
                            if (response.status == 'success') {
                                swal({
                                        title: "Thành công",
                                        text: response.msg,
                                        icon: "success",
                                    })
                                    .then(function() {
                                        window.location.replace('index.php?page=categories');
                                    });
                            } else {
                                swal({
                                    title: "Lỗi",
                                    text: response.msg,
                                    icon: "error",
                                });
                            }
                        },
                        error: function() {
                            swal({
                                title: "Lỗi",
                                text: "Không thể xử lí",
                                icon: "error",
                            });
                        }
                    });
                }
            });
    }
</script>