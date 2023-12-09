<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách mã giảm giá</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách mã giảm giá</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary btn-icon-left mb-2" href="index.php?page=coupon-add" type="button"><i class="fas fa-plus-circle mr-1"></i>Thêm mã giảm giá</a>
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
                                        <th style="width: 5px;">#</th>
                                        <th>Mã giảm giá</th>
                                        <th>Số lượng</th>
                                        <th>Đã sử dụng</th>
                                        <th>Giảm</th>
                                        <th>Thời gian tạo</th>
                                        <th style="width: 20%">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($list_coupon as $row) {
                                    ?>
                                        <tr>
                                        <td><?=$i?></td>
                                            <td><b><?=$row['code'];?></b> (<?=$row['used'] >= $row['amount'] ? '<span style="color:red">Đã sử dụng hết</span>' : '<span style="color:green">Còn '.$AWWW2=$row['amount'] - $row['used'].' lượt sử dụng</span>';?>)</td>
                                            <td><span style="font-size: 15px;" class="badge badge-info"><?=format_cash($row['amount']);?></span>
                                            </td>
                                            <td><span style="font-size: 15px;" class="badge badge-danger"><?=format_cash($row['used']);?></span>
                                            </td>
                                            <td><span style="font-size: 15px;" class="badge badge-dark"><?=$row['discount'];?>%</span></td>
                                            <td><?=$row['createdate'];?></td>
                                            <td>
                                            <a aria-label="" href="index.php?page=coupon-log&id=<?=$row['id']?>"
                                                    style="color:white;"
                                                    class="btn btn-primary btn-sm btn-icon-left m-b-10" type="button">
                                                    <i class="fas fa-history mr-1"></i><span class="">History</span>
                                                </a>
                                                <a aria-label="" href="index.php?page=coupon-edit&id=<?=$row['id']?>"
                                                    style="color:white;"
                                                    class="btn btn-info btn-sm btn-icon-left m-b-10" type="button">
                                                    <i class="fas fa-edit mr-1"></i><span class="">Edit</span>
                                                </a>
                                                <button style="color:white;" onclick="RemoveRow('<?=$row['id'];?>', '<?=$row['code'];?>')"
                                                    class="btn btn-danger btn-sm btn-icon-left m-b-10" type="button">
                                                    <i class="fas fa-trash mr-1"></i><span class="">Delete</span>
                                                </button>
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