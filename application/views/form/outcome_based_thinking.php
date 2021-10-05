<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | General Form Elements</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= site_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= site_url('assets/') ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= site_url('assets/') ?>index3.html" class="brand-link">
                <img src="<?= site_url('assets/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Program Form</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Forms
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('form/understanding_opponent') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Understanding Opponent</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('form/outcome_based_thinking') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Outcome Based Thinking</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

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
                                            <input type="text" name="opponent" id="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Nama Perusahaan</label>
                                            <input type="text" name="nama_perusahaan" id="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">apa yang sebenarnya anda inginkan
                                                dalam negosiasi ini</label>
                                            <input type="text" name="pertanyaan1" id="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Apa yang mereka inginkan dalam
                                                negosiasi ini? Jika saya tidak tahu,
                                                kira kira mereka menginginkan apa?</label>
                                            <input type="text" name="pertanyaan2" id="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Apa batas minimal yang masih bisa
                                                anda terima dalam negosiasi ini</label>
                                            <input type="text" name="pertanyaan3" id="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Apa masalah yang mungkin terjadi
                                                pada proses ini?</label>
                                            <input type="text" name="pertanyaan4" id="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Bagaimana cara menyelesaikan
                                                masalah ini jika mungkin, buat
                                                problem yang akan menjadi beban
                                                jika tidak deal?</label>
                                            <input type="text" name="pertanyaan5" id="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Bagaimana saya membuat hal dalam
                                                proses bisa sebagai kesimpulan akhir
                                                untuk deal?</label>
                                            <input type="text" name="pertanyaan6" id="" class="form-control">
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
</body>

</html>