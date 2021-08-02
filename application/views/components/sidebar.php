<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="<?php echo base_url('home') ?>">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="">
                        <h3><b>SPK</b>-PLPP</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header nav-small-cap">Profile</li>
            <li class="<?php if ($this->uri->segment(1) == "profile"){ echo "active"; } ?>">
                <a href="<?php echo base_url('profile') ?>">
                    <i data-feather="user"></i>
                    <span>My Profile</span>
                </a>
            </li> 
            <li class="<?php if ($this->uri->segment(1) == "change_password"){ echo "active"; } ?>">
                <a href="<?php echo base_url('change_password') ?>">
                    <i data-feather="lock"></i>
                    <span>Ganti Password</span>
                </a>
            </li>             
            <li class="header nav-small-cap">Main</li>
            <li class="<?php if ($this->uri->segment(1) == "home") { echo "active"; } ?>">
                <a href="<?php echo base_url('home') ?>">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview <?php if ($this->uri->segment(1) == "alternative" || $this->uri->segment(1) == "alternative_values" || $this->uri->segment(1) == "alternative_value"){ echo "active menu-open"; } ?>">
                <a href="#">
                    <i data-feather="map"></i>
                    <span>Alternatif</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(1) == "alternative" && $this->uri->segment(2) != "create" && $this->uri->segment(2) != "alternative_value"){ echo "active"; } ?>"><a href="<?php echo base_url('alternative') ?>"><i class="ti-more"></i>View Alternatif</a></li>
                    <li class="<?php if ($this->uri->segment(1) == "alternative" && $this->uri->segment(2) == "create" ){ echo "active"; } ?>"><a href="<?php echo base_url('alternative/create') ?>"><i class="ti-more"></i>Input Alternatif</a></li>
                    <li class="<?php if ($this->uri->segment(1) == "alternative" && $this->uri->segment(2) == "alternative_value" ){ echo "active"; } ?>"><a href="<?php echo base_url('alternative/alternative_value') ?>"><i class="ti-more"></i>Input Nilai Alternatif</a></li>
                </ul>
            </li>  
            <li class="<?php if ($this->uri->segment(1) == "ranking"){ echo "active"; } ?>">
                <a href="<?php echo base_url('ranking') ?>">
                    <i data-feather="award"></i>
                    <span>Ranking</span>
                </a>
            </li>

            <li class="header nav-small-cap">Setting</li>
            <?php if ($this->session->userdata('role_id') != 1) { ?>                
                <li class="treeview <?php if ($this->uri->segment(1) == "user"){ echo "active menu-open"; } ?>">
                    <a href="#">
                        <i data-feather="users"></i>
                        <span>Users</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php if ($this->uri->segment(1) == "user" && $this->uri->segment(2) != "create"){ echo "active"; } ?>"><a href="<?php echo base_url('user') ?>"><i class="ti-more"></i>View User</a></li>
                        <li class="<?php if ($this->uri->segment(1) == "user" && $this->uri->segment(2) == "create" ){ echo "active"; } ?>"><a href="<?php echo base_url('user/create') ?>"><i class="ti-more"></i>Tambah User</a></li>
                    </ul>
                </li>              
            <?php } ?>
            <li class="treeview <?php if ($this->uri->segment(1) == "criteria" || $this->uri->segment(1) == "sub_criterias" || $this->uri->segment(1) == "sub_criteria"){ echo "active menu-open"; } ?>">
                <a href="#">
                    <i data-feather="grid"></i>
                    <span>Kriteria</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(1) == "criteria" && $this->uri->segment(2) != "create"){ echo "active"; } ?>"><a href="<?php echo base_url('criteria') ?>"><i class="ti-more"></i>View Kriteria</a></li>
                    <li class="<?php if ($this->uri->segment(1) == "criteria" && $this->uri->segment(2) == "create" ){ echo "active"; } ?>"><a href="<?php echo base_url('criteria/create') ?>"><i class="ti-more"></i>Tambah Kriteria</a></li>
                </ul>
            </li> 
            <hr>
            <li>
                <a href="<?php echo base_url('logout') ?>">
                    <i data-feather="log-out"></i>
                    <span>Logout</span>
                </a>
            </li> 
        </ul>
    </section>
</aside>