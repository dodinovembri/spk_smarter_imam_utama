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
                        <h3 class="page-title">Tambah Nilai Alternatif</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('criteria') ?>">Kriteria</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('alternative_values/');
                                                                            echo $this->session->userdata('id_alternatif') ?>"> Nilai Alternatif</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Tambah Nilai Alternatif</li>
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
                            <form class="form-horizontal form-element" action="<?php echo base_url('alternative_value/store') ?>" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <?php foreach ($criterias as $key => $value) { ?>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 control-label"><?php echo $value->nama_kriteria; ?></label>

                                            <div class="col-sm-10">
                                                <select name="criteria_criterion[]" id="" class="form-control" required>
                                                    <?php
                                                    $id_kriteria = $value->id;
                                                    $sql = "SELECT * FROM sub_kriteria WHERE id_kriteria = $id_kriteria";
                                                    $query = $this->db->query($sql);
                                                    ?>
                                                    <?php foreach ($query->result() as $row) { ?>
                                                        <option value="<?php echo $id_kriteria; echo '&'; echo $row->id; ?>"><?php echo $row->nama_sub_kriteria; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <br><br>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 control-label"></label>

                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary mb-15">Simpan</button>
                                            <a href="<?php echo base_url('alternative_values/');
                                                        echo $this->session->userdata('id_alternatif') ?>"><button type="button" class="btn btn-danger mb-15">Batal</button></a>
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