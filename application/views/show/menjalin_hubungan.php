<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">5 TIPS MENJALIN HUBUNGAN</h3>
                                    <a href="<?= site_url('form/menjalin_hubungan/pdf/' . $id_isi) ?>" class="btn btn-warning float-right"><i class="fas fa-file-download"></i></a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-head-fixed">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>STAKEHOLDER/NAMA/JABATAN</th>
                                                <th>STAKEHOLDER/NAMA/JABATAN</th>
                                                <th>STAKEHOLDER/NAMA/JABATAN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>MENARIK PERHATIAN</td>
                                                <td><?= $pertanyaan1 ?></td>
                                                <td><?= $pertanyaan6 ?></td>
                                                <td><?= $pertanyaan11 ?></td>
                                            </tr>
                                            <tr>
                                                <td>MEMBANGUN KESAMAAN</td>
                                                <td><?= $pertanyaan2 ?></td>
                                                <td><?= $pertanyaan7 ?></td>
                                                <td><?= $pertanyaan12 ?></td>
                                            </tr>
                                            <tr>
                                                <td>MEMBANGUN KESELARASAN</td>
                                                <td><?= $pertanyaan3 ?></td>
                                                <td><?= $pertanyaan8 ?></td>
                                                <td><?= $pertanyaan13 ?></td>
                                            </tr>
                                            <tr>
                                                <td>TUNJUKAN MINAT</td>
                                                <td><?= $pertanyaan4 ?></td>
                                                <td><?= $pertanyaan9 ?></td>
                                                <td><?= $pertanyaan14 ?></td>
                                            </tr>
                                            <tr>
                                                <td>CIPTAKAN DUKUNGAN</td>
                                                <td><?= $pertanyaan5 ?></td>
                                                <td><?= $pertanyaan10 ?></td>
                                                <td><?= $pertanyaan15 ?></td>
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