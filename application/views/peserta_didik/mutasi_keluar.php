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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-header" style="background:#16a085; color:#fff;">Mutasi Keluar / DO</h4> <br>
                                <div class="row">
                                    <div class="col-md-10">
                                        <h5 class="">Siswa dengan NIS <?= $siswa->nomor_induk ?> mutasi keluar karena </h5><br>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-4  control-label col-form-label">Alasan</label>
                                            <div class="col-sm-8">
                                                <select id="state" class="form-control custom-select" style="width: 100%; height:36px; border-radius: 10px;">
                                                    <option value="">Pilih Alasan</option>
                                                    <option value="1">Keluar Sekolah</option>
                                                    <option value="2">Pindah Sekolah</option>
                                                    <option value="3">Tamat Belajar</option>
                                                </select>
                                            </div>
                                        </div><br>
                                        <div id="tamat" style="display:none;">
                                            <h5 class="">Dengan keterangan</h5><br>
                                            <form>
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-4  control-label col-form-label">Tanggal</label>
                                                    <div class="col-sm-8">
                                                        <input type="date" style="border-radius: 10px;" name="nisn" class="form-control" id="lname" placeholder="Ketik disini">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-4  control-label col-form-label">Nomor STTB</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Ketik disini">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-4  control-label col-form-label">Melanjutkan ke sekolah</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Ketik disini">
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <a href="" type="button" class="btn btn-success " style="border-radius: 10px;"><i class="fa fa-save"></i> Simpan</a>
                                                </div>

                                            </form>
                                        </div>

                                        <div id="pindah" style="display:none;">
                                            <h5 class="">Dengan keterangan</h5><br>
                                            <form>
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-4  control-label col-form-label">Dari Tingkat</label>
                                                    <div class="col-sm-8">
                                                        <input type="date" style="border-radius: 10px;" name="nisn" class="form-control" id="lname" placeholder="Ketik disini">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-4  control-label col-form-label">Ke Sekolah</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Ketik disini">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-4  control-label col-form-label">Tanggal</label>
                                                    <div class="col-sm-8">
                                                        <input type="date" style="border-radius: 10px;" name="nama_peserta" class="form-control" id="lname" placeholder="Ketik disini">
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <a href="" type="button" class="btn btn-success " style="border-radius: 10px;"><i class="fa fa-save"></i> Simpan</a>
                                                </div>

                                            </form>
                                        </div>
                                        <div id="keluar" style="display:none;">
                                            <h5 class="">Dengan keterangan</h5><br>
                                            <form id="example-form" action="<?php echo base_url('peserta_didik/keluarSekolah'); ?>" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="id_siswa" value="<?= $siswa->nomor_induk ?> ">
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-4  control-label col-form-label">Tanggal</label>
                                                    <div class="col-sm-8">
                                                        <input type="date" style="border-radius: 10px;" name="tanggal" class="form-control" id="lname" placeholder="Ketik disini">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-4  control-label col-form-label">Alasan</label>
                                                    <div class="col-sm-8">
                                                        <textarea type="text" style="border-radius: 10px;" name="alasan" class="form-control" id="lname" placeholder="Ketik disini"></textarea>
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <input type="submit" value="Simpan" style="border-radius: 10px;" class="btn btn-success required ">
                                                </div>
                                            </form>
                                        </div>
                                        <br>


                                    </div><br>
                                </div>
                                <div class="border-top">
                                    <div class="card-body ">

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

        </script>
        <script>
            $(document).ready(function() {
                $("#state").change(function() {
                    // foo is the id of the other select box 
                    if ($(this).val() == "1") {
                        $("#keluar").show();
                        $("#pindah").hide();
                        $("#tamat").hide();
                    } else if ($(this).val() == "2") {
                        $("#tamat").hide();
                        $("#keluar").hide();
                        $("#pindah").show();
                    } else if ($(this).val() == "3") {
                        $("#keluar").hide();
                        $("#pindah").hide();
                        $("#tamat").show();
                    } else {
                        $("#keluar").hide();
                        $("#pindah").hide();
                        $("#tamat").hide();
                    }
                });
            });
        </script>
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