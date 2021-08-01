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
                        <h3 class="page-title">Detail User</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('user') ?>">User</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Detail User</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <!-- right column -->
                    <div class="col-12">
                        <!-- Horizontal Form -->
                        <div class="box">
                            <div class="box-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="<?php echo $user->name; ?>" class="form-control" id="inputEmail3" placeholder="Masukkan nama" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="email" value="<?php echo $user->email; ?>" class="form-control" id="inputPassword3" placeholder="Masukkan email" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Gambar</label>

                                    <div class="col-sm-10">
                                        <img src="<?php echo base_url('uploads/user/');
                                                    echo $user->gambar; ?>" width="20%" alt="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Role</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="email" value="<?php echo check_role($user->role_id); ?>" class="form-control" id="inputPassword3" placeholder="Masukkan email" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 control-label">Alamat</label>

                                    <div class="col-sm-10">
                                        <textarea type="text" name="alamat" class="form-control" id="inputEmail" placeholder="" readonly><?php echo $user->alamat; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 control-label">No HP</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="no_hp" value="<?php echo $user->no_hp; ?>" class="form-control" id="inputEmail" placeholder="Masukkan no hp" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 control-label">Jenis Kelamin</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="no_hp" value="<?php echo check_sex($user->jenis_kelamin); ?>" class="form-control" id="inputEmail" placeholder="Masukkan no hp" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="email" value="<?php echo check_status($user->status); ?>" class="form-control" id="inputPassword3" placeholder="Masukkan email" readonly>
                                    </div>
                                </div>
                                <br><br>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label"></label>

                                    <div class="col-sm-10">
                                        <a href="<?php echo base_url('user') ?>"><button type="button" class="btn btn-primary mb-15">Kembali ke List</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!--/.col (right) -->
                </div>

            </section>
            <!-- /.content -->
        </div>
    </div>

    <?php $this->load->view('components/footer') ?>
</div>