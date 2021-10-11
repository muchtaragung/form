<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/head') ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php $this->load->view('layout/navbar') ?>

        <?php $this->load->view('layout/sidebar') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <!-- <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>General Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">General Form</li>
                            </ol>
                        </div>
                    </div> -->
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-12">
                            <?php if ($this->session->flashdata('msg') != null) { ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('msg'); ?>
                                </div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('error') != null) { ?>
                                <div class="alert alert-warning" role="alert">
                                    <?php echo $this->session->flashdata('error'); ?>
                                </div>
                            <?php } ?>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">List Form Perusahaan <?= $perusahaan->nama_perusahaan ?></h3>
                                    <button type="button" class="btn btn-success float-right" onclick="add_form()">
                                        <i class="fas fa-plus"></i>
                                    </button>

                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row mb-5">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-danger float-right" onclick="deniedAll('<?= site_url('admin/perusahaan/akses_denied_all/' . $perusahaan->id_perusahaan . '/' . $this->uri->segment(4)) ?>')">
                                                Denied All
                                            </button>
                                            <button type="button" class="btn btn-info float-right" onclick="allowAll('<?= site_url('admin/perusahaan/akses_allow_all/' . $perusahaan->id_perusahaan . '/' . $this->uri->segment(4)) ?>')">
                                                Allow All
                                            </button>
                                        </div>
                                    </div>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Nama Form</th>
                                                <th>Akses</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1 ?>
                                            <?php foreach ($list_form as $data) : ?>
                                                <tr class="text-center">
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $data->nama_form ?></td>
                                                    <?php if ($data->akses == 0) { ?>
                                                        <td><span class="badge badge-danger">Tidak Diizinkan</span></td>
                                                    <?php } elseif ($data->akses == 1) { ?>
                                                        <td><span class="badge badge-success">Diizinkan</span></td>
                                                    <?php }  ?>
                                                    <td>
                                                        <div class="btn-group">
                                                            <?php if ($data->akses == 0) { ?>
                                                                <button type="button" class="btn btn-warning btn-sm" onclick="confirmAkses('<?= site_url('admin/perusahaan/akses_form_allow/' . $data->id_akses . '/' . $this->uri->segment(4)) ?>','<?= $data->nama_form ?>')">
                                                                    <i class="fas fa-door-open"></i><br>
                                                                    Akses
                                                                </button>
                                                            <?php } elseif ($data->akses == 1) { ?>
                                                                <button type="button" class="btn btn-warning btn-sm" onclick="confirmAkses('<?= site_url('admin/perusahaan/akses_form_denied/' . $data->id_akses . '/' . $this->uri->segment(4)) ?>','<?= $data->nama_form ?>')">
                                                                    <i class="fas fa-door-open"></i><br>
                                                                    Akses
                                                                </button>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <!--/.col (left) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">

            <strong>Copyright &copy; 2021 Korpora Consulting.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('layout/script') ?>

    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="form-tambah" action="<?= site_url('admin/perusahaan/add_list_akses_form') ?>" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah List Form</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="uri" value="<?= $this->uri->segment(4); ?>">
                        <input type="hidden" name="id_perusahaan" value="<?= $perusahaan->id_perusahaan ?>">
                        <div class="form-group">
                            <label for="">Form</label>
                            <select required class="select2 form-control" name="form" id="form">
                                <option disabled selected value="">Pilih Form</option>
                                <?php foreach ($form as $data) : ?>
                                    <option value="<?= $data->id_form ?>"><?= $data->nama_form ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog role=" document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Perusahaan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form id="form1" action="<?php echo site_url("admin/perusahaan/update") ?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="helpInputTop">Nama Perusahaan</label>
                            <input type="text" required name="nama_perusahaan" class="form-control" id="helpInputTop">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function add_form() {
            save_method = 'add';
            $('#form-tambah')[0].reset(); // reset form on modals
            $('#modal-tambah').modal('show'); // show bootstrap modal
            $('.modal-title').text('Tambah List Form'); // Set Title to Bootstrap modal title
        }

        function edit_perusahaan(id) {
            save_method = 'update';
            $('#form1')[0].reset(); // reset form on modals

            //Ajax Load data from ajax
            $.ajax({
                url: "<?php echo site_url('admin/perusahaan/edit') ?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('[name="id"]').val(data.id_perusahaan);
                    $('[name="nama_perusahaan"]').val(data.nama_perusahaan);
                    $('#default').modal('show'); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Edit Form'); // Set title to Bootstrap modal title

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error get data from ajax');
                }
            });
        }

        function confirmDelete(link, nama) {
            Swal.fire({
                title: 'Apakah Anda Ingin Menghapus Perusahaan ' + nama,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace(link)
                }
            })
        }

        function confirmAkses(link, nama, uri) {
            Swal.fire({
                title: 'Apakah Anda Ingin Mengubah Akses Form ' + nama,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace(link, uri)
                }
            })
        }

        function allowAll(link, uri) {
            Swal.fire({
                title: 'Mengubah semua form menjadi diizinkan, Apakah anda yakin?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace(link, uri)
                }
            })
        }

        function deniedAll(link, uri) {
            Swal.fire({
                title: 'Mengubah semua form menjadi tidak diizinkan, Apakah anda yakin?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace(link, uri)
                }
            })
        }
    </script>

</body>

</html>