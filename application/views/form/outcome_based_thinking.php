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
                                    <h3 class="card-title">Understanding Opponent</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?= site_url('form/outcome_based_thinking/save') ?>" method="POST">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Opponent</label>
                                            <input required type="text" name="opponent" id="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Nama Perusahaan</label>
                                            <input required type="text" name="nama_perusahaan" id="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">apa yang sebenarnya anda inginkan
                                                dalam negosiasi ini</label>
                                            <input required type="text" name="pertanyaan1" id="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Apa yang mereka inginkan dalam
                                                negosiasi ini? Jika saya tidak tahu,
                                                kira kira mereka menginginkan apa?</label>
                                            <input required type="text" name="pertanyaan2" id="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Apa batas minimal yang masih bisa
                                                anda terima dalam negosiasi ini</label>
                                            <input required type="text" name="pertanyaan3" id="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Apa masalah yang mungkin terjadi
                                                pada proses ini?</label>
                                            <input required type="text" name="pertanyaan4" id="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Bagaimana cara menyelesaikan
                                                masalah ini jika mungkin, buat
                                                problem yang akan menjadi beban
                                                jika tidak deal?</label>
                                            <input required type="text" name="pertanyaan5" id="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Bagaimana saya membuat hal dalam
                                                proses bisa sebagai kesimpulan akhir
                                                untuk deal?</label>
                                            <input required type="text" name="pertanyaan6" id="" class="form-control">
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