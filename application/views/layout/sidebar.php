<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?= site_url('assets/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Program Form</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


        <?php if ($this->session->userdata('status') == 'admin') : ?>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="<?= site_url('admin/perusahaan') ?>" class="nav-link <?php if ($this->uri->segment(2) == 'perusahaan') : ?> active <?php endif ?>">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                List Perusahaan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('admin/form') ?>" class="nav-link <?php if ($this->uri->segment(2) == 'form') : ?> active <?php endif ?>">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                List Form
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('logout') ?>" class="nav-link">
                            <i class="nav-icon fas fa-door-open"></i>
                            <p>
                                logout
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        <?php elseif ($this->session->userdata('status') == 'user') : ?>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="<?= site_url('dashboard/list_form') ?>" class="nav-link <?php if ($this->uri->segment(2) == 'list_form') : ?> active <?php endif ?>">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                List Form
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= site_url('logout') ?>" class="nav-link">
                            <i class="nav-icon fas fa-door-open"></i>
                            <p>
                                logout
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        <?php endif ?>
    </div>
    <!-- /.sidebar -->
</aside>