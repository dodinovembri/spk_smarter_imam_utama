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
                        <h3 class="page-title">Detail Kriteria</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('alternative') ?>">Kriteria</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Detail Kriteria</li>
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
                                    <label for="inputEmail3" class="col-sm-2 control-label">Kode Kriteria</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="kode_kriteria" value="<?php echo $criteria->kode_kriteria ?>" class="form-control" id="inputEmail3" placeholder="Masukkan kode kriteria" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Nama Kriteria</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="nama_kriteria" value="<?php echo $criteria->nama_kriteria ?>" class="form-control" id="inputPassword3" placeholder="Masukkan nama kriteria" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Prioritas</label>

                                    <div class="col-sm-10">
                                        <input type="number" name="prioritas" value="<?php echo $criteria->prioritas ?>" class="form-control" id="inputPassword3" min="1" placeholder="Masukkan prioritas" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Bobot</label>

                                    <div class="col-sm-10">
                                        <input type="number" name="prioritas" value="<?php echo $criteria->bobot ?>" class="form-control" id="inputPassword3" min="1" placeholder="Masukkan prioritas" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="prioritas" value="<?php echo check_status($criteria->status); ?>" class="form-control" id="inputPassword3" min="1" placeholder="Masukkan prioritas" readonly>
                                    </div>
                                </div>
                                <br><br>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label"></label>

                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary mb-15">Simpan</button>
                                        <a href="<?php echo base_url('criteria') ?>"><button type="button" class="btn btn-danger mb-15">Batal</button></a>
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