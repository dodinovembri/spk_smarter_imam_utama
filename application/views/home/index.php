<div class="wrapper">
    <?php 
        $this->load->view('components/header'); 
        $this->load->view('components/sidebar'); 
    ?>
    <div class="content-wrapper">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="box box-primary pull-up">
                            <div class="box-body">
                                <div class="d-flex align-items-center font-size-18">
                                    <div class="icon">
                                        <i class="mdi mdi-star-circle text-white mr-10"></i>
                                    </div>
                                    <p class="font-weight-medium mb-0 text-white">Alternatif</p>
                                </div>
                                <div class="d-flex align-items-center flex-wrap">
                                    <h2 class="font-weight-normal text-white"><?php echo $alternative; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="box box-info pull-up">
                            <div class="box-body">
                                <div class="d-flex align-items-center font-size-18">
                                    <div class="icon">
                                        <i class="mdi mdi-star-circle text-white mr-10"></i>
                                    </div>
                                    <p class="font-weight-medium mb-0 text-white">Kriteria</p>
                                </div>
                                <div class="d-flex align-items-center flex-wrap">
                                    <h2 class="font-weight-normal text-white"><?php echo $criteria; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="box box-success pull-up">
                            <div class="box-body">
                                <div class="d-flex align-items-center font-size-18">
                                    <div class="icon">
                                        <i class="mdi mdi-star-circle text-white mr-10"></i>
                                    </div>
                                    <p class="font-weight-medium mb-0 text-white">User</p>
                                </div>
                                <div class="d-flex align-items-center flex-wrap">
                                    <h2 class="font-weight-normal text-white"><?php echo $user; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <?php $this->load->view('components/footer') ?>
</div>