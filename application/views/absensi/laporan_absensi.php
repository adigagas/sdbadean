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
                                <h5 class="card-header" style="background:#2980b9; color:#fff;">Absensi Peserta Didik</h5> <br>
                                <div class="">
                                    <div class="text-left col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select class="form-control">
                                                    <option value="Januari"> Januari </option>
                                                    <option value="Februari"> Februari </option>
                                                    <option value="Maret"> Maret </option>
                                                    <option value="April"> April </option>
                                                    <option value="Mei"> Mei </option>
                                                    <option value="Juni"> Juni </option>
                                                    <option value="Juli"> Juli </option>
                                                    <option value="Agustus"> Agustus </option>
                                                    <option value="September"> September </option>
                                                    <option value="Oktober"> Oktober </option>
                                                    <option value="November"> November </option>
                                                    <option value="Desember"> Desember </option>
                                                </select>
                                            </div>
                                            <div class="text-right col-md-6">
                                                <?= date('l, d-m-Y'); ?>
                                            </div>
                                        </div>


                                    </div>

                                </div><br>

                                <div class="table-grid">
                                    <table class="timesheet-table">
                                        <thead>
                                            <tr>
                                                <!-- Load month days columns -->
                                                <!-- record month_days is a n-upla like (week_day_name, day, month_name) -->
                                                <t t-foreach="month_days" t-as="day">
                                                    <th t-att-height="th_height">
                                                        <h5>
                                                            <div>
                                                                <t t-esc="day[0]"></t>
                                                            </div>
                                                        </h5>
                                                        <h6>
                                                            <t t-esc="day[2]" />
                                                            <t t-esc="day[1]" />
                                                        </h6>
                                                    </th>
                                                </t>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <t t-foreach="range(projects_num)" t-as="project">
                                                <tr>
                                                    <t t-foreach="month_days" t-as="day">
                                                        <td>
                                                            00:00
                                                        </td>
                                                    </t>
                                                </tr>
                                            </t>
                                        </tbody>
                                    </table>
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

</body>

</html>