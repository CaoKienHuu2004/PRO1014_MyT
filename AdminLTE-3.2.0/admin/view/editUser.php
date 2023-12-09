<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa thành viên: <?= $user_info['username'] ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Sửa thành viên</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-12 connectedSortable ui-sortable">
                    <div class="card card-primary card-outline">
                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title">
                                <i class="fas fa-user-edit mr-1"></i>
                                CHỈNH SỬA THÀNH VIÊN
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn bg-warning btn-sm" data-card-widget="maximize"><i class="fas fa-expand"></i>
                                </button>
                                <button type="button" class="btn bg-danger btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Email (*)</label>
                                    <input type="email" class="form-control" value="<?= $user_info['email'] ?>" name="email" required="">
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Mật khẩu (*)</label>
                                            <input type="text" class="form-control" placeholder="**********" name="password">
                                            <i>Nhập mật khẩu cần thay đổi, hệ thống sẽ tự động mã hoá (để trống nếu
                                                không muốn
                                                thay đổi)</i>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Số điện thoại (*)</label>
                                            <input type="text" class="form-control" value="<?= $user_info['phone_number'] ?>" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Chiết khấu giảm giá (*)</label>
                                            <input type="text" class="form-control" value="0" name="chietkhau">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Level (*)</label>
                                            <select class="form-control select2bs4" name="admin">
                                                <option value="1" <?= $user_info['level'] == 1 ? 'selected' : ''; ?>>Admin
                                                </option>
                                                <option value="0" <?= $user_info['level'] == 0 ? 'selected' : ''; ?>>Khách hàng
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Banned (*)</label>
                                                <select class="form-control select2bs4" name="banned">
                                                <option value="0" <?= $user_info['banned'] == 0 ? 'selected' : ''; ?>>Hoạt động
                                                </option>
                                                <option value="1" <?= $user_info['banned'] == 1 ? 'selected' : ''; ?>>Bị cấm
                                                </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer clearfix">
                                <button aria-label="" class="btn btn-info btn-icon-left m-b-10" type="submit"><i class="fas fa-save mr-1"></i>Lưu Ngay</button>
                            </div>
                        </form>
                    </div>
                </section>
                <section class="col-lg-12 connectedSortable ui-sortable">
                    <div class="card card-primary card-outline collapsed-card">
                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title">
                                <i class="fas fa-history mr-1"></i>
                                Đơn hàng
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn bg-success btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <button type="button" class="btn bg-warning btn-sm" data-card-widget="maximize"><i class="fas fa-expand"></i>
                                </button>
                                <button type="button" class="btn bg-danger btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" style="display: none;">
                            <div class="table-responsive p-0">
                                <div id="datatable1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="datatable1_length"><label>Show <select name="datatable1_length" aria-controls="datatable1" class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                        <option value="500">500</option>
                                                        <option value="1000">1,000</option>
                                                        <option value="2000">2,000</option>
                                                        <option value="5000">5,000</option>
                                                        <option value="9999">10,000</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="datatable1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable1"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable1" class="table table-bordered table-striped table-hover dataTable no-footer" role="grid" aria-describedby="datatable1_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th width="5%" class="sorting sorting_asc" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 8.45312px;">#</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 103.766px;">Username</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Số tiền trước: activate to sort column ascending" style="width: 127.109px;">Số tiền trước</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Số tiền thay đổi: activate to sort column ascending" style="width: 152.359px;">Số tiền thay đổi</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Số tiền hiện tại: activate to sort column ascending" style="width: 146.562px;">Số tiền hiện tại</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Thời gian: activate to sort column ascending" style="width: 95.125px;">Thời gian</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Nội dung: activate to sort column ascending" style="width: 92.625px;">Nội dung</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd">
                                                        <td valign="top" colspan="7" class="dataTables_empty">No data available in table</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="datatable1_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="datatable1_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="datatable1_previous"><a href="#" aria-controls="datatable1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item next disabled" id="datatable1_next"><a href="#" aria-controls="datatable1" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="col-lg-12 connectedSortable ui-sortable">
                    <div class="card card-primary card-outline collapsed-card">
                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title">
                                <i class="fas fa-history mr-1"></i>
                                NHẬT KÝ HOẠT ĐỘNG
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn bg-success btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <button type="button" class="btn bg-warning btn-sm" data-card-widget="maximize"><i class="fas fa-expand"></i>
                                </button>
                                <button type="button" class="btn bg-danger btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" style="display: none;">
                            <div class="table-responsive p-0">
                                <div id="datatable2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="datatable2_length"><label>Show <select name="datatable2_length" aria-controls="datatable2" class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                        <option value="500">500</option>
                                                        <option value="1000">1,000</option>
                                                        <option value="2000">2,000</option>
                                                        <option value="5000">5,000</option>
                                                        <option value="9999">10,000</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="datatable2_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable2"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable2" class="table table-bordered table-striped table-hover dataTable no-footer" role="grid" aria-describedby="datatable2_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th width="5%" class="sorting sorting_asc" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 8.45312px;">#</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 71.8438px;">Username</th>
                                                        <th width="40%" class="sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 358.562px;">Action</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="Time: activate to sort column ascending" style="width: 37.6875px;">Time</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="Ip: activate to sort column ascending" style="width: 81.4375px;">Ip</th>
                                                        <th width="25%" class="sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="Device: activate to sort column ascending" style="width: 211.016px;">Device</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr class="odd">
                                                        <td class="sorting_1">0</td>
                                                        <td><a href="https://test.giangpoly.click/admin/user-edit/5">giankkfg</a>
                                                        </td>
                                                        <td>Thực hiện tạo tài khoản</td>
                                                        <td>2023-11-08 23:31:00</td>
                                                        <td>113.161.85.254</td>
                                                        <td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="datatable2_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="datatable2_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="datatable2_previous"><a href="#" aria-controls="datatable2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="datatable2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item next disabled" id="datatable2_next"><a href="#" aria-controls="datatable2" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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