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
                        <?php $yahoo = md5(uniqid(rand(), true)) ?>
                            <?= $this->session->flashdata('tambahgtk'); ?>
                            <?php echo form_open_multipart('Info/tambahInfo'); ?>
                            <div class="card-body">
                                <h4 class="card-header" style="background:#16a085; color:#fff;">Tambah Info</h4> <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="">Info</h5>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2  control-label col-form-label">Judul</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" style="border-radius: 10px;" name="id_info" class="form-control" value="<?= $yahoo; ?>" id="id_info" placeholder="Judul" required>
                                                <input type="text" style="border-radius: 10px;" name="judul" class="form-control" id="judul" placeholder="Judul" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-2  control-label col-form-label">Tanggal Publis</label>
                                            <div class="col-sm-8">
                                                <input type="date" style="border-radius: 10px;" name="tgl_publish" class="form-control" id="tgl_publish"  required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-2  control-label col-form-label">Gambar</label>
                                            <div class="col-sm-8">
                                                <input type="file"  name="gambar"  id="gambar" placeholder="NIP" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-2  control-label col-form-label">Deskripsi</label>
                                            <div class="col-sm-8">
                                                <textarea  style="height: 300px;" name="description" class="ckeditor"  id="ckeditor"  required></textarea>
                                            </div>
                                        </div> 
                                </div>
                                <div class="border-top">
                                    <div class="card-body ">
                                        <div class="text-right">
                                            <a href="<?= base_url('Info'); ?>" type="button" class="btn btn-warning " style="border-radius: 10px; margin-right:10px;"><i class="fa fa-window-close"></i> Batal</a> &nbsp;
                                            <input name="submit" type="submit" class="btn btn-success " style="border-radius: 10px;"></input>
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
        var ckeditor = CKEDITOR.replace('description',{
                    height:'500px'
        });
        CKEDITOR.disableAutoInLine = true;
        CKEDITOR.inline('edittable');
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