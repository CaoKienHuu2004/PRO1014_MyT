<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thành viên</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Thành viên</li>
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
                    Thêm thành viên
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
                                        <th scope="col">Username</th>
                                        <th scope="col">Họ và tên</th>
                                        <th scope="col">Điện thoại</th>
                                        <th scope="col">Thông tin</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($all_user as $row) {
                                        # code...
                                    ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $row['username'] ?></td>
                                            <td><?= $row['fullname'] ?></td>
                                            <td class="text-center">
                                                <?php
                                                if ($row['phone_number'] == "") {
                                                    echo '<span class="badge badge-danger">Chưa cập nhật</span>';
                                                } else {
                                                    echo $row['phone_number'];
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li><b>Ngày tham gia: </b><?= date("d/m/Y", strtotime($row['createdate']))  ?></li>
                                                    <li><b>Quyền: <?= badge_level($row['level']) ?></b></li>
                                                    <li><b>Tình trạng: </b><?= badge_banned($row['banned']) ?></li>
                                                    <li><b>Tổng đơn hàng: </b>3</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href="index.php?page=editUser&id=<?= $row['id'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>
                                                    Sửa</a>
                                                <a href="index.php?page=deleteCate&id=<?= $row['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i>
                                                    Xóa</a>
                                            </td>
                                        </tr>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                </tbody>
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
                <h4 class="modal-title">Thêm thành viên</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="index.php?page=addUser" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Tên đăng nhập:</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Họ và tên:</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Họ và tên">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Mật khẩu:</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Quyền:</label>
                        <select class="form-control select2bs4" id="level" name="level">
                            <option value="0" selected>Khách hàng</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="addUser" class="btn btn-primary" name="addUser">Thêm</button>
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