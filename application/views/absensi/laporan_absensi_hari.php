<?php $this->load->view('templates/header'); ?>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
        $this->load->view('templates/navbar');
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Data Peserta Didik</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-header" style="background:#2980b9; color:#fff;">Absensi Peserta Harian </h5> <br>
                                <div class="">
                                    <div class="text-left col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 class="card-header" style="background:#fff;">Kelas <?= $kelas->nama_rombel ?> ( <?= $kelas->nama_pelajaran ?> ) </h5>
                                            </div>
                                            <div class="text-right col-md-6">
                                                <?= $waktu ?>
                                            </div>
                                        </div>


                                    </div>

                                </div><br>
                                <?php echo $this->session->flashdata('brhsl'); ?>
                                <div class="table-responsive">

                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>No</b></th>
                                                <th><b>NIS</b></th>
                                                <th><b>Nama Peserta Didik</b></th>
                                                <th><b>Jenis Kelamin</b></th>
                                                <th><b>Keterangan</b></th>
                                                <th><b>Aksi</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($laporan as $row) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $row->nomor_induk ?></td>

                                                    <td><?= $row->nama_siswa ?></td>
                                                    <td><?= $row->jenis_kelamin_siswa ?></td>
                                                    <td><?= $row->keterangan ?></td>
                                                    <td><a type="button" href="" class="btn btn-success " data-toggle="modal" data-target="#myModal<?= $row->id_siswa ?>" style="border-radius: 10px;"><i class="fa fa-edit"></i> Ubah </a></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                foreach ($modal as $row) : ?>
                    <div id="myModal<?= $row->id_siswa ?>" class="modal fade" role="dialog">
                        <form action="<?php echo base_url('absensi_siswa/updateKehadiran'); ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-dialog">
                                <!-- konten modal-->
                                <div class="modal-content">
                                    <!-- heading modal -->

                                    <div class="modal-header">
                                        <h5 class="modal-title">Ubah Keterangan <?= $row->nama_siswa ?>?</h5>
                                    </div>
                                    <!-- body modal -->
                                    <div class="modal-body" style="text-align: center;">
                                        <div style="padding: 50px">

                                            <input type="hidden" name="id_siswa" value="<?php echo $row->id_siswa ?>">
                                            <input type="hidden" name="id_mapel" value="<?php echo $row->id_mapel ?>">
                                            <!-- <input type="hidden" name="id_kelas" value="</?php echo $b->id_kelas ?>">
                                            <input type="hidden" name="tanggal" value="</?= date('d-m-Y'); ?>">-->

                                            <div style="text-align: center;">

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kehadiran" id="inlineRadio1" value="H">
                                                    <label class="form-check-label" for="inlineRadio1">H</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kehadiran" id="inlineRadio2" value="S">
                                                    <label class="form-check-label" for="inlineRadio2">S</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kehadiran" id="inlineRadio3" value="I">
                                                    <label class="form-check-label" for="inlineRadio3">I</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kehadiran" id="inlineRadio3" value="A">
                                                    <label class="form-check-label" for="inlineRadio3">A</label>
                                                </div>

                                            </div><br>
                                            <!--<input type="hidden" name="nama_depan" value="<//?php echo $this->session->userdata('nama_depan') ?>">-->


                                        </div>
                                    </div>
                                    <!-- footer modal -->
                                    <div class="modal-footer">
                                        <button class="btn btn-success" style="text-transform: capitalize; border-radius: 20px;" type="input">Absen</button>
                                        <a data-dismiss="modal" class="btn btn-info" style="text-transform: capitalize; border-radius: 20px; color:#fff;"> Tidak</a>
                                    </div>
                        </form>
                    </div>
            </div>
        </div>
    <?php
                endforeach;
    ?>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
    COPYRIGHT © BIKEA TECHNOCRAFT 2019 
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url() ?>vendor/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url() ?>vendor/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url() ?>vendor/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url() ?>vendor/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url() ?>vendor/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url() ?>vendor/dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="<?= base_url() ?>vendor/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?= base_url() ?>vendor/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?= base_url() ?>vendor/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config2').DataTable();
    </script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config3').DataTable();
    </script>

</body>

</html>