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
                        <h3 class="page-title">Ranking</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Ranking</li>
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
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Ranking</th>
                                                <th>Kode Alternatif</th>
                                                <th>Nama Alternatif</th>
                                                <th>NA</th>
                                                <th>%</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($total_last_result_per_alternatives as $key => $value) {
                                                $no++;
                                                $id_alternatif = $value['id_alternatif'];
                                                $sql = "SELECT * FROM alternatif WHERE id = $id_alternatif";
                                                $query = $this->db->query($sql);
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $query->row()->kode_alternatif; ?></td>
                                                    <td><?php echo $query->row()->nama_alternatif; ?></td>
                                                    <td><?php echo (round($value['total_each_last_result'], 3)); ?></td>
                                                    <td><?php echo (round($value['total_each_last_result'] * 100, 3)); ?>%</td>
                                                    <td>
                                                        <a href="<?php echo base_url('alternative/show/');
                                                                    echo $query->row()->id; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
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