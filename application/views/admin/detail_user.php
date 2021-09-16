<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>List Users</h3>
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
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-outline-success block" onclick="add_user()" data-bs-toggle="modal">
                    Tambah User
                </button>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nama Perusahaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($detail as $data) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data->nama ?></td>
                                <td><?php echo $data->email ?></td>
                                <td><?php echo $data->nama_perusahaan ?></td>
                                <td class="text-center">
                                    <a class="btn btn-outline-primary" href="javascript:void(0)" title="Edit" onclick="edit_perusahaan('<?php echo $data->id_user ?>')"><i class="bi bi-pencil"></i></a>
                                    <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/user/hapus_user/<?php echo $data->id_user ?>/<?php echo $data->id_perusahaan ?>"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Edit Perusahaan</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form id="form1" action="<?php echo base_url() ?>admin/user/update_user" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id_perusahaan" value="<?= $this->uri->segment(4); ?>">
                    <input type="hidden" name="id" value="">
                    <div class=" form-group">
                        <label for="helpInputTop">Nama</label>
                        <input type="text" required name="nama" class="form-control" id="helpInputTop">
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">Email</label>
                        <input type="email" required name="email" class="form-control" id="helpInputTop">
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">password</label>
                        <input type="password" name="password" class="form-control" id="helpInputTop">
                        <input type="hidden" name="password_lama">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Accept</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade text-left" id="default2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah User</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form id="form2" action="<?php echo base_url() ?>admin/user/add_user" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id_perusahaan" value="<?= $this->uri->segment(4); ?>">
                        <label for="helpInputTop">Nama</label>
                        <input type="text" required name="nama" class="form-control" id="helpInputTop">
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">Email</label>
                        <input type="email" required name="email" class="form-control" id="helpInputTop">
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop">password</label>
                        <input type="password" required name="password" class="form-control" id="helpInputTop">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Accept</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function add_user() {
        save_method = 'add';
        $('#form2')[0].reset(); // reset form on modals
        $('#default2').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah User'); // Set Title to Bootstrap modal title
    }

    function edit_perusahaan(id) {
        save_method = 'update';
        $('#form1')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/user/detail_ajax_edit') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="id"]').val(data.id_user);
                $('[name="nama"]').val(data.nama);
                $('[name="email"]').val(data.email);
                $('[name="password_lama"]').val(data.password);
                $('#default').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit User'); // Set title to Bootstrap modal title
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }
</script>