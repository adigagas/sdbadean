<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>vendor/assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>vendor/assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="<?= base_url() ?>vendor/assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <link href="<?= base_url() ?>vendor/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
<![endif]-->
</head>

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
                        <h4 class="page-title">Form Peserta Didik</h4>
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
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-header" style="background:#16a085; color:#fff;">Tambah Peserta Didik</h4> <br>
                        <h6 class="card-subtitle"></h6>
                        <form id="example-form" action="<?php echo base_url('peserta_didik/simpanSiswa'); ?>" method="post" enctype="multipart/form-data" class="m-t-40">
                            <div>
                                <?php $yahoo = md5(uniqid(rand(), true)) ?>
                                <?php $ibu = md5(uniqid(rand(), true)) ?>
                                <?php $ayah = md5(uniqid(rand(), true)) ?>
                                <?php $alamat_ortu = md5(uniqid(rand(), true)) ?>
                                <?php $alamat_wali = md5(uniqid(rand(), true)) ?>
                                <?php $wali = md5(uniqid(rand(), true)) ?>

                                <h3>Peserta Didik</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="hidden" value="<?php echo $yahoo ?>" style="border-radius: 10px;" name="id_siswa" class="form-control" id="id_siswa" required>
                                            <div class="form-group row" id="only-number">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">NIS</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" onkeypress="return hanyaAngka(event)" name="nomor_induk" class="form-control" id="nomor_induk" placeholder="NIS" maxlength="4" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="nomor_induk_sn" class="col-sm-4  control-label col-form-label">NISN</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" onkeypress="return hanyaAngka(event)" name="nomor_induk_sn" class="form-control" id="nomor_induk_sn" placeholder="NISN" maxlength="10" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="nama_siswa" class="col-sm-4  control-label col-form-label">Nama Peserta Didik</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nama_siswa" class="form-control" id="nama_siswa" placeholder="Nama Peserta Didik" maxlength="50" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email1" class="col-sm-4  control-label col-form-label">Tempat / Tanggal Lahir</label>
                                                <div class="col-sm-8">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xs-4">
                                                            <input type="text" style="border-radius: 10px;" name="tempat_lahir_siswa" class="form-control" id="tempat_lahir_siswa" placeholder="Tempat Lahir" maxlength="50" required>
                                                        </div>
                                                        <div class="col-sm-6 col-xs 4">
                                                            <input type="date" style="border-radius: 10px;" name="tanggal_lahir_siswa" class="form-control" id="tanggal_lahir_siswa" placeholder="Tanggal Lahir" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jenis_kelamin_siswa" class="col-sm-4 control-label col-form-label">Jenis Kelamin</label>
                                                <div class="col-sm-8">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio  col-md-6">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation1" name="jenis_kelamin_siswa" value="Laki-laki" required>
                                                            <label class="custom-control-label" for="customControlValidation1">Laki-Laki</label>
                                                        </div>
                                                        <div class="custom-control custom-radio  col-md-6">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="jenis_kelamin_siswa" value="Perempuan" required>
                                                            <label class="custom-control-label" for="customControlValidation2">Perempuan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="cono1" class="col-sm-4  control-label col-form-label">Agama</label>
                                                <div class="col-sm-8">
                                                    <select class="select2 form-control custom-select" name="agama_siswa" style="width: 100%; height:36px;">
                                                        <option value="-">Pilih Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Buddha">Buddha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kewarganegaraan_siswa" class="col-sm-4  control-label col-form-label">Kewarganegaraan</label>
                                                <div class="col-sm-8">
                                                    <select class="select2 form-control custom-select" name="kewarganegaraan_siswa" style="width: 100%; height:36px;">
                                                        <option value="-">Pilih Kewarganegaraan</option>
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="bahasa_siswa" class="col-sm-4  control-label col-form-label">Bahasa Sehari-hari</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="bahasa_siswa" class="form-control" id="bahasa_siswa" placeholder="Bahasa Sehari-hari" maxlength="20">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="golongan_siswa" class="col-sm-4  control-label col-form-label">Golongan Darah</label>
                                                <div class="col-sm-8">
                                                    <select class="select2 form-control custom-select" name="golongan_siswa" style="width: 100%; height:36px;">
                                                        <option value="-">Pilih Golongan Darah</option>
                                                        <option value="AB">AB</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="O">O</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h3>Masuk Menjadi Murid</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Tanggal</label>
                                                <div class="col-sm-8">
                                                    <input type="date" style="border-radius: 10px;" name="nis" class="form-control" id="fname" placeholder="First Name Here">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Di Kelas</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nisn" class="form-control" id="lname" placeholder="Kelas">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Asal Sekolah Sebelumnya</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Asal Sekolah">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Foto Baru</label>
                                                <div class="col-sm-8">
                                                    <input type="file" style="border-radius: 10px;" name="foto_satu" class="form-control" id="lname" placeholder="Password Here">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6 text-right">
                                            <label for="name">Foto Sebelumnya</label><br>
                                            <img name="name" src="<?= base_url() ?>vendor/assets/images/profil.png" width="150px" height="200px">
                                        </div>
                                    </div>
                                </section>
                                <h3>Keterangan Orang Tua</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 class="">Ayah</h5>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Nama Ayah</label>
                                                <div class="col-sm-8">
                                                    <input type="hidden" value="<?php echo $ayah ?>" style="border-radius: 10px;" name="id_ayah" class="form-control" id="lname" required>
                                                    <input type="text" style="border-radius: 10px;" name="nama_ayah" class="form-control" id="fname" placeholder="Nama Ayah" maxlength="50">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Pekerjaan Ayah</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="pekerjaan_ayah" class="form-control" id="lname" placeholder="Pekerjaan Ayah" maxlength="30">
                                                </div>
                                            </div><br>
                                            <h5 class="">Ibu</h5>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Nama Ibu</label>
                                                <div class="col-sm-8">
                                                    <input type="hidden" value="<?php echo $ibu ?>" style="border-radius: 10px;" name="id_ibu" class="form-control" id="lname" required>
                                                    <input type="text" style="border-radius: 10px;" name="nama_ibu" class="form-control" id="fname" placeholder="Nama Ibu" maxlength="50">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Pekerjaan Ibu</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="pekerjaan_ibu" class="form-control" id="lname" placeholder="Pekerjaan Ibu" maxlength="30">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="">Alamat Orang Tua</h5>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Jalan</label>
                                                <div class="col-sm-8">
                                                    <input type="hidden" value="<?php echo $alamat_ortu ?>" style="border-radius: 10px;" name="id_alamat_ortu" class="form-control" id="lname" required>
                                                    <input type="text" style="border-radius: 10px;" name="jalan_ortu" class="form-control" id="fname" placeholder="Masukkan Jalan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Desa / Kelurahan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="desa_ortu" class="form-control" id="lname" placeholder="Masukkan Desa">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Kecamatan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="kec_ortu" class="form-control" id="fname" placeholder="Masukkan Kecamatan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Kabupaten / Kota</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="kab_ortu" class="form-control" id="lname" placeholder="Masukkan Kabupaten">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Provinsi</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="prov_ortu" class="form-control" id="lname" placeholder="Masukkan Provinsi">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h3>Wali Peserta Didik</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 class="">Wali Peserta Didik</h5>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Nama Wali</label>
                                                <div class="col-sm-8">
                                                    <input type="hidden" value="<?php echo $wali ?>" style="border-radius: 10px;" name="id_wali" class="form-control" id="lname" required>
                                                    <input type="text" style="border-radius: 10px;" name="nama_wali" class="form-control" id="fname" placeholder="Nama Wali">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Pekerjaan Wali</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="pekerjaan_wali" class="form-control" id="lname" placeholder="Pekerjaan Wali">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Hubungan Keluarga</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="hubungan_kel_wali" class="form-control" id="fname" placeholder="Hubungan Keluarga">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="">Alamat Wali</h5>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Jalan</label>
                                                <div class="col-sm-8">
                                                    <input type="hidden" value="<?php echo $alamat_wali ?>" style="border-radius: 10px;" name="id_alamat_wali" class="form-control" id="lname" required>
                                                    <input type="text" style="border-radius: 10px;" name="jalan_wali" class="form-control" id="lname" placeholder="Jalan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Desa / Kelurahan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="desa_wali" class="form-control" id="lname" placeholder="Desa">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Kecamatan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="kec_wali" class="form-control" id="lname" placeholder="Kecamatan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Kabupaten / Kota</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="kab_wali" class="form-control" id="lname" placeholder="Kabupaten">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Provinsi</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="prov_wali" class="form-control" id="lname" placeholder="Provinsi">
                                                    <!-- <input type="hidden" style="border-radius: 10px;" name="password" value="12345" class="form-control" id="lname" placeholder="Provinsi">
                                                    <input type="hidden" style="border-radius: 10px;" name="token" value="0" class="form-control" id="lname" placeholder="Provinsi"> -->
                                                    </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                                <h3>Finish</h3>
                                <section>
                                    <input id="acceptTerms" name="acceptTerms" type="submit" class="btn btn-success required">

                                </section>
                            </div>
                        </form>
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
    <script src="<?= base_url() ?>vendor/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    <script>
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
    </script>
    <script>
        // Basic Example with form
        var form = $("#example-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function(event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function(event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function(event, currentIndex) {
                alert("Lakukan Submit!");
            }
        });
    </script>

</body>

</html>