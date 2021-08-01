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
                        <h3 class="page-title">Profile</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-12 col-lg-5 col-xl-4">

                        <div class="box box-inverse bg-img" style="background-image: url(<?php echo base_url('assets/images/gallery/full/1.jpg') ?>);" data-overlay="2">
                            <div class="flexbox px-20 pt-20">
                                <label class="toggler toggler-danger text-white">
                                    <input type="checkbox">
                                    <i class="fa fa-heart"></i>
                                </label>
                            </div>

                            <div class="box-body text-center pb-50">
                                <a href="#">
                                    <img class="avatar avatar-xxl avatar-bordered" src="<?php echo base_url('uploads/user/');
                                                                                        echo $user->gambar; ?>" alt="">
                                </a>
                                <h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#"><?php echo $user->name; ?></a></h4>
                            </div>

                        </div>

                    </div>
                    <div class="col-12 col-lg-7 col-xl-8">
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
                            <ul class="nav nav-tabs">
                                <li><a class="active" href="#usertimeline" data-toggle="tab">Timeline</a></li>
                                <li><a href="#settings" data-toggle="tab">Settings</a></li>
                            </ul>

                            <div class="tab-content">

                                <div class="active tab-pane" id="usertimeline">
                                    <div class="box p-15">
                                        <form class="form-horizontal form-element col-12" action="<?php echo base_url('profile/store/');
                                                                                                    echo $user->id; ?>" enctype="multipart/form-data" method="POST">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 control-label">Nama</label>

                                                <div class="col-sm-10">
                                                    <input type="text" name="name" value="<?php echo $user->name; ?>" class="form-control" id="inputName" placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                                <div class="col-sm-10">
                                                    <input type="email" name="email" value="<?php echo $user->email; ?>" class="form-control" id="inputEmail" placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPhone" class="col-sm-2 control-label">Gambar</label>

                                                <div class="col-sm-10">
                                                    <input type="file" name="image" class="form-control" id="inputPhone" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="ml-auto col-sm-10">
                                                    <button type="submit" class="btn btn-rounded btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="settings">

                                    <div class="box p-15">
                                        <form class="form-horizontal form-element col-12" action="<?php echo base_url('profile/store_pw/');
                                                                                                    echo $user->id; ?>" method="POST">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 control-label">Password</label>

                                                <div class="col-sm-10">
                                                    <input type="password" name="password" class="form-control" id="pass" style="width: 95%; display:inline-block" placeholder="">
                                                    <span id="mybutton" onclick="change()"><i class="glyphicon glyphicon-eye-open"></i></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 control-label">Confirm Password</label>

                                                <div class="col-sm-10">
                                                    <input type="password" name="password_confirm" class="form-control" id="pass2" style="width: 95%; display:inline-block" placeholder="">
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
                                </div>
                                <!-- /.tab-pane -->
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