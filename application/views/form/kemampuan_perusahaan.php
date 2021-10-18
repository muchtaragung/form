<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/dist/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/dist/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/dist/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>assets/dist/favicon/site.webmanifest">

    <title><?= $page_title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= site_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= site_url('assets/') ?>dist/css/adminlte.min.css">
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
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Kemampuan Perusahaan</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?= site_url('form/kemampuan_perusahaan/save') ?>" method="POST">
                                    <div class="card-body">
                                        <div class="form-group py-1">
                                            <label for="tujuan">Perusahaan 1</label>
                                            <textarea name="perusahaan[]" id="" cols="30" rows='2' class="my-1 form-control" required placeholder="Nama Perusahaan"></textarea>
                                            <textarea name="produk_layanan[]" id="" cols="30" rows='2' class="my-1 form-control" required placeholder="Produk & Layanan"></textarea>
                                            <textarea name="sdm[]" id="" cols="30" rows='2' class="my-1 form-control" required placeholder="SDM"></textarea>
                                            <textarea name="lainnya[]" id="" cols="30" rows='2' class="my-1 form-control" required placeholder="Lainnya"></textarea>
                                        </div>
                                        <div class="form-group py-1">
                                            <label for="tujuan">Perusahaan 2</label>
                                            <textarea name="perusahaan[]" id="" cols="30" rows='2' class="my-1 form-control" required placeholder="Nama Perusahaan"></textarea>
                                            <textarea name="produk_layanan[]" id="" cols="30" rows='2' class="my-1 form-control" required placeholder="Produk & Layanan"></textarea>
                                            <textarea name="sdm[]" id="" cols="30" rows='2' class="my-1 form-control" required placeholder="SDM"></textarea>
                                            <textarea name="lainnya[]" id="" cols="30" rows='2' class="my-1 form-control" required placeholder="Lainnya"></textarea>
                                        </div>
                                        <div class="form-group py-1">
                                            <label for="tujuan">Perusahaan 3</label>
                                            <textarea name="perusahaan[]" id="" cols="30" rows='2' class="my-1 form-control" required placeholder="Nama Perusahaan"></textarea>
                                            <textarea name="produk_layanan[]" id="" cols="30" rows='2' class="my-1 form-control" required placeholder="Produk & Layanan"></textarea>
                                            <textarea name="sdm[]" id="" cols="30" rows='2' class="my-1 form-control" required placeholder="SDM"></textarea>
                                            <textarea name="lainnya[]" id="" cols="30" rows='2' class="my-1 form-control" required placeholder="Lainnya"></textarea>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->

                        </div>
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

    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>