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
                        <h3 class="page-title">Nilai Alternatif</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('alternative') ?>">Alternatif</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Nilai Alternatif</li>
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
                                <a href="<?php echo base_url('alternative_value/create') ?>"><button type="button" class="btn btn-primary mb-15 ml-15">Buat Baru/ Reset</button></a>
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Alternatif</th>
                                                <th>Kriteria</th>
                                                <th>Sub Kriteria</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($alternative_values as $key => $value) {
                                                $no++; ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $value->nama_alternatif; ?></td>
                                                    <td><?php echo $value->nama_kriteria; ?></td>
                                                    <td><?php echo $value->nama_sub_kriteria; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url('alternative_value/edit/'); echo $value->id; ?>" style="margin-left: 20px"><span class="glyphicon glyphicon-pencil"></span></a> &nbsp;
                                                    </td>
                                                </tr>
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