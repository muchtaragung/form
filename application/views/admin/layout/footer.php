<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 &copy; </p>
        </div>
        <div class="float-end">
            <p>Create with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com">Korpora Consulting</a></p>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url() ?>assets/vendors/simple-datatables/simple-datatables.js"></script>
<!-- <script src="<?= base_url() ?>assets/vendors/apexcharts/apexcharts.js"></script> -->
<!-- <script src="<?= base_url() ?>assets/js/pages/dashboard.js"></script> -->

<!-- <script src="<?= base_url() ?>assets/js/extensions/sweetalert2.js"></script>
<script src="<?= base_url() ?>assets/vendors/sweetalert2/sweetalert2.all.min.js"></script> -->
<script src="<?= base_url() ?>assets/vendors/choices.js/choices.min.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);

    jQuery(document).ready(function($) {
        $('.alert_notif').on('click', function() {
            var getLink = $(this).attr('href');
            swal({
                title: "Apakah anda yakin?",
                text: "Data yang dihapus tidak dapat kembali.",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Tidak, kembali!",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function() {
                window.location.href = getLink
            });
            return false;
        });
    });
</script>

<script src="<?= base_url() ?>assets/js/main.js"></script>
</body>

</html>