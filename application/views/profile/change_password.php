<div class="wrapper">
    <?php
    $this->load->view('components/header');
    $this->load->view('components/sidebar');
    ?>

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">Ganti Password</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ganti Password</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-12">
                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-primary alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php
                                echo $this->session->flashdata('success');
                                $this->session->unset_userdata('success');
                                ?>
                            </div>
                        <?php } elseif ($this->session->flashdata('warning')) { ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php
                                echo $this->session->flashdata('warning');
                                $this->session->unset_userdata('warning');
                                ?>
                            </div>
                        <?php } ?>

                        <div class="nav-tabs-custom box-profile">

                                <!-- /.tab-pane -->

                                    <div class="box box-body">
                                        <form class="form-horizontal form-element col-12" action="<?php echo base_url('profile/store_pw/'); echo $this->session->userdata('role_id'); ?>" enctype="multipart/form-data" method="POST">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 control-label">Password</label>

                                                <div class="col-sm-10">
                                                    <input type="password" name="password" class="form-control" id="pass" style="width: 95%; display:inline-block" placeholder="" required>
                                                    <span id="mybutton" onclick="change()"><i class="glyphicon glyphicon-eye-open"></i></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 control-label">Confirm Password</label>

                                                <div class="col-sm-10">
                                                    <input type="password" name="password_confirm" class="form-control" id="pass2" style="width: 95%; display:inline-block" placeholder="" required>
                                                    <span id="mybutton2" onclick="change2()"><i class="glyphicon glyphicon-eye-open"></i></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="ml-auto col-sm-10">
                                                    <button type="submit" class="btn btn-rounded btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                </div>
                <!-- /.row -->

            </section>
            <!-- /.content -->
        </div>
    </div>

    <script>
        function change() {
            var x = document.getElementById('pass').type;

            if (x == 'password') {
                document.getElementById('pass').type = 'text';
                document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-close"></i>';
            } else {
                document.getElementById('pass').type = 'password';
                document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-open"></i>';
            }
        }

        function change2() {
            var x = document.getElementById('pass2').type;

            if (x == 'password') {
                document.getElementById('pass2').type = 'text';
                document.getElementById('mybutton2').innerHTML = '<i class="glyphicon glyphicon-eye-close"></i>';
            } else {
                document.getElementById('pass2').type = 'password';
                document.getElementById('mybutton2').innerHTML = '<i class="glyphicon glyphicon-eye-open"></i>';
            }
        }
    </script>

    <?php $this->load->view('components/footer') ?>
</div>