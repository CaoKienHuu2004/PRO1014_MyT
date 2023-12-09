<?php
$html_product = '';
$i = 1;
foreach ($list_product as $row) {
  $name_cate = check_name_cate($row['iddm']);
  $html_product .= '<tr>
                      <td>' . $i . '</td>
                      <td><img src="' . "../" . '' . PATH_IMG_PRO . $row['image'] . '" width="80"></td>
                      <td>' . $row['name'] . '</td>
                      <td>' . $name_cate . '</td>
                      <td>' . format_cash($row['price']) . ' VND</td>
                      <td>' . $row['discount'] . ' %</td>
                      <td>
                        <a href="index.php?page=update_product&id=' . $row['id'] . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                        <button onclick="confirm_del_pro(' . $row['id'] . ')" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</button>
                      </td>
                    </tr>';
  $i++;
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sản phẩm</h1>
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
      <div class="d-flex justify-content-end">
        <a href="index.php?page=add-product" class="btn btn-primary mb-2">Thêm sản phẩm</a>
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
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Danh mục</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Khuyến mãi</th>
                    <th scope="col">Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?= $html_product ?>
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
<?php
require_once('view/footer.php');
?>
<script>
  function confirm_del_pro(id) {
    console.log(id);
    swal({
        title: "Bạn chắc chưa?",
        text: "Sản phẩm đã xóa sẽ không thể khôi phục",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.ajax({
            url: "../ajaxs/admin/del_pro.php",
            method: "POST",
            data: JSON.stringify({
              id: id
            }),
            contentType: 'application/json',
            dataType: 'json',
            success: function(response) {
              if (response.status == 'success') {
                swal({
                    title: "Thành công",
                    text: response.msg,
                    icon: "success",
                  })
                  .then(function() {
                    window.location.replace('index.php?page=products');
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