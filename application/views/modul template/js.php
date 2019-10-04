<!-- Bootstrap core JavaScript-->
<script>
  // Nilai awal
  var counter = 0

  // Tampilan nilai
  $("#counter").text(counter);

  // Ketika tombol diklik
  $("#add").click(function() {
    //Nilai++
    counter = counter + 1;
    // Tampilan Total
    $("#counter").text(counter);
  });

  // Reset
  $("#reset").click(function() {
    counter = 0;
    $("#counter").text(counter);
  });
</script>

<!-- password kuat/lemah -->
<script type="text/javascript">
    $(document).ready(function(){
      $('#password').on('input',function(){

        //dapatkan karakter di field password
        let karakter = $(this).val();

        //hitung karakter dari field password
        let totalkarakter = karakter.length;

        if(totalkarakter >= 6){
          $('.status').removeClass('lemah'); //hapus class lemah

          $('.status').text('kuat'); //string menjadi kuat
          $('.status').addClass('kuat'); //tambah class sukses
        }else{
          $('.status').removeClass('kuat'); //hapus class kuat

          $('.status').text('lemah'); //string menjadi lemah
          $('.status').addClass('lemah'); //tambah class sukses
        }
      });
    });
</script>

<!-- input umur otomatis -->
<script type="text/javascript">
    $(document).ready(function() {
      var age = "";
        $('#lahir').datepicker({
        onSelect: function (value, ui) {
          var today = new Date();
          age = today.getFullYear() - ui.selectedYear;
          $('#usia').val(age);
        },
        changeDay: true,
        changeMonth: true,
        changeYear: true
      })
    })
</script>

<!-- input umur otomatis -->
<script type="text/javascript">
    $(document).ready(function() {
      var age = "";
        $('#e_lahir').datepicker({
        onSelect: function (value, ui) {
          var today = new Date();
          age = today.getFullYear() - ui.selectedYear;
          $('#e_usia').val(age);
        },
        changeDay: true,
        changeMonth: true,
        changeYear: true
      })
    })
</script>

<!-- nomor hp wajib angka -->
<script type="text/javascript">
    $(document).ready(function(){
      $('#nomor-hp').keyup(function() {

        //dapatkan nomorHP di field 
        let nomorHP = $(this).val();

        if(!nomorHP.match(/^[0-9]*$/)){
          alert('Hanya Boleh Angka');
        }
      });
    });
</script>


<!-- jQuery -->
<script src="<?= base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.js"></script> -->
<!-- Datepicker -->
<!-- <script src="<?= base_url(); ?>vendors/jquery.js"></script> -->
<script src="<?= base_url(); ?>vendors/jquery-ui.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url(); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= base_url(); ?>vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<!-- <script src="<?php echo base_url().'assets/Chart.js'?>"></script> -->
<script src="<?= base_url(); ?>vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="<?= base_url(); ?>vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?= base_url(); ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url(); ?>vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="<?= base_url(); ?>vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?= base_url(); ?>vendors/Flot/jquery.flot.js"></script>
<script src="<?= base_url(); ?>vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?= base_url(); ?>vendors/Flot/jquery.flot.time.js"></script>
<script src="<?= base_url(); ?>vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?= base_url(); ?>vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?= base_url(); ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?= base_url(); ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?= base_url(); ?>vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="<?= base_url(); ?>vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="<?= base_url(); ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="<?= base_url(); ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?= base_url(); ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?= base_url(); ?>vendors/moment/min/moment.min.js"></script>
<script src="<?= base_url(); ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- Datatables -->
<script src="<?= base_url(); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url(); ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?= base_url(); ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url(); ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?= base_url(); ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?= base_url(); ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?= base_url(); ?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?= base_url(); ?>vendors/jszip/dist/jszip.min.js"></script>
<script src="<?= base_url(); ?>vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>vendors/pdfmake/build/vfs_fonts.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="<?= base_url(); ?>vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?= base_url(); ?>vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="<?= base_url(); ?>vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="<?= base_url(); ?>vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="<?= base_url(); ?>vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url(); ?>vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="<?= base_url(); ?>vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="<?= base_url(); ?>vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="<?= base_url(); ?>vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="<?= base_url(); ?>vendors/starrr/dist/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="<?= base_url(); ?>build/js/custom.min.js"></script>