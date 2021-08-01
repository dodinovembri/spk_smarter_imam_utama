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
                        <h3 class="page-title">Edit Nilai Alternatif</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('alternative') ?>">Kriteria</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('alternative_values/');
                                                                            echo $this->session->userdata('id_alternatif') ?>"> Nilai Alternatif</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Edit Nilai Alternatif</li>
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
                            <form class="form-horizontal form-element" action="<?php echo base_url('alternative_value/update/'); echo $alternative_value->id; ?>" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Alternatif</label>

                                        <div class="col-sm-10">
                                            <input type="text" value="<?php echo $alternative_value->nama_alternatif; ?>" class="form-control" id="inputPassword3" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Kriteria</label>

                                        <div class="col-sm-10">
                                            <input type="text" value="<?php echo $alternative_value->nama_kriteria; ?>" class="form-control" id="inputPassword3" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Sub Kriteria</label>

                                        <div class="col-sm-10">
                                            <select name="id_sub_kriteria" id="" class="form-control" required>
                                                <?php foreach ($sub_criterias as $key => $value) { ?>
                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->nama_sub_kriteria; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div><br><br>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label"></label>

                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary mb-15">Simpan</button>
                                            <a href="<?php echo base_url('alternative_values/'); echo $this->session->userdata('id_alternatif') ?>"><button type="button" class="btn btn-danger mb-15">Batal</button></a>
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