<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/assets/extra-libs/multicheck/multicheck.css">
    <link href="<?= base_url() ?>vendor/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?= base_url() ?>vendor/assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="<?= base_url() ?>vendor/assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <link href="<?= base_url() ?>vendor/dist/css/style.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
    <form class="form-horizontal">
                                <div class="card-body">
                                    <h2 class="text-center">INDENTITAS GTK</h2>
                                   
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-1  control-label col-form-label">1.</label>
                                                <label for="fname" class="col-sm-5  control-label col-form-label">NIK</label>
                                                <div class="col-sm-6">
                                                    <label>:</label> &nbsp; &nbsp;
                                                    <label type="text" name="nis" id="fname" placeholder="ID"><?= $detailgtk->nik_gtk ?></label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-1  control-label col-form-label">2.</label>
                                                <label for="fname" class="col-sm-5  control-label col-form-label">NIP</label>
                                                <div class="col-sm-6">
                                                    <label>:</label> &nbsp; &nbsp;
                                                    <label type="text" name="nis" id="fname" placeholder="ID"><?= $detailgtk->nip_gtk ?></label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-1  control-label col-form-label">3.</label>
                                                <label for="fname" class="col-sm-5  control-label col-form-label">Nama Tenaga Didik</label>
                                                <div class="col-sm-6">
                                                    <label>:</label> &nbsp; &nbsp;
                                                    <label type="text" name="nis" id="fname" placeholder="ID"><?= $detailgtk->nama_gtk ?></label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-1  control-label col-form-label">4.</label>
                                                <label for="fname" class="col-sm-5  control-label col-form-label">Tempat/Tanggal Lahir</label>
                                                <div class="col-sm-6">
                                                    <label>:</label> &nbsp; &nbsp;
                                                    <label type="text" name="nis" id="fname" placeholder="ID"><?= $detailgtk->tempat_lahir_gtk ?> , <?= $detailgtk->tanggal_lahir_gtk ?></label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-1  control-label col-form-label">5.</label>
                                                <label for="fname" class="col-sm-5  control-label col-form-label">Jenis Kelamin</label>
                                                <div class="col-sm-6">
                                                    <label>:</label> &nbsp; &nbsp;
                                                    <label type="text" name="nis" id="fname" placeholder="ID"><?= $detailgtk->jenis_kelamin_gtk ?></label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-1  control-label col-form-label">6.</label>
                                                <label for="fname" class="col-sm-5  control-label col-form-label">Pangkat/Jabatan/Golongan</label>
                                                <div class="col-sm-6">
                                                    <label>:</label> &nbsp; &nbsp;
                                                    <label type="text" name="nis" id="fname" placeholder="ID"><?= $detailgtk->pajago_gtk ?></label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-1  control-label col-form-label">7.</label>
                                                <label for="fname" class="col-sm-5  control-label col-form-label">Gelar</label>
                                                <div class="col-sm-6">
                                                    <label>:</label> &nbsp; &nbsp;
                                                    <label type="text" name="nis" id="fname" placeholder="ID"><?= $detailgtk->gelar_gtk ?></label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-1  control-label col-form-label">8.</label>
                                                <label for="fname" class="col-sm-5  control-label col-form-label">Posisi di Sekolah</label>
                                                <div class="col-sm-6">
                                                    <label>:</label> &nbsp; &nbsp;
                                                    <label type="text" name="nis" id="fname" placeholder="ID"><?= $detailgtk->posisi_gtk ?></label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-1  control-label col-form-label">9.</label>
                                                <label for="fname" class="col-sm-5  control-label col-form-label">Agama</label>
                                                <div class="col-sm-6">
                                                    <label>:</label> &nbsp; &nbsp;
                                                    <label type="text" name="nis" id="fname" placeholder="ID"><?= $detailgtk->agama_gtk ?></label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-1  control-label col-form-label">10.</label>
                                                <label for="fname" class="col-sm-5  control-label col-form-label">Alamat</label>
                                                <div class="col-sm-6">
                                                    <label>:</label> &nbsp; &nbsp;
                                                    <label type="text" name="nis" id="fname" placeholder="ID"><?= $detailgtk->jalan_gtk ?> <?= $detailgtk->desa_gtk ?> <?= $detailgtk->kec_gtk ?></label><br><label>&nbsp; &nbsp; &nbsp; <?= $detailgtk->kab_gtk ?> <?= $detailgtk->prov_gtk ?></label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-1  control-label col-form-label">11.</label>
                                                <label for="fname" class="col-sm-5  control-label col-form-label">Mutasi Tenaga Didik</label>
                                                <div class="col-sm-6">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label style="margin-left: 40px" for="fname" class="col-sm-1  control-label col-form-label">a.</label>
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Tanggal Masuk</label>
                                                <div class="col-sm-6">
                                                    <label>:</label> &nbsp; &nbsp;
                                                    <label type="text" name="nis" id="fname" placeholder="ID"><?= $detailgtk->tgl_masuk_gtk ?></label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label style="margin-left: 40px" for="fname" class="col-sm-1 control-label col-form-label">b.</label>
                                                <label for="fname" class="col-sm-4  control-label col-form-label">Tanggal Keluar</label>

                                                <div class="col-sm-6">
                                                    <label>:</label> &nbsp; &nbsp;
                                                    <label type="text" name="nis" id="fname" placeholder="ID"><?= $detailgtk->tgl_keluar_gtk ?></label>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6">
                                            <br>
                                            <div class="col-sm-5 text-right">
                                                <h5 class="">Foto GTK</h5>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10 text-right">
                                                    <img width="300px;" height="400px" src="<?= base_url('vendor/assets/images/') . $detailgtk->foto_gtk ?>" alt="...">
                                                </div>
                                            </div>
                                        </div><br>
                                    </div>
                                    <div class="border-top">

                                    </div>
                            </form>
    <script type="text/javascript">
    window.print();
    </script>
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

</html>
