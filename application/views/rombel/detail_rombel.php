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
                                <h5 class="card-header" style="background:#2980b9; color:#fff;">Data Peserta Didik</h5> <br>
                                <div class="text-right">
                                    <!-- Button to Open the Modal -->
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-user"></i> Tambah Siswa
                                    </button>
                                </div><br>

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th><b>NIS</b></th>
                                                <th><b>NISN</b></th>
                                                <th><b>Nama Peserta Didik</b></th>
                                                <th><b>Tempat Tanggal Lahir</b></th>
                                                <th><b>Jenis Kelamin</b></th>
                                                <th><b>Agama</b></th>
                                                <th><b>Aksi</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($rombel as $s) : ?>
                                                <tr>
                                                    <td><input type="checkbox" name="Id_siswa[]" value=<?= $s->id_siswa ?>><br></td>
                                                    <td><?= $s->nomor_induk ?></td>
                                                    <td><?= $s->nomor_induk_sn ?></td>
                                                    <td><?= $s->nama_siswa ?></td>
                                                    <td><?= $s->tempat_lahir_siswa . ', ' . $s->tanggal_lahir_siswa ?></td>
                                                    <td><?= $s->jenis_kelamin_siswa ?></td>
                                                    <td><?= $s->agama_siswa ?></td>
                                                    <td><a type="button" href="<?= base_url() ?>Peserta_didik/detailPeserta" class="btn btn-info btn-sm">Detail</a></td>
                                                </tr>
                                            <?php
                                                $i++;
                                                $id_rombel = $s->id_rombel;
                                            endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th><b>NIS</b></th>
                                                <th><b>NISN</b></th>
                                                <th><b>Nama Peserta Didik</b></th>
                                                <th><b>Tempat Tanggal Lahir</b></th>
                                                <th><b>Jenis Kelamin</b></th>
                                                <th><b>Agama</b></th>
                                                <th><b>Aksi</b></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <input type="checkbox" onClick="toggle(this)" /> Pilih Semua<br />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Siswa Di Rombel <?= $id_rombel ?></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <script>
                                    $(document).ready(function() {
                                        $('#dataTable').DataTable();
                                    });
                                </script>
                                <div class="table-responsive">
                                    <table id="dataTable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th><b>NIS</b></th>
                                                <th><b>NISN</b></th>
                                                <th><b>Nama Peserta Didik</b></th>
                                                <th><b>Aksi</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($siswafree as $s) : ?>
                                                <tr>
                                                    <td><input type="checkbox" name="Id_siswaRombel[]" value=<?= $s->id_siswa ?>><br></td>
                                                    <td><?= $s->nomor_induk ?></td>
                                                    <td><?= $s->nomor_induk_sn ?></td>
                                                    <td><?= $s->nama_siswa ?></td>
                                                    <td>
                                                        <form action="<?= base_url() ?>rombel/addsiswa" method="POST">
                                                            <input type="text" hidden name="id_rombel" value="<?= $id_rombel ?>">
                                                            <input type="text" hidden name="id_siswa" value="<?= $s->id_siswa ?>">
                                                            <input id="acceptTerms" name="acceptTerms" type="submit" class="btn btn-info btn-sm" value="Tambahkan">
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php
                                                $i++;
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <script language="JavaScript">
        function toggle(source) {
            checkboxes = document.getElementsByName('Id_siswa[]');
            for (var i = 0, n = checkboxes.length; i < n; i++) {
                checkboxes[i].checked = source.checked;
            }
        }
    </script>
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