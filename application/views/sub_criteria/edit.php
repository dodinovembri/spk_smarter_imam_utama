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
                        <h3 class="page-title">Edit Sub Kriteria</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('criteria') ?>">Kriteria</a></li>
				                    <li class="breadcrumb-item"><a href="<?php echo base_url('sub_criterias/'); echo $this->session->userdata('id_kriteria') ?>"> Sub Kriteria</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Edit Sub Kriteria</li>
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
                            <form class="form-horizontal form-element" action="<?php echo base_url('sub_criteria/update/'); echo $sub_criteria->id; ?>" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Nama Sub Kriteria</label>

                                        <div class="col-sm-10">
                                            <input type="text" name="nama_sub_kriteria" value="<?php echo $sub_criteria->nama_sub_kriteria; ?>" class="form-control" id="inputPassword3" placeholder="Masukkan nama sub kriteria" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Prioritas</label>

                                        <div class="col-sm-10">
                                            <input type="number" min="1" name="prioritas" value="<?php echo $sub_criteria->prioritas; ?>" class="form-control" id="inputPassword3" placeholder="Masukkan prioritas" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                                        <div class="col-sm-10">
                                            <select name="status" id="" class="form-control" required>
                                                <option value="<?php echo $sub_criteria->status; ?>"><?php echo check_status($sub_criteria->status); ?></option>
                                                <option value="1">Aktif</option>
                                                <option value="0">Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div><br><br>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label"></label>

                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary mb-15">Simpan</button>
                                            <a href="<?php echo base_url('sub_criterias/'); echo $this->session->userdata('id_kriteria') ?>"><button type="button" class="btn btn-danger mb-15">Batal</button></a>
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