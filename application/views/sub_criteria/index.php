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
                        <h3 class="page-title">Sub Kriteria</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php if (isset($from_sub)) {
                                                                                echo base_url('criteria/sub_criteria');
                                                                            } else {
                                                                                echo base_url('criteria');
                                                                            } ?>">Kriteria</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Sub Kriteria</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <?php $this->load->view('components/flash') ?>
                                <?php if ($this->session->userdata('role_id') != 1) { ?>
                                    <a href="<?php echo base_url('sub_criteria/create') ?>"><button type="button" class="btn btn-primary mb-15 ml-15">Tambah Baru</button></a>
                                <?php } ?>
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kriteria</th>
                                                <th>Nama Sub Kriteria</th>
                                                <th>Prioritas</th>
                                                <th>Bobot</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($sub_criterias as $key => $value) {
                                                $no++; ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $value->nama_kriteria; ?></td>
                                                    <td><?php echo $value->nama_sub_kriteria; ?></td>
                                                    <td><?php echo $value->prioritas; ?></td>
                                                    <td><?php echo (round($value->bobot, 3)); ?></td>
                                                    <td><?php echo check_status($value->status); ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url('sub_criteria/show/');
                                                                    echo $value->id; ?>"><span class="glyphicon glyphicon-eye-open"></span></a> &nbsp;
                                                        <?php if ($this->session->userdata('role_id') != 1) { ?>
                                                            <a href="<?php echo base_url('sub_criteria/edit/');
                                                                        echo $value->id; ?>"><span class="glyphicon glyphicon-pencil"></span></a> &nbsp;
                                                            <a href="#" data-toggle="modal" data-target="#modal-default<?php echo $value->id; ?>"><span class="glyphicon glyphicon-trash"></span></a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <!-- modal Area -->
                                                <div class="modal fade" id="modal-default<?php echo $value->id; ?>">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Anda yakin ingin menghapus data ini?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Batal</button>
                                                                <a href="<?php echo base_url('sub_criteria/destroy/');
                                                                            echo $value->id; ?>"><button type="button" class="btn btn-rounded btn-primary float-right">Hapus</button></a>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->

        </div>
    </div>
    <?php $this->load->view('components/footer') ?>
</div>