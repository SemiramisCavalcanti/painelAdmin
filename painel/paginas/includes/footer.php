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
//    função para as tabelas na area administrativas
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true, 
      "info": true,
      "autoWidth": false,
      "responsive": true,
    }).buttons ()
            .container ()
            .appendto ('#example_wrapper .col-md-6:eq(0)')
  });
//  função para a pagina inicial
$(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').bootstrapSlider()

    /* ION SLIDER */
    $('#range_1').ionRangeSlider({
      min     : 0,
      max     : 5000,
      from    : 1000,
      to      : 4000,
      type    : 'double',
      step    : 1,
      prefix  : '$',
      prettify: false,
      hasGrid : true
    })
    $('#range_2').ionRangeSlider()

    $('#range_5').ionRangeSlider({
      min     : 0,
      max     : 10,
      type    : 'single',
      step    : 0.1,
      postfix : ' mm',
      prettify: false,
      hasGrid : true
    })
    $('#range_6').ionRangeSlider({
      min     : -50,
      max     : 50,
      from    : 0,
      type    : 'single',
      step    : 1,
      postfix : '°',
      prettify: false,
      hasGrid : true
    })

    $('#range_4').ionRangeSlider({
      type      : 'single',
      step      : 100,
      postfix   : ' light years',
      from      : 55000,
      hideMinMax: true,
      hideFromTo: false
    })
    $('#range_3').ionRangeSlider({
      type    : 'double',
      postfix : ' miles',
      step    : 10000,
      from    : 25000000,
      to      : 35000000,
      onChange: function (obj) {
        var t = ''
        for (var prop in obj) {
          t += prop + ': ' + obj[prop] + '\r\n'
        }
        $('#result').html(t)
      },
      onLoad  : function (obj) {
        //
      }
    })
  })
</script>
</body>
</html>