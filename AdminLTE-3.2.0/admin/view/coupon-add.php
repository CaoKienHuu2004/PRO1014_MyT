<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm mã giảm giá</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm mã giảm giá</li>
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
                        <a class="btn btn-danger btn-icon-left m-b-10" href="index.php?page=coupon-list"
                            type="button"><i class="fas fa-undo-alt mr-1"></i>Quay Lại</a>
                    </div>
                </section>
                <section class="col-lg-6">
                </section>
                <section class="col-lg-12 connectedSortable">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-gift mr-1"></i>
                                THÊM MÃ GIẢM GIÁ
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn bg-success btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn bg-warning btn-sm" data-card-widget="maximize"><i
                                        class="fas fa-expand"></i>
                                </button>
                                <button type="button" class="btn bg-danger btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <form action="" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã giảm giá</label>
                                    <div class="row">
                                        <div class="col-lg-7 mr-1 mb-3">
                                            <input type="text" class="form-control" id="code" name="code"
                                                placeholder="Nhập mã giảm giá cần tạo" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <button type="button" onclick="randomCode()" class="btn btn-danger">Tạo mã ngẫu nhiên</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng</label>
                                    <input type="number" class="form-control" id="amount" name="amount"
                                        placeholder="Nhập số lượng mã" required>
                                    <i>Số lượng mã cần dùng, VD số lượng 2 thì mã sẽ dùng được 2 lần 2 tài khoản khác
                                        nhau.</i>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Đơn hàng tối thiểu</label>
                                    <input type="number" class="form-control" id="min" name="min" value="1000"
                                        placeholder="Nhập giá trị đơn hàng tối thiểu" required>
                                    <i>Giá trị đơn hàng tối thiểu được dùng mã giảm giá này</i>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Đơn hàng tối đa</label>
                                    <input type="number" class="form-control" id="max" name="max" value="10000000"
                                        placeholder="Nhập giá trị đơn hàng tối đa" required>
                                    <i>Giá trị đơn hàng tối đa được dùng mã giảm giá này</i>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giảm</label>
                                    <input type="text" class="form-control" id="discount" name="discount"
                                        placeholder="Nhập chiết khấu giảm giá VD: 10 (tức giảm 10% khi nhập coupon)"
                                        required>
                                </div>
                            </div>
                            <div class="card-footer clearfix">
                                <button name="AddCoupon" id="AddCoupon" class="btn btn-info btn-icon-left m-b-10" type="submit"><i
                                        class="fas fa-plus mr-1"></i>Thêm Ngay</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<script>
function random(length) {
    var result = '';
    var characters = 'QWERTYUPASDFGHJKZXCVBNM123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() *
            charactersLength));
    }
    return result;
}
function randomCode(){
    document.getElementById('code').value = random(8);
}
</script>
<?php
require_once('view/footer.php');
?>
<script type="text/javascript">
  $("#AddCoupon").on("click", function() {
    $('#AddCoupon').html('<i class="fa fa-spinner fa-spin"></i> Loading...').prop('disabled',
      true);
    $.ajax({
      url: "../ajaxs/admin/coupon-add.php",
      method: "POST",
      dataType: "JSON",
      data: {
        code: $("#code").val(),
        amount: $("#amount").val(),
        min: $("#min").val(),
        max: $("#max").val(),
        discount: $("#discount").val()
      },
      success: function(respone) {
        if (respone.status == 'success') {
          swal({
            title: "Thành công", 
            text: respone.msg,
            icon: "success",
          });
          setTimeout("location.href = 'index.php?page=coupon-list';", 1000);
        } else {
          swal({
            title: "Lỗi",
            text: respone.msg,
            icon: "error",
          });
        }
        $('#AddCoupon').html('Thêm ngay').prop('disabled', false);
      },
      error: function() {
        swal({
          title: "Lỗi",
          text: "Không thể xử lí",
          icon: "error",
        });
        $('#AddCoupon').html('Thêm ngay').prop('disabled', false);
      }

    });
  });
</script>