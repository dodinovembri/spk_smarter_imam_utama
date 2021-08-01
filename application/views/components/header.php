<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('home') ?>" class="logo">
        <!-- mini logo -->
        <div class="logo-mini">
            <span class="light-logo"><img src="<?php echo base_url('assets/images/logo-light.png') ?>" alt="logo"></span>
            <span class="dark-logo"><img src="<?php echo base_url('assets/images/logo-dark.png') ?>" alt="logo"></span>
        </div>
        <!-- logo-->
        <div class="logo-lg">
            <span class="light-logo"><img src="<?php echo base_url('assets/images/logo-light-text.png') ?>" alt="logo"></span>
            <span class="dark-logo"><img src="<?php echo base_url('assets/images/logo-dark-text.png') ?>" alt="logo"></span>
        </div>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-15">
        <!-- Sidebar toggle button-->
        <div>
            <ul class="nav">
                <li class="btn-group nav-item">
                    <a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu" role="button">
                        <i class="nav-link-icon mdi mdi-menu text-dark"></i>
                    </a>
                </li>
            </ul>
        </div>
        <?php
        $CI = &get_instance();
        $CI->load->model(['UserModel']);
        $user_id = $this->session->userdata('id');
        $user = $CI->UserModel->getById($user_id)->row();
        ?>
        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">
                <!-- full Screen -->

                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="waves-effect waves-light rounded dropdown-toggle d-flex align-items-center" data-toggle="dropdown" title="User">
                        <div class="text-right d-none d-lg-block">
                            <p class="font-weight-600 mb-0"><?php echo $user->name; ?></p><small>Available</small>
                        </div>
                        <img src="<?php echo base_url('uploads/user/'); echo $user->gambar; ?>" alt="">
                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <li class="user-body">
                            <a class="dropdown-item" href="<?php echo base_url('profile') ?>"><i class="ti-user text-muted mr-2"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url('logout') ?>"><i class="ti-lock text-muted mr-2"></i> Logout</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>