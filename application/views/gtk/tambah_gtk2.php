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
                        <h4 class="page-title">Form Wizard</h4>
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
                        <form id="example-form" action="<?php echo base_url('Gtk/tambahGtk'); ?>" method="post" enctype="multipart/form-data" class="m-t-40">
                            <div>
                                <?php $yahoo = md5(uniqid(rand(), true)) ?>
                                <?php $ibu = md5(uniqid(rand(), true)) ?>
                                <?php $ayah = md5(uniqid(rand(), true)) ?>
                                <?php $alamat_ortu = md5(uniqid(rand(), true)) ?>
                                <?php $alamat_wali = md5(uniqid(rand(), true)) ?>
                                <?php $wali = md5(uniqid(rand(), true)) ?>

                                <h3>Tahap 1</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">NIK</label>
                                                <div class="col-sm-7">
                                                    <input type="hidden" value="<?php echo $yahoo ?>" style="border-radius: 10px;" name="id_gtk" class="form-control" id="lname" required>
                                                    <input type="text" style="border-radius: 10px;" name="nik_gtk" class="form-control" id="lname" placeholder="NIK" maxlength="16" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">NIP</label>
                                                <div class="col-sm-7">
                                                    <input type="text" style="border-radius: 10px;" name="nip_gtk" class="form-control" id="lname" placeholder="NIP" maxlength="18">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Nama GTK</label>
                                                <div class="col-sm-7">
                                                    <input type="text" style="border-radius: 10px;" name="nama_gtk" class="form-control" id="lname" placeholder="Nama GTK" maxlength="50" required>
                                                </div>
                                            </div>
                                           
                                          
                                        </div>
                                        <div class="col-md-7">
                                        <div class="form-group row">
                                                <label for="email1" class="col-sm-4  control-label col-form-label">Tempat / Tanggal Lahir</label>
                                                <div class="col-sm-8">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xs-4">
                                                            <input type="text" style="border-radius: 10px;" name="tempat_lahir_gtk" class="form-control" id="lname" placeholder="Tempat Lahir" maxlength="50" required>
                                                        </div>
                                                        <div class="col-sm-6 col-xs 4">
                                                            <input type="date" style="border-radius: 10px;" name="tanggal_lahir_gtk" class="form-control" id="lname" placeholder="Tanggal Lahir" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cono1" class="col-sm-4 control-label col-form-label">Jenis Kelamin</label>
                                                <div class="col-sm-8">
                                                    <div class="row" style="margin-left: 2px">
                                                        <div class="custom-control custom-radio col-md-4">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation1" name="jenis_kelamin_gtk" value="Laki-laki">
                                                            <label class="custom-control-label" for="customControlValidation1">Laki-laki</label>
                                                        </div>
                                                        <div class="custom-control custom-radio col-md-4">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="jenis_kelamin_gtk" value="Perempuan">
                                                            <label class="custom-control-label" for="customControlValidation2">Perempuan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </section>
                                <!-- <h3>Masuk Menjadi Murid</h3>
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
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Asal Sekolah</label>
                                                <div class="col-sm-8">
                                                    <input type="password" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Password Here">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Foto Baru</label>
                                                <div class="col-sm-8">
                                                    <input type="file" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Password Here">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6 text-right">
                                            <label for="name">Foto Sebelumnya</label><br>
                                            <img ame="name" src="" width="150px" height="200px">
                                        </div>
                                    </div>
                                </section>-->
                                <h3>Tahap 2</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Pangkat/Golongan</label>
                                                <div class="col-sm-8">
                                                    <select name="pajago_gtk" id="pajago_gtk" class="form-control custom-select" style="width: 100%; height:36px; border-radius: 10px;">
                                                        <option selected disabled>Pilih Pangkat</option>
                                                        <option value="1a">Gol. 1A</option>
                                                        <option value="1b">Gol. 1B</option>
                                                        <option value="2a">Gol. 2A</option>
                                                        <option value="2b">Gol. 2B</option>
                                                        <option value="3a">Gol. 3A</option>
                                                        <option value="3b">Gol. 3B</option>
                                                        <option value="4a">Gol. 4A</option>
                                                        <option value="4b">Gol. 4B</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cono1" class="col-sm-4  control-label col-form-label">Gelar GTK</label>
                                                <div class="col-sm-8">
                                                <input type="text" style="border-radius: 10px;" name="gelar_gtk" class="form-control" id="gelar_gtk" placeholder="Gelar" required>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Posisi di Sekolah</label>
                                                <div class="col-sm-8">
                                                    <select name="posisi_gtk" id="posisi_gtk" class=" form-control custom-select" style="width: 100%; height:36px; border-radius: 10px;">
                                                        <option selected disabled>Pilih Posisi</option>
                                                        <option value="guru">Guru</option>
                                                        <option value="operator">Operator</option>
                                                        <option value="kepsek">Kepala Sekolah</option>
                                                        <option value="tu">Administator/TU</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cono1" class="col-sm-4  control-label col-form-label">Agama</label>
                                                <div class="col-sm-8">
                                                    <select name="agama_gtk" id="agama_gtk" class="form-control custom-select" style="width: 100%; height:36px; border-radius: 10px;">
                                                        <option selected disabled>Pilih Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Buddha">Buddha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h3>Tahap 3</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Jalan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="jalan_gtk" id="jalan_gtk" class="form-control" placeholder="Jalan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Desa/Kelurahan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="desa_gtk" id="desa_gtk" class="form-control" id="lname" placeholder="Desa/Kelurahan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Kecamatan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="kec_gtk" class="form-control" id="kecamatan_gtk" placeholder="Kecamatan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Kabupaten/Kota</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="kab_gtk" class="form-control" id="kab_gtk" placeholder="Kabupaten/Kota" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Provinsi</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="prov_gtk" class="form-control" id="prov_gtk" placeholder="Provinsi" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Tanggal Masuk GTK</label>
                                                <div class="col-sm-8">
                                                    <input type="date" style="border-radius: 10px;" name="tgl_masuk_gtk" class="form-control" id="lname" placeholder="Jalan">
                                                    <input type="hidden" value="-" style="border-radius: 10px;" name="tgl_keluar_gtk" class="form-control" id="lname" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label" for="image">Foto GTK</label>
                                                <div class="col-sm-8">
                                                <input type="file" style="border-radius: 10px;" name="foto_gtk" class="form-control" id="foto_gtk" multiple>
                                                </div>
                                            </div>
                                            
                                        </div>

                                    </div>
                                </section>
                                <h3>Finish</h3>
                                <section>
                                    <input id="acceptTerms" name="submit" type="submit" class="btn btn-success required">

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
    <!-- this page js -->
    <script src="<?= base_url() ?>vendor/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
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