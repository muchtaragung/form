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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Outcome Based Thinking</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-head-fixed">
                                        <thead>
                                            <tr>
                                                <th>Pertanyaan</th>
                                                <th>Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>apa yang sebenarnya anda inginkan
                                                    dalam negosiasi ini</th>
                                                <td><?= $pertanyaan1 ?></td>
                                            </tr>
                                            <tr>
                                                <th>Apa yang mereka inginkan dalam
                                                    negosiasi ini? Jika saya tidak tahu,
                                                    kira kira mereka menginginkan apa?</th>
                                                <td><?= $pertanyaan2 ?></td>
                                            </tr>
                                            <tr>
                                                <th>Apa batas minimal yang masih bisa
                                                    anda terima dalam negosiasi ini</th>
                                                <td><?= $pertanyaan3 ?></td>
                                            </tr>
                                            <tr>
                                                <th>Apa masalah yang mungkin terjadi
                                                    pada proses ini?</th>
                                                <td><?= $pertanyaan4 ?></td>
                                            </tr>
                                            <tr>
                                                <th>Bagaimana cara menyelesaikan
                                                    masalah ini jika mungkin, buat
                                                    problem yang akan menjadi beban
                                                    jika tidak deal?</th>
                                                <td><?= $pertanyaan5 ?></td>
                                            </tr>

                                            <tr>
                                                <th>Bagaimana saya membuat hal dalam
                                                    proses bisa sebagai kesimpulan akhir
                                                    untuk deal?</th>
                                                <td><?= $pertanyaan6 ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
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
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>