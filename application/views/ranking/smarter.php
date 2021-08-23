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
                        <h3 class="page-title">Metode SMARTER</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Metode SMARTER</li>
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
                                <center>
                                    <h4><b>Kriteria</b></h4>
                                </center>
                                <div class="table-responsive">
                                    <table id="example13" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Kriteria</th>
                                                <th>Nama Kriteria</th>
                                                <th>Prioritas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($criterias as $key => $value) {
                                                $no++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $value->kode_kriteria; ?></td>
                                                    <td><?php echo $value->nama_kriteria; ?></td>
                                                    <td><?php echo $value->prioritas; ?></td>
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
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <center>
                                    <h4><b>Pembobotan ROC</b></h4>
                                </center>
                                <div class="table-responsive">
                                    <table id="example14" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Kriteria</th>
                                                <th>Nama Kriteria</th>
                                                <th>Prioritas</th>
                                                <th>Bobot</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($criterias as $key2 => $value2) {
                                                $no++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $value2->kode_kriteria; ?></td>
                                                    <td><?php echo $value2->nama_kriteria; ?></td>
                                                    <td><?php echo $value2->prioritas; ?></td>
                                                    <td><?php echo $value2->bobot; ?></td>
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
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <center>
                                    <h4><b>Pembobotan ROC Pada Sub Kriteria</b></h4>
                                </center>
                                <div class="table-responsive">
                                    <table id="example11" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kriteria</th>
                                                <th>Nama Sub Kriteria</th>
                                                <th>Prioritas</th>
                                                <th>Bobot</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($sub_criterias as $key3 => $value3) {
                                                $no++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $value3->nama_kriteria; ?></td>
                                                    <td><?php echo $value3->nama_sub_kriteria; ?></td>
                                                    <td><?php echo $value3->prioritas; ?></td>
                                                    <td><?php echo $value3->bobot; ?></td>
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
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <center>
                                    <h4><b>Nilai Utility</b></h4>
                                </center>
                                <div class="table-responsive">
                                    <table id="example5" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Ranking</th>
                                                <th>Nama Alternatif</th>
                                                <th>Nama Kriteria</th>
                                                <th>Nama Sub Kriteria</th>
                                                <th>Nilai Utility</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($utility_values as $key4 => $value4) {
                                                $no++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $value4['nama_alternatif']; ?></td>
                                                    <td><?php echo $value4['nama_kriteria']; ?></td>
                                                    <td><?php echo $value4['nama_sub_kriteria']; ?></td>
                                                    <td><?php echo $value4['utility']; ?></td>
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
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <center>
                                    <h4><b>Nilai Akhir Metode SMARTER</b></h4>
                                </center>
                                <div class="table-responsive">
                                    <table id="example10" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Ranking</th>
                                                <th>Nama Alternatif</th>
                                                <th>Nama Kriteria</th>
                                                <th>Nama Sub Kriteria</th>
                                                <th>Nilai Utility</th>
                                                <th>Nilai Akhir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($last_results as $key5 => $value5) {
                                                $no++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $value5['nama_alternatif']; ?></td>
                                                    <td><?php echo $value5['nama_kriteria']; ?></td>
                                                    <td><?php echo $value5['nama_sub_kriteria']; ?></td>
                                                    <td><?php echo $value5['utility']; ?></td>
                                                    <td><?php echo $value5['last_result']; ?></td>
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
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <center>
                                    <h4><b>Hasil Pemeringkatan - Total</b></h4>
                                </center>
                                <div class="table-responsive">
                                    <table id="example15" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Ranking</th>
                                                <th>Nama Alternatif</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($total_last_result_per_alternatives as $key6 => $value6) {
                                                $no++;
                                                $id_alternatif = $value6['id_alternatif'];
                                                $sql6 = "SELECT * FROM alternatif WHERE id = $id_alternatif";
                                                $query6 = $this->db->query($sql6);
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $query6->row()->nama_alternatif; ?></td>
                                                    <td><?php echo $value6['total_each_last_result']; ?></td>
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
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <center>
                                    <h4><b>Ranking</b></h4>
                                </center>
                                <div class="table-responsive">
                                    <table id="example16" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Ranking</th>
                                                <th>Nama Alternatif</th>
                                                <th>NA</th>
                                                <th>%</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($total_last_result_per_alternatives as $key7 => $value7) {
                                                $no++;
                                                $id_alternatif = $value7['id_alternatif'];
                                                $sql7 = "SELECT * FROM alternatif WHERE id = $id_alternatif";
                                                $query7 = $this->db->query($sql7);
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $query7->row()->nama_alternatif; ?></td>
                                                    <td><?php echo $value7['total_each_last_result']; ?></td>
                                                    <td><?php echo $value7['total_each_last_result'] * 100; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url('alternative/show/');
                                                                    echo $value7['id_alternatif']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
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