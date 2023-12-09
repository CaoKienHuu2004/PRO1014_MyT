<footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="https://www.facebook.com/giangcoder/">Nguyễn Trường
            Giang</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>

<!-- ./wrapper -->

<!-- jQuery -->
<script src="layout/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="layout/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="layout/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="layout/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="layout/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="layout/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="layout/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="layout/plugins/moment/moment.min.js"></script>
<script src="layout/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="layout/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="layout/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="layout/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="layout/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="layout/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="layout/dist/js/pages/dashboard.js"></script>
<!--  dashboard demo (This is only for demo purposes) -->
<script src="layout/dist/js/pages/dashboard.js"></script>
<script src="layout/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="layout/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="layout/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="layout/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="layout/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="layout/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="layout/plugins/jszip/jszip.min.js"></script>
<script src="layout/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="layout/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="layout/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="layout/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="layout/plugins/pdfmake/pdfmake.min.js"></script>
<script src="layout/plugins/pdfmake/vfs_fonts.js"></script>
<script src="layout/assets/js/giangcoder.main.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
<script>
    $(document).ready(function() {
        const fileInputs = $('.file-input');
        const imgPreviews = $('.preview');

        fileInputs.each(function(index, input) {
            $(input).change(function() {
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        // Truy cập thẻ img tương ứng bằng index
                        imgPreviews.eq(index).attr("src", e.target.result).show();
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });
    });
</script>

</body>

</html>