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
                        <h3 class="page-title">Detail Alternatif</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('alternative') ?>">Alternatif</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Detail Alternatif</li>
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
                                    <label for="inputEmail3" class="col-sm-2 control-label">Kode Alternatif</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="kode_alternatif" value="<?php echo $alternative->kode_alternatif; ?>" class="form-control" id="inputEmail3" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Nama Alternatif</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="nama_alternatif" value="<?php echo $alternative->nama_alternatif; ?>" class="form-control" id="inputPassword3" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Keterangan</label>

                                    <div class="col-sm-10">
                                        <textarea name="keterangan" rows="5" class="form-control" id="inputPassword3" readonly><?php echo $alternative->keterangan; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="status" value="<?php echo check_status($alternative->status); ?>" class="form-control" id="inputPassword3" readonly>
                                    </div>
                                </div><br><br>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 control-label"></label>

                                    <div class="col-sm-10">
                                        <a href="<?php echo base_url('alternative') ?>"><button type="button" class="btn btn-primary mb-15">Kembali ke List</button></a>
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