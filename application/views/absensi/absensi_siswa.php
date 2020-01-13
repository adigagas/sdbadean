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
                        <h4 class="page-title">Form Absensi</h4>
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
                                <h5 class="card-header" style="background:#2980b9; color:#fff;">Laporan Absensi</h5> <br>
                                <div class="">
                                    <div class="text-left col-md-12">
                                        <div class="row">
                                            <?php foreach ($laporan as $l) : ?>
                                                <div class="col-md-4">
                                                    <div class="card text-center">
                                                        <div class="card-header">
                                                            Kelas <?= $l->nama_rombel ?>
                                                        </div>
                                                        <div class="card-body">
                                                            <h5 class="card-title"><?= $l->nama_pelajaran ?></h5>
                                                            <p class="card-text"> <?= $l->waktu_mulai ?>-<?= $l->waktu_selesai ?> WIB</p>
                                                            <a href="<?= base_url('Absensi_siswa/absenDataHarian/' . $l->id_mapel) ?>" class="btn btn-primary">Lihat</a>
                                                        </div>
                                                        <div class="card-footer text-muted">
                                                            <?= $l->nama_gtk ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>


                                    </div>

                                </div><br>

                                <div id="kls_1" style="display:none;">
                                    <h5 class="card-header" style="background:#fff; ">Pilih Mapel</h5> <br>
                                    <form action="<?php echo base_url('absensi_siswa/absenSiswa/1'); ?>" method="post">
                                        <!--<input name="id_kelas" value="1" type="hidden">-->
                                        <select id="mapel" class="form-control custom-select col-md-3" style=" border-radius: 10px;">
                                            <option value="0">Pilih Mapel</option>
                                            <option value="IPA">IPA</option>
                                            <option value="IPS">IPS</option>
                                            <option value="MTK">MTK</option>
                                        </select>
                                        <input type="submit" value="Absen" class="btn btn-success required">
                                    </form>
                                </div>


                                <div id="kls_2" style="display:none;">
                                    <h5 class="card-header" style="background:#fff; ">Pilih Mapel</h5> <br>
                                    <form action="<?php echo base_url('absensi_siswa/absenSiswa/2'); ?>" method="post">
                                        <!--<input name="id_kelas" value="1" type="hidden">-->
                                        <select id="mapel" class="form-control custom-select col-md-3" style=" border-radius: 10px;">
                                            <option value="0">Pilih Mapel</option>
                                            <option value="IPA">IPA</option>
                                            <option value="IPS">IPS</option>
                                            <option value="MTK">MTK</option>
                                        </select>
                                        <input type="submit" value="Absen" class="btn btn-success required">
                                    </form>
                                </div>
                                <div id="kls_3" style="display:none;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
    <script>
        $(document).ready(function() {

            $("#state").change(function() {
                // foo is the id of the other select box 
                if ($(this).val() == "1") {
                    $("#kls_1").show();
                    $("#kls_2").hide();
                    $("#kls_3").hide();
                } else if ($(this).val() == "2") {
                    $("#kls_2").show();
                    $("#kls_1").hide();
                    $("#kls_3").hide();
                } else if ($(this).val() == "3") {
                    $("#kls_1").hide();
                    $("#kls_2").hide();
                    $("#kls_3").show();
                } else {
                    $("#kls_1").hide();
                    $("#kls_2").hide();
                    $("#kls_3").hide();
                }
            });
        });
    </script>

</body>

</html>