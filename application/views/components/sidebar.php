<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="<?php echo base_url('home') ?>">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="<?php echo base_url('assets/images/logo-light.png') ?>" alt="">
                        <h3><b>Aqua</b>Admin</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header nav-small-cap">Main</li>
            <li class="<?php if ($this->uri->segment(1) == "home") { echo "active"; } ?>">
                <a href="<?php echo base_url('home') ?>">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="<?php if ($this->uri->segment(1) == "alternative" || $this->uri->segment(1) == "alternative_values" || $this->uri->segment(1) == "alternative_value"){ echo "active"; } ?>">
                <a href="<?php echo base_url('alternative') ?>">
                    <i data-feather="map"></i>
                    <span>Alternatif</span>
                </a>
            </li>
            <li class="<?php if ($this->uri->segment(1) == "ranking"){ echo "active"; } ?>">
                <a href="<?php echo base_url('ranking') ?>">
                    <i data-feather="award"></i>
                    <span>Ranking</span>
                </a>
            </li>

            <li class="header nav-small-cap">Setting</li>
            <li class="<?php if ($this->uri->segment(1) == "user"){ echo "active"; } ?>">
                <a href="<?php echo base_url('user') ?>">
                    <i data-feather="users"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="<?php if ($this->uri->segment(1) == "criteria" || $this->uri->segment(1) == "sub_criterias" || $this->uri->segment(1) == "sub_criteria"){ echo "active"; } ?>">
                <a href="<?php echo base_url('criteria') ?>">
                    <i data-feather="grid"></i>
                    <span>Kriteria</span>
                </a>
            </li>            

        </ul>
    </section>
</aside>