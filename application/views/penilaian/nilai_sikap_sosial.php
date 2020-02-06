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
                            <form action="<?= base_url('penilaian/nilai_sosial') ?>" method="POST" ?>
                                <div class="card-body">
                                    <h5 class="card-header" style="background:#2980b9; color:#fff;">Penilaian</h5> <br>

                                    <div class="row mb-5 mx-2">
                                        <div class="col">
                                            <table>
                                                <tr>
                                                    <td><b>Mata Penilaian</b></td>
                                                    <td><b>:</b></td>
                                                    <td> - </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Kompetensi Inti</b></td>
                                                    <td><b>:</b></td>
                                                    <td> KI-2 SIKAP SOSIAL</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Rombel</b></td>
                                                    <td><b>:</b></td>
                                                    <td>1 A</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Wali Kelas</b></td>
                                                    <td><b>:</b></td>
                                                    <td>Dewi Ayu</td>
                                                </tr>
                                                <tr>
                                                    <td><b>NIP</b></td>
                                                    <td><b>:</b></td>
                                                    <td>1234567890</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="col-4">
                                            <table>
                                                <tr>
                                                    <td><b>Tahun Ajaran</b></td>
                                                    <td><b>:</b></td>
                                                    <td><?= $tahun_ajaran ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Semester</b></td>
                                                    <td><b>:</b></td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Guru Mapel</b></td>
                                                    <td><b>:</b></td>
                                                    <td>Dewi Ayu</td>
                                                </tr>
                                                <tr>
                                                    <td><b>NIP</b></td>
                                                    <td><b>:</b></td>
                                                    <td>1234567890</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="table-responsive">

                                        <table id="zero_config" class="table table-sm" width="1600px">
                                            <thead class="text-center">

                                                <tr>
                                                    <th rowspan="2" width="20px"><b>NO</b></th>
                                                    <th rowspan="2" width="20px"><b>NAMA PESERTA DIDIK</b></th>
                                                    <th colspan="7"><b>ASPEK NILAI</b></th>
                                                </tr>
                                                <tr>
                                                    <th width="60px">Jujur</th>
                                                    <th width="60px">Disiplin</th>
                                                    <th width="60px">Tanggung Jawab</th>
                                                    <th width="60px">Santun</th>
                                                    <th width="60px">Peduli</th>
                                                    <th width="60px">Percaya Diri</th>
                                                    <th width="60px">Toleransi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php $y = 0;
                                                    foreach ($siswa_show as $siswa) {
                                                        $y++ ?>
                                                        <input type="text" hidden value="<?= $siswa->id_siswa ?>" name="id_siswa[]">
                                                        <input type="text" hidden value="<?= $semester ?>" name="semester">
                                                        <input type="text" hidden value="<?= $tahun_ajaran ?>" name="tahun_ajaran">
                                                        <input type="text" hidden value="<?= $id_rombel ?>" name="id_rombel">
                                                        <input type="text" hidden value="<?= $this->session->userdata('id_gtk') ?>" name="id_gtk">

                                                        <td>1</td>
                                                        <td><?= $siswa->nama_siswa ?></td>
                                                        <td>
                                                            <select required name="sel_jujur[]" class="select2 form-control custom-select">
                                                                <option value="">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required name="sel_dispin[]" class="select2 form-control custom-select">
                                                                <option value="">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required name="sel_tj[]" class="select2 form-control custom-select">
                                                                <option value="">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required name="sel_santun[]" class="select2 form-control custom-select">
                                                                <option value="">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required name="sel_peduli[]" class="select2 form-control custom-select">
                                                                <option value="">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required name="sel_pd[]" class="select2 form-control custom-select">
                                                                <option value="">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required name="sel_toleransi[]" class="select2 form-control custom-select">
                                                                <option value="">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </td>
                                                </tr>

                                            <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row justify-content-end mt-5">
                                        <a href="" class="btn btn-outline-secondary mr-2">Batal</a>
                                        <button type="submit" class="btn btn-success mr-4">Simpan</button>
                                    </div>
                                </div>
                            </form>
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
        $(document).ready(function() {
            $('#zero_config').dataTable({
                'bInfo': false,
                "aLengthMenu": [
                    [25, 50, 75, -1],
                    [25, 50, 75, "All"]
                ],
                "iDisplayLength": 1000,
                "columnDefs": [{
                    "targets": All,
                    "orderable": false
                }]
            });
        });
    </script>

</body>

</html>