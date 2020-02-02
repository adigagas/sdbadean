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
                        <h4 class="page-title">Penilaian</h4>
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
                                <h5 class="card-header" style="background:#2980b9; color:#fff;">Daftar Penilaian</h5> <br>
                               
                                <div class="table-responsive">

                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>Status</b></th>
                                                <th><b>Kompetensi Inti</b></th>
                                                <th><b>Mata Pelajaran</b></th>
                                                <th><b>Rombel</b></th>
                                                <th><b>Thn Ajaran/Smt</b></th>
                                                <th><b>Aksi</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-success">Selesai</td>
                                                <td>KI-1 SIKAP SPIRITUAL</td>
                                                <td> - </td>
                                                <td>1 A</td>
                                                <td>2019/2020 - 1</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="">Nilai</a>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-warning">Belum Selesai</td>
                                                <td>KI-2 SIKAP SOSIAL</td>
                                                <td> - </td>
                                                <td>1 A</td>
                                                <td>2019/2020 - 1</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="">Nilai</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-secondary">Belum Dinilai</td>
                                                <td>KI-3 PENGETAHUAN</td>
                                                <td>Matematika</td>
                                                <td>1 A</td>
                                                <td>2019/2020 - 1</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="">Nilai</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-warning">Belum Selesai</td>
                                                <td>KI-4 KETERAMPILAN</td>
                                                <td>Matematika</td>
                                                <td>1 A</td>
                                                <td>2019/2020 - 1</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="">Nilai</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-secondary">Belum Dinilai</td>
                                                <td>KI-3 PENGETAHUAN</td>
                                                <td>Bahasa Inggris</td>
                                                <td>3 A</td>
                                                <td>2019/2020 - 1</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="">Nilai</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-secondary">Belum Dinilai</td>
                                                <td>KI-4 KETERAMPILAN</td>
                                                <td>Bahasa Inggris</td>
                                                <td>3 A</td>
                                                <td>2019/2020 - 1</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="">Nilai</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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

</body>

</html>