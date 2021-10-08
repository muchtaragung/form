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
                                    <h3 class="card-title">List Form Terisi</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Form</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1 ?>
                                            <?php foreach ($form as $data) : ?>
                                                <tr class="text-center">
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $data->nama_form ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-info btn-sm" onclick="confirmReset('<?= site_url('admin/user/reset_form/' . $data->id_form . '/' . $this->uri->segment(4) . '/' . $data->id_user) ?>','<?= $data->nama_form ?>')">
                                                            <i class="fas fa-redo-alt"></i>
                                                            Reset
                                                        </button>
                                                        <a href="<?= site_url('admin/form/show_form/' . $this->uri->segment(4) . '/' . $data->id_form) ?>" class="btn btn-primary btn-sm rounded">Lihat Form</a>
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
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('layout/script') ?>

    <script>
        function confirmReset(link, nama) {
            Swal.fire({
                title: 'Apakah anda ingin reset form ' + nama,
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
    </script>

</body>

</html>