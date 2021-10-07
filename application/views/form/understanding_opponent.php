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
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Understanding Opponent</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?= site_url('form/understanding_opponent/save') ?>" method="POST">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="goal">Goal</label>
                                            <input required type="text" class="form-control mb-1" id="goal" placeholder="Goal 1" name="goal[]">
                                            <input required type="text" class="form-control my-1" id="goal" placeholder="Goal 2" name="goal[]">
                                            <input required type="text" class="form-control mt-1" id="goal" placeholder="Goal 3" name="goal[]">
                                        </div>
                                        <div class="form-group">
                                            <label for="interest and inner motivation">Interest And Inner Motivation</label>
                                            <input required type="text" class="form-control mb-1" id="interest and inner motivation" placeholder="Interest And Inner Motivation 1" name='interest[]'>
                                            <input required type="text" class="form-control my-1" id="interest and inner motivation" placeholder="Interest And Inner Motivation 2" name='interest[]'>
                                            <input required type="text" class="form-control mt-1" id="interest and inner motivation" placeholder="Interest And Inner Motivation 3" name='interest[]'>
                                        </div>

                                        <div class="form-group">
                                            <label for="Strength And Weakness">Strength And Weakness</label>
                                            <input required type="text" class="form-control mb-1" id="Strength And Weakness" placeholder="Strength And Weakness 1" name='saw[]'>
                                            <input required type="text" class="form-control my-1" id="Strength And Weakness" placeholder="Strength And Weakness 2" name='saw[]'>
                                            <input required type="text" class="form-control mt-1" id="Strength And Weakness" placeholder="Strength And Weakness 3" name='saw[]'>
                                        </div>

                                        <div class="form-group">
                                            <label for="Informasi Tentang Perusahaan">Informasi Tentang Perusahaan</label>
                                            <textarea required name="informasi" id="" cols="30" rows="5" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="Bagaimana Negosiasi Dengan Mereka">Bagaimana Negosiasi Dengan Mereka</label>
                                            <textarea required name="bagaimana" id="" cols="30" rows="5" class="form-control"></textarea>
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

    <?php $this->load->view('layout/script') ?>

    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>