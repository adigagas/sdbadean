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
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-header" style="background:#16a085; color:#fff;">Tambah Peserta Didik</h4> <br>
                                    <div class="row">
                                        <div class="col-md-5" style="margin-left: 10px;">
                                            <h5 class="">DATA DIRI PESERTA DIDIK</h5><br>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">NIS</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nis" class="form-control" id="fname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">NISN</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nisn" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Nama Peserta Didik</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email1" class="col-sm-4  control-label col-form-label">Tempat / Tanggal Lahir</label>
                                                <div class="col-sm-8">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input type="text" style="border-radius: 10px;" class="form-control" id="email1" placeholder="Ketik disini">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" style="border-radius: 10px;" class="form-control" id="email1" placeholder="Company Name Here">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cono1" class="col-sm-4 control-label col-form-label">Jenis Kelamin</label>
                                                <div class="col-sm-8">
                                                    <div class="row">
                                                        <div class="custom-control custom-radio col-md-4">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" required>
                                                            <label class="custom-control-label" for="customControlValidation1">Laki-laki</label>
                                                        </div>
                                                        <div class="custom-control custom-radio col-md-4">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                            <label class="custom-control-label" for="customControlValidation2">Perempuan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cono1" class="col-sm-4  control-label col-form-label">Agama</label>
                                                <div class="col-sm-8">
                                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                        <option>Pilih Agama</option>
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
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Kewarganegaraan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Bahasa Sehari-hari</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Golongan Darah</label>
                                                <div class="col-sm-8">
                                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                        <option>Pilih Golongan Darah</option>
                                                        <option value="AB">AB</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="O">O</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <h5 class="">Masuk Menjadi Murid Baru Pada</h5>
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
                                                    <input type="text" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
                                            </div>

                                            <div class="card" style="width: 18rem;">
                                                <img src="<?= base_url() ?>vendor/assets/images/camera.png" class=" card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                        <div class="col-md-5">
                                            <h5 class="">KETERANGAN ORANG TUA / WALI MURID</h5><br>
                                            <h5 class="">Ayah</h5>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Nama Ayah</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nis" class="form-control" id="fname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Pekerjaan Ayah</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nisn" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
                                            </div><br>
                                            <h5 class="">Ibu</h5>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Nama Ibu</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nis" class="form-control" id="fname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Pekerjaan Ibu</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nisn" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
                                            </div><br>
                                            <h5 class="">Alamat Orang Tua</h5>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Jalan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nis" class="form-control" id="fname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Desa / Kelurahan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nisn" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Kecamatan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nis" class="form-control" id="fname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Kabupaten / Kota</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Provinsi</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
                                            </div><br>
                                            <h5 class="">Wali Peserta Didik</h5>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Nama Wali</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nis" class="form-control" id="fname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Pekerjaan Wali</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nisn" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Hubungan Keluarga</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nis" class="form-control" id="fname" placeholder="Ketik disini">
                                                </div>
                                            </div><br>
                                            <h5 class="">Alamat Wali</h5>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Jalan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Desa / Kelurahan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Kecamatan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Kabupaten / Kota</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-4  control-label col-form-label">Provinsi</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Ketik disini">
                                                </div>
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