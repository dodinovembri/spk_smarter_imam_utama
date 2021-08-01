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
                        <h3 class="page-title">Tambah User</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('user') ?>">User</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Tambah User</li>
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
                            <form class="form-horizontal form-element" action="<?php echo base_url('user/store') ?>" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Masukkan nama" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Email</label>

                                        <div class="col-sm-10">
                                            <input type="text" name="email" class="form-control" id="inputPassword3" placeholder="Masukkan email" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Gambar</label>

                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control" id="inputPassword3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 control-label">Alamat</label>

                                        <div class="col-sm-10">
                                            <textarea type="text" name="alamat" class="form-control" id="inputEmail" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 control-label">No HP</label>

                                        <div class="col-sm-10">
                                            <input type="text" name="no_hp" class="form-control" id="inputEmail" placeholder="Masukkan no hp">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>

                                        <div class="col-sm-10">
                                            <select name="jenis_kelamin" id="" class="form-control">
                                                <option value=""></option>
                                                <option value="1">Laki-Laki</option>
                                                <option value="0">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Role</label>

                                        <div class="col-sm-10">
                                            <select name="role_id" id="" class="form-control" required>
                                                <option value="">Select</option>
                                                <option value="0">Administrator</option>
                                                <option value="1">Surveyor/ User</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                                        <div class="col-sm-10">
                                            <select name="status" id="" class="form-control" required>
                                                <option value="">Select</option>
                                                <option value="1">Aktif</option>
                                                <option value="0">Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 control-label">Password</label>

                                        <div class="col-sm-10">
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 control-label">Confirm Password</label>

                                        <div class="col-sm-10">
                                            <input type="password" name="password_confirm" class="form-control" placeholder="Konfirmasi Password">
                                        </div>
                                    </div><br><br>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label"></label>

                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary mb-15">Simpan</button>
                                            <a href="<?php echo base_url('user') ?>"><button type="button" class="btn btn-danger mb-15">Batal</button></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </form>
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