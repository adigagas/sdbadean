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
                            <?= $this->session->flashdata('tambahgtk'); ?>
                            <?php echo form_open_multipart('Gtk/tambahGtk'); ?>
                            <div class="card-body">
                                <h4 class="card-header" style="background:#16a085; color:#fff;">Tambah GTK</h4> <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="">DATA DIRI GTK</h5>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-4  control-label col-form-label">ID</label>
                                            <div class="col-sm-8">
                                                <input type="text" style="border-radius: 10px;" name="id_gtk" class="form-control" id="id_gtk" placeholder="ID" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-4  control-label col-form-label">NIK</label>
                                            <div class="col-sm-8">
                                                <input type="text" style="border-radius: 10px;" name="nik_gtk" class="form-control" id="nik_gtk" placeholder="NIK" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-4  control-label col-form-label">NIP</label>
                                            <div class="col-sm-8">
                                                <input type="text" style="border-radius: 10px;" name="nip_gtk" class="form-control" id="nip_gtk" placeholder="NIP" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-4  control-label col-form-label">Nama GTK</label>
                                            <div class="col-sm-8">
                                                <input type="password" style="border-radius: 10px;" name="nama_gtk" class="form-control" id="nama_gtk" placeholder="Nama GTK" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1" class="col-sm-4  control-label col-form-label">Tempat / Tanggal Lahir</label>
                                            <div class="col-sm-8">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" style="border-radius: 10px;" name="tempat_lahir_gtk" class="form-control" id="tempat_lahir_gtk" placeholder="Tempat" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="date" style="border-radius: 10px;" name="tanggal_lahir_gtk" class="form-control" id="tanggal_lahir_gtk" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cono1" class="col-sm-4 control-label col-form-label">Pilih Jenis Kelamin</label>
                                            <div class="col-sm-8">
                                                <div class="row">
                                                    <div class="custom-radio col-md-4">
                                                        <input type="radio" name="jenis_kelamin_gtk" id="jenis_kelamin_gtk" value="L" required>
                                                        <label class="-label" for="customControlValidation1">Laki-laki</label>
                                                    </div>
                                                    <div class="custom-radio col-md-4">
                                                        <input type="radio" name="jenis_kelamin_gtk" id="jenis_kelamin_gtk" value="P" required>
                                                        <label class="-label" for="customControlValidation2">Perempuan</label>
                                                    </div>
                                                </div>
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
                                        <div class="form-group row">
                                            <label for="cono1" class="col-sm-4  control-label col-form-label">Gelar GTK</label>
                                            <div class="col-sm-8">
                                                <input type="text" style="border-radius: 10px;" name="gelar_gtk" class="form-control" id="gelar_gtk" placeholder="Gelar" required>
                                            </div>
                                        </div>
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
                                            <label for="lname" class="col-sm-4  control-label col-form-label">Posisi di Sekolah</label>
                                            <div class="col-sm-8">
                                                <select name="posisi_gtk" id="posisi_gtk" class=" form-control custom-select" style="width: 100%; height:36px; border-radius: 10px;">
                                                    <option selected disabled>Pilih Posisi</option>
                                                    <option value="1">Operator</option>
                                                    <option value="2">Kepala Sekolah</option>
                                                    <option value="3">Guru</option>
                                                </select>
                                            </div>
                                        </div><br>
                                        <h5 class="">Alamat</h5><br>

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
                                                <input type="text" style="border-radius: 10px;" name="kecamatan_gtk" class="form-control" id="kecamatan_gtk" placeholder="Kecamatan" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-4  control-label col-form-label">Kabupaten/Kota</label>
                                            <div class="col-sm-8">
                                                <input type="text" style="border-radius: 10px;" name="kabupaten_gtk" class="form-control" id="kabupaten_gtk" placeholder="Kabupaten/Kota" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-4  control-label col-form-label">Provinsi</label>
                                            <div class="col-sm-8">
                                                <input type="text" style="border-radius: 10px;" name="provinsi_gtk" class="form-control" id="provinsi_gtk" placeholder="Provinsi" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-4  control-label col-form-label">Tanggal Masuk</label>
                                            <div class="col-sm-8">
                                                <input type="date" style="border-radius: 10px;" name="tgl_masuk_gtk" class="form-control" id="tgl_masuk_gtk" required>
                                            </div>
                                        </div>
                                        <input hidden type="text" name="tgl_keluar_gtk" class="form-control" id="tgl_keluar_gtk" value="-" placeholder="Kecamatan">
                                    </div><br>
                                    <div class="col-md-6">
                                        <br>
                                        <div class="col-sm-4 text-right">
                                            <h5 class="">Foto GTK</h5>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-8 text-left" style="margin-left: 80px">
                                                <img width="300px;" height="400px" src="<?= base_url() ?>vendor/assets/images/camera.png" alt="...">
                                                <input type="file" style="border-radius: 10px;" name="foto_gtk" class="form-control" id="foto_gtk" multiple>
                                            </div>
                                        </div>

                                    </div><br>
                                </div>
                                <div class="border-top">
                                    <div class="card-body ">
                                        <div class="text-right">
                                            <a href="<?= base_url('Gtk/gtk'); ?>" type="button" class="btn btn-warning " style="border-radius: 10px; margin-right:10px;"><i class="fa fa-window-close"></i> Batal</a> &nbsp;
                                            <button href="" type="submit" class="btn btn-success " style="border-radius: 10px;"><i class="fa fa-save"></i> Simpan</button>
                                        </div>
                                    </div>
                                </div>
                                <?php form_close(); ?>
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