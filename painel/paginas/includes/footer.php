<div class="wrapper">


    <footer class="main-footer">
        <strong>Copyright &copy; 2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0-rc
        </div>
    </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->

    <!-- ./wrapper -->
</div>
<!-- jQuery -->
<script src="painel/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="painel/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="painel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="painel/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="painel/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="painel/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="painel/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="painel/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="painel/plugins/moment/moment.min.js"></script>
<script src="painel/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="painel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="painel/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="painel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="painel/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="painel/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="painel/dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="painel/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="painel/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="painel/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="painel/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="painel/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="painel/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="painel/plugins/jszip/jszip.min.js"></script>
<script src="painel/plugins/pdfmake/pdfmake.min.js"></script>
<script src="painel/plugins/pdfmake/vfs_fonts.js"></script>
<script src="painel/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="painel/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="painel/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>



<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>