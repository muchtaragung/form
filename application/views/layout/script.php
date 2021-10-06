 <!-- jQuery -->
 <script src="<?= site_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="<?= site_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- bs-custom-file-input -->
 <script src="<?= site_url('assets/') ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
 <!-- AdminLTE App -->
 <script src="<?= site_url('assets/') ?>dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?= site_url('assets/') ?>dist/js/demo.js"></script>
 <!-- Page specific script -->
 <script>
     $(function() {
         bsCustomFileInput.init();
     });
 </script>


 <!-- DataTables  & Plugins -->
 <script src="<?= site_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="<?= site_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="<?= site_url('assets/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="<?= site_url('assets/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script src="<?= site_url('assets/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
 <script src="<?= site_url('assets/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
 <script src="<?= site_url('assets/') ?>plugins/jszip/jszip.min.js"></script>
 <script src="<?= site_url('assets/') ?>plugins/pdfmake/pdfmake.min.js"></script>
 <script src="<?= site_url('assets/') ?>plugins/pdfmake/vfs_fonts.js"></script>
 <script src="<?= site_url('assets/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
 <script src="<?= site_url('assets/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
 <script src="<?= site_url('assets/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
 <!-- Select2 -->
 <script src="<?= site_url('assets/') ?>plugins/select2/js/select2.full.min.js"></script>
 <script>
     $(function() {
         //Initialize Select2 Elements
         $('.select2').select2({
             theme: 'bootstrap4'
         })
     })
     $(function() {
         $("#example1").DataTable({
             "paging": true,
             "lengthChange": true,
             "searching": true,
             "ordering": true,
             "info": true,
             "autoWidth": true,
             "responsive": true,
         });
     });
 </script>

 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>