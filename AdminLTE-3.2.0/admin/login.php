<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Đăng nhập</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="layout/plugins/fontawesome-free/css/all.min.css">
  <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
  <!-- icheck bootstrap -->
  <script src="layout/plugins/sweetalert/sweetalert.min.js"></script>
  <link rel="stylesheet" href="layout/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="layout/dist/css/adminlte.min.css">
  <script src="https://test.giangpoly.click/public/js/jquery-3.6.0.js"></script>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index.php">Tr<b>Giang</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Đăng nhập để bắt đầu phiên của bạn</p>
        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="text" id="username" name="username" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="password" type="password" name="password" class="form-control" placeholder="Mật khẩu">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-7">
              <div class="icheck-primary">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">
                  Ghi nhớ mật khẩu
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-5">
              <button id="btnLogin" type="submit" name="loginBtn" class="btn btn-primary btn-block">Đăng nhập</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
  <!-- jQuery -->
  <script src="layout/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="layout/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="layout/dist/js/adminlte.js"></script>
</body>

</html>
<script type="text/javascript">
  $("#btnLogin").on("click", function() {
    $('#btnLogin').html('<i class="fa fa-spinner fa-spin"></i> Loading...').prop('disabled',
      true);
    $.ajax({
      url: "../ajaxs/admin/login.php",
      method: "POST",
      data: {
        username: $("#username").val(),
        password: $("#password").val()
      },
      success: function(respone) {
        if (respone.status == 'success') {
          swal({
            title: "Thành công",
            text: respone.msg,
            icon: "success",
          });
          setTimeout("location.href = 'index.php';", 1000);
        } else {
          swal({
            title: "Lỗi",
            text: respone.msg,
            icon: "error",
          });
        }
        $('#btnLogin').html('Đăng Nhập').prop('disabled', false);
      },
      error: function() {
        swal({
          title: "Lỗi",
          text: "Không thể xử lí",
          icon: "error",
        });
        $('#btnLogin').html('Đăng Nhập').prop('disabled', false);
      }

    });
  });
</script>

