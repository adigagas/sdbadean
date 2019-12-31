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
                        <h4 class="page-title">Form Basic</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <a href="" type="button" class="btn btn-warning " style="border-radius: 10px; margin-right:10px;"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="" type="button" class="btn btn-danger " style="border-radius: 10px; margin-right:10px;"><i class="fa fa-arrow-alt-circle-left"></i> Mutasi Keluar</a>
                                    <a href="<?= base_url('peserta_didik/cetakDetail/' . $siswa->id_siswa) ?>" target="_blank" type="button" class="btn btn-info " style="border-radius: 10px;"><i class="fa fa-print"></i> Print</a>
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
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h3 class="card-header text-center" style="background:#fff; color:black;"><b>IDENTITAS PESERTA DIDIK</b></h3> <br>
                                    <div class="row">
                                        <div class="col-md-5 col-xs-12" style="margin-left: 10px;">
                                            <h5 class="">A. IDENTITAS PESERTA DIDIK</h5><br>
                                            <div class="" style="margin-left: 15px">
                                                <div class="form-group2 row">
                                                    <label for="fname" class="col-sm-6 col-xs-5 col-md-6 control-label col-form-label">1. Nomor Induk </label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->nomor_induk ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">2. NISN</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->nomor_induk_sn ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">3. Nama Peserta Didik</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->nama_siswa ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">4. Tempat / Tanggal Lahir</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->tempat_lahir_siswa ?> / <?= $siswa->tanggal_lahir_siswa ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">5. Jenis Kelamin</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->jenis_kelamin_siswa ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">6. Agama</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->agama_siswa ?></label>
                                                    </div>
                                                </div>

                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">7. Kewarganegaraan</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->kewarganegaraan_siswa ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">8. Bahasa Sehari-hari</label>
                                                    <div class="col-sm-6 col-xs-4 col-md-6">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->bahasa_siswa ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">9. Golongan Darah</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->golongan_siswa ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">10. Alamat Peserta Didik</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->jalan_ortu ?> / <?= $siswa->desa_ortu ?> / <?= $siswa->kec_ortu ?> / <?= $siswa->kab_ortu ?> / <?= $siswa->prov_ortu ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-5 col-xs-5 col-md-5  control-label col-form-label">11. Asal Murid</label>
                                                </div>
                                                <div class="form-group2 row">
                                                    <div class="col-sm-12 col-xs-12" style="margin-left:15px ">
                                                        <label for="lname" class="col-sm-12 col-xs-12 col-md-12  control-label col-form-label">a. Masuk menjadi murid baru pada</label>
                                                        <div class="row" style="margin-left:10px ">
                                                            <label for="lname" style="margin-left:15px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">a.1 Tanggal Masuk </label>
                                                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                                                        </div>
                                                        <div class="row" style="margin-left:10px ">
                                                            <label for="lname" style="margin-left:15px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">a.2 Di Kelas </label>
                                                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-xs-12" style="margin-left:15px ">
                                                        <label for="lname" class="col-sm-5 col-xs-5 col-md-5  control-label col-form-label">b. Asal Sekolah </label>
                                                        <label for="lname" style="margin-left:21px " class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">12. Meninggalkan Sekolah</label>
                                                </div>
                                                <div class="form-group2 row">
                                                    <div class="col-sm-12 col-xs-12" style="margin-left:15px ">
                                                        <label for="lname" class="col-sm-12 col-xs-12 col-md-12  control-label col-form-label">a. Tamat Belajar</label>
                                                        <div class="row">
                                                            <label for="lname" style="margin-left:30px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">a.1 Tanggal / Tahun </label>
                                                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                                                        </div>
                                                        <div class="row">
                                                            <label for="lname" style="margin-left:30px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">a.2 Nomor STB </label>
                                                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                                                        </div>
                                                        <div class="row">
                                                            <label for="lname" style="margin-left:30px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">a.2 Melanjutkan Sekolah </label>
                                                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-xs-12" style="margin-left:15px ">
                                                        <label for="lname" class="col-sm-12 col-xs-12 col-md-12  control-label col-form-label">b. Pindah Sekolah</label>
                                                        <div class="row" style="margin-left:10px ">
                                                            <label for="lname" style="margin-left:15px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">b.1 Dari Tingkat </label>
                                                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                                                        </div>
                                                        <div class="row" style="margin-left:10px ">
                                                            <label for="lname" style="margin-left:15px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">b.2 ke Sekolah </label>
                                                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                                                        </div>
                                                        <div class="row" style="margin-left:10px ">
                                                            <label for="lname" style="margin-left:15px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">b.3 Tanggal </label>
                                                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-xs-12" style="margin-left:15px ">
                                                        <label for="lname" class="col-sm-12 col-xs-12 col-md-12  control-label col-form-label">c. Keluar Sekolah</label>
                                                        <div class="row" style="margin-left:10px ">
                                                            <label for="lname" style="margin-left:15px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">c.1 Tanggal </label>
                                                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                                                        </div>
                                                        <div class="row" style="margin-left:10px ">
                                                            <label for="lname" style="margin-left:15px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">c.2 Alasan </label>
                                                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <br>
                                            <h5 class="">B. KETERANGAN ORANG TUA / WALI MURID</h5>
                                            <div class="" style="margin-left: 15px">
                                                <div class="form-group2 row">
                                                    <label for="fname" class="col-sm-6 col-xs-12  control-label col-form-label">1. NAMA ORANG TUA </label>
                                                </div>
                                                <div class="form-group2 row" style="margin-left: 15px">
                                                    <label for="fname" class="col-sm-6 col-xs-5 col-md-6   control-label col-form-label">a. Ayah</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class="control-label col-form-label">: <?= $siswa->nama_ayah ?> </label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row" style="margin-left: 15px">
                                                    <label for="fname" class="col-sm-6 col-md-6 col-xs-4  control-label col-form-label">b. Ibu </label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class="control-label col-form-label">: <?= $siswa->nama_ibu ?> </label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="fname" class="col-sm-6  control-label col-form-label">2. Pekerjaan Orang Tua </label>
                                                </div>
                                                <div class="form-group2 row" style="margin-left: 15px">
                                                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">a. Ayah</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class="control-label col-form-label">: <?= $siswa->pekerjaan_ayah ?> </label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row" style="margin-left: 15px">
                                                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">b. Ibu </label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class="control-label col-form-label">: <?= $siswa->pekerjaan_ibu ?> </label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="fname" class="col-sm-6  control-label col-form-label">3. Alamat Orang Tua </label>
                                                </div>
                                                <div class="form-group2 row" style="margin-left: 15px">
                                                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">a. Jalan</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class="control-label col-form-label">: <?= $siswa->jalan_ortu ?> </label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row" style="margin-left: 15px">
                                                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">b. Desa / Kelurahan </label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class="control-label col-form-label">: <?= $siswa->desa_ortu ?> </label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row" style="margin-left: 15px">
                                                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">c. Kecamatan</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class="control-label col-form-label">: <?= $siswa->kec_ortu ?> </label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row" style="margin-left: 15px">
                                                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">d. Kabupaten </label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class="control-label col-form-label">: <?= $siswa->kab_ortu ?> </label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row" style="margin-left: 15px">
                                                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">e. Provinsi </label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class="control-label col-form-label">: <?= $siswa->prov_ortu ?> </label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="fname" class="col-sm-6  control-label col-form-label">4. Wali Peserta Didik </label>
                                                </div>
                                                <div class="form-group2 row" style="margin-left: 15px">
                                                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">a. Nama</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class="control-label col-form-label">: <?= $siswa->nama_wali ?> </label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row" style="margin-left: 15px">
                                                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">b. Pekerjaan </label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class="control-label col-form-label">: <?= $siswa->pekerjaan_wali ?> </label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row" style="margin-left: 15px">
                                                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">c. Alamat</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class="control-label col-form-label">: <?= $siswa->alamat_wali ?> </label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row" style="margin-left: 15px">
                                                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">d. Hubungan Keluarga </label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class="control-label col-form-label">: <?= $siswa->hubungan_kel_wali ?> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-1">

                                        </div>
                                        <div class="col-md-5">
                                            <div class="text-right">
                                                <img src="" width="300px !important" height="400px">
                                            </div>
                                            <br>
                                            <div class="text-right">
                                                <img src="" width="300px !important" height="400px">
                                            </div>
                                        </div><br>

                                    </div>
                                    <div class="border-top">
                                        <div class="card-body ">
                                            <div class="text-right">
                                                <a href="" type="button" class="btn btn-warning " style="border-radius: 10px; margin-right:10px;"><i class="fa fa-window-close"></i> Batal</a>
                                                <a href="" type="button" class="btn btn-success " style="border-radius: 10px;"><i class="fa fa-save"></i> Simpan</a>
                                            </div>
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
    <!-- This Page JS -->
    <script src="<?= base_url() ?>vendor/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="<?= base_url() ?>vendor/dist/js/pages/mask/mask.init.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/quill/dist/quill.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>
</body>

</html>