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

                                <div class="row mb-5">
                                    <div class="col-6">
                                        <table>
                                            <tr>
                                                <td><b>Mata Penilaian</b></td>
                                                <td><b>:</b></td>
                                                <td> <?= $nama_pelajaran ?> </td>
                                            </tr>
                                            <tr>
                                                <td><b>Kompetensi Inti</b></td>
                                                <td><b>:</b></td>
                                                <td><?= $id_ki ?> <?= $nama_ki ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Rombel</b></td>
                                                <td><b>:</b></td>
                                                <td><?= $nama_rombel ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Wali Kelas</b></td>
                                                <td><b>:</b></td>
                                                <td><?= $this->session->userdata('nama_gtk'); ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>NIP</b></td>
                                                <td><b>:</b></td>
                                                <td>1234567890</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-6">
                                        <table>
                                            <tr>
                                                <td><b>Tahun Ajaran</b></td>
                                                <td><b>:</b></td>
                                                <td>2019/2020</td>
                                            </tr>
                                            <tr>
                                                <td><b>Semester</b></td>
                                                <td><b>:</b></td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td><b>Guru Mapel</b></td>
                                                <td><b>:</b></td>
                                                <td><?= $nama_gtk ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>NIP</b></td>
                                                <td><b>:</b></td>
                                                <td><?= $nip_gtk ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="table-responsive">

                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead class="text-center">
                                            <tr>
                                                <th rowspan="2"><b>NO</b></th>
                                                <th rowspan="2"><b>NAMA PESERTA DIDIK</b></th>
                                                <th colspan="4"><b>KOMPETENSI DASAR</b></th>
                                                <th rowspan="2" width="70px"><b>MID</b></th>
                                                <th rowspan="2" width="70px"><b>UAS</b></th>
                                                <th rowspan="2"><b>DESKRIPSI RAPORT</b></th>
                                                <th rowspan="2"><b>KETUNTASAN</b></th>
                                            </tr>
                                            <tr>
                                                <th width="70px" data-toggle="tooltip" data-placement="top" data-original-title="menjelaskan makna bilangan cacah sampai dengan 99 sebagai banyak anggota suatu kumpulan objek">3.1</th>
                                                <th width="70px" data-toggle="tooltip" data-placement="top" data-original-title="menjelaskan bilangan sampai dua angka dan nilai tempat penyusun lambang bilangan menggunakan kumpulan benda konkret serta cara membacanya">3.2</th>
                                                <th width="70px" data-toggle="tooltip" data-placement="top" data-original-title="membandingkan dua bilangan sampai dua angka dengan menggunakan kumpulan benda- benda konkret">3.3</th>
                                                <th width="70px" data-toggle="tooltip" data-placement="top" data-original-title="menjelaskan dan melakukan penjumlahan dan pengurangan bilangan yang melibatkan bilangan cacah sampai dengan 99 dalam kehidupan sehari-hari serta mengaitkan penjumlahan dan pengurangan">3.4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Ahmad Deni</td>
                                                <td>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td></td>
                                                <td class="text-success">Tuntas</td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Laili Permata</td>
                                                <td>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td></td>
                                                <td class="text-danger">Tidak Tuntas</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="row justify-content-end mt-5">
                                    <a href="" class="btn btn-outline-secondary mr-2">Batal</a>
                                    <a href="" class="btn btn-success mr-4">Simpan</a>
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