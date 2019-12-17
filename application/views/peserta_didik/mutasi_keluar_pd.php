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
                                    <h4 class="card-header" style="background:#16a085; color:#fff;">Mutasi Keluar / DO</h4> <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="">Siswa dengan <strong>NIS 1236</strong> mutasi keluar karena</h6>
                                            <div class="form-group row">
                                                <label for="alasan" class="col-sm-4  control-label col-form-label">Alasan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="alasan" class="form-control" id="alasan" placeholder="Alasan">
                                                </div>
                                            </div><br>
                                            <h5 class="">Dengan Keterangan</h5><br>

                                            <div class="form-group row">
                                                <label for="tahun" class="col-sm-4  control-label col-form-label">Tahun</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="tahun" class="form-control" id="tahun" placeholder="Tahun">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="nomor_sttb" class="col-sm-4  control-label col-form-label">Nomor STTB</label>
                                                <div class="col-sm-8">
                                                    <input type="text" style="border-radius: 10px;" name="nomor_sttb" class="form-control" id="nomor_sttb" placeholder="Nomor STTB">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="sekolah_lanjutan" class="col-sm-4  control-label col-form-label">Lanjut Ke Sekolah</label>
                                                <div class="col-sm-8">
                                                    <input type="password" style="border-radius: 10px;" name="sekolah_lanjutan" class="form-control" id="sekolah_lanjutan" placeholder="Lanjut Ke Sekolah">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label for="tingkat_terakhir" class="col-sm-4  control-label col-form-label">Dari Tingkat</label>
                                                <div class="col-sm-8">
                                                    <input type="password" style="border-radius: 10px;" name="tingkat_terakhir" class="form-control" id="tingkat_terakhir" placeholder="Kabupaten/Kota">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="sekolah_pindah" class="col-sm-4  control-label col-form-label">Ke Sekolah</label>
                                                <div class="col-sm-8">
                                                    <input type="password" style="border-radius: 10px;" name="sekolah_pindah" class="form-control" id="sekolah_pindah" placeholder="Ke Sekolah">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tanggal_pindah" class="col-sm-4  control-label col-form-label">Tanggal Pindah</label>
                                                <div class="col-sm-8">
                                                    <input type="date" style="border-radius: 10px;" name="tanggal_pindah" class="form-control" id="tanggal_pindah" >
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label for="tanggal_berhenti" class="col-sm-4  control-label col-form-label">Tanggal Berhenti Sekolah</label>
                                                <div class="col-sm-8">
                                                    <input type="date" style="border-radius: 10px;" name="tanggal_berhenti" class="form-control" id="tanggal_berhenti">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="alasan_berhenti" class="col-sm-4  control-label col-form-label">Alasan Berhenti Sekolah</label>
                                                <div class="col-sm">
                                                    <textarea class="form-control" name="alasan_berhenti" id="alasan_berhenti"></textarea>
                                                </div>
                                            </div>
                                        </div><br>
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body ">
                                            <div class="text-right">
                                                <a href="" type="button" class="btn btn-warning ">Batal</a> &nbsp; <a href="" type="button" class="btn btn-primary ">Simpan</a>
                                            </div>
                                        </div>
                                    </div>
                            </form>
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