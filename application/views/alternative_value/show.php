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
                        <h3 class="page-title">Detail Nilai Alternatif</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('alternative') ?>">Alternatif</a></li>
				                    <li class="breadcrumb-item"><a href="<?php echo base_url('nilai_alternatives/'); echo $this->session->userdata('id_kriteria') ?>"> Nilai Alternatif</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Detail Nilai Alternatif</li>
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
                                    <label for="inputPassword3" class="col-sm-2 control-label">Nama Nilai Alternatif</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="nama_alternatif" value="<?php echo $sub_criteria->nama_sub_kriteria; ?>" class="form-control" id="inputPassword3" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Prioritas</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="nama_alternatif" value="<?php echo $sub_criteria->prioritas; ?>" class="form-control" id="inputPassword3" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Bobot</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="nama_alternatif" value="<?php echo $sub_criteria->bobot; ?>" class="form-control" id="inputPassword3" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="status" value="<?php echo check_status($sub_criteria->status); ?>" class="form-control" id="inputPassword3" readonly>
                                    </div>
                                </div><br><br>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label"></label>

                                    <div class="col-sm-10">
                                        <a href="<?php echo base_url('sub_criterias/'); echo $this->session->userdata('id_kriteria') ?>"><button type="button" class="btn btn-primary mb-15">Kembali ke List</button></a>
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