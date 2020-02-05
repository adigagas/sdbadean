<?php $this->load->view('templates/header');
if ($this->session->userdata('username') == null) {
    redirect('auth');
}
?>

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
        <?php $this->load->view('templates/navbar', $jabatan); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

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
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <?= $waktu; ?>
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
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div style="height: 150px;" class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-school"></i></h1>
                                <h6 class="text-white">Jumlah Peserta Didik : Aktif </h6>
                                <h2 class="text-white"><?= $count ?></h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div style="height: 150px;" class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                                <h6 class="text-white">Jumlah Peserta Didik : Non-Aktif</h6>
                                <h2 class="text-white"><?= $countnon ?></h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div style="height: 150px;" class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account"></i></h1>
                                <h6 class="text-white">Jumlah GTK</h6>
                                <h2 class="text-white"><?= $countgtk ?></h2>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->

                    <!-- Column -->

                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div style="height: 150px;" class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                                <h6 class="text-white">Jumlah Rombel</h6>
                                <h2 class="text-white"><?= $countrombel ?></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <?php if ($jabatan == 2) {
                ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <!-- column -->
                                        <div class="col-lg-9">
                                            <?php echo $this->session->flashdata('msg'); ?>
                                            <div class="row">
                                                <?php foreach ($jadwal as $a) : ?>
                                                    <div class="col-md-6">
                                                        <div class="flot-chart">
                                                            <div class="card text-center">
                                                                <div class="card-header">
                                                                    Kelas <?= $a->nama_rombel ?>
                                                                </div>
                                                                <form action="<?php echo base_url('Absensi_siswa/absenSiswa'); ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title"><?= $a->nama_kategori ?></h5>
                                                                        <p class="card-text"><?= $a->waktu_mulai ?> WIB</p>
                                                                        <input type="hidden" value="<?= $a->id_rombel ?>" name="id_rombel">
                                                                        <input type="hidden" value="<?= $a->nama_rombel ?>" name="nama_rombel">
                                                                        <input type="hidden" value="<?= $a->nama_kategori ?>" name="nama_pelajaran">
                                                                        <input type="hidden" value="<?= $a->id_kategori ?>" name="id_kategori">
                                                                        <input type="hidden" value="<?= $a->id_gtk ?>" name="id_gtk">
                                                                        <input type="hidden" value="<?= $a->id_kategori ?>" name="id_kategori">
                                                                        <input type="hidden" value="<?= $a->id_jadwal_mapel ?>" name="id_jadwal_mapel">
                                                                        <button class="btn btn-success" type="submit" <?php
                                                                                                                        $sql = "SELECT COUNT(id_siswa)
                                                                                                                    FROM tb_absensi WHERE tanggal_absensi='" . $waktu . "' AND id_kategori='" . $a->id_kategori . "'";
                                                                                                                        $query = $this->db->query($sql);
                                                                                                                        $result = $query->row_array();
                                                                                                                        $count = $result['COUNT(id_siswa)'];
                                                                                                                        if ($count <= 0) {
                                                                                                                            echo "";
                                                                                                                        } else {
                                                                                                                            echo "disabled";
                                                                                                                        } ?>> <?php if ($count <= 0) {
                                                                                                                                    echo "Absensi Sekarang";
                                                                                                                                } else {
                                                                                                                                    echo "Sudah Diabsen"; ?>
                                                                        </button>
                                                                        <a class="btn btn-success" href="" data-toggle="modal" data-target="#myModal<?= $a->id_kategori ?>"> Informasi</a>
                                                                    <?php } ?>
                                                                    </div>
                                                                </form>
                                                                <div class="card-footer text-muted">
                                                                    <?= $a->nama_gtk ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="bg-dark p-10 text-white text-center">
                                                        <i class="fa fa-user m-b-5 font-16"></i>
                                                        <h5 class="m-b-0 m-t-5">2540</h5>
                                                        <small class="font-light">Total Users</small>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="bg-dark p-10 text-white text-center">
                                                        <i class="fa fa-plus m-b-5 font-16"></i>
                                                        <h5 class="m-b-0 m-t-5">120</h5>
                                                        <small class="font-light">New Users</small>
                                                    </div>
                                                </div>
                                                <div class="col-6 m-t-15">
                                                    <div class="bg-dark p-10 text-white text-center">
                                                        <i class="fa fa-cart-plus m-b-5 font-16"></i>
                                                        <h5 class="m-b-0 m-t-5">656</h5>
                                                        <small class="font-light">Total Shop</small>
                                                    </div>
                                                </div>
                                                <div class="col-6 m-t-15">
                                                    <div class="bg-dark p-10 text-white text-center">
                                                        <i class="fa fa-tag m-b-5 font-16"></i>
                                                        <h5 class="m-b-0 m-t-5">9540</h5>
                                                        <small class="font-light">Total Orders</small>
                                                    </div>
                                                </div>
                                                <div class="col-6 m-t-15">
                                                    <div class="bg-dark p-10 text-white text-center">
                                                        <i class="fa fa-table m-b-5 font-16"></i>
                                                        <h5 class="m-b-0 m-t-5">100</h5>
                                                        <small class="font-light">Pending Orders</small>
                                                    </div>
                                                </div>
                                                <div class="col-6 m-t-15">
                                                    <div class="bg-dark p-10 text-white text-center">
                                                        <i class="fa fa-globe m-b-5 font-16"></i>
                                                        <h5 class="m-b-0 m-t-5">8540</h5>
                                                        <small class="font-light">Online Orders</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <?php foreach ($pr as $p) { ?>
                <div class="modal fade " id="myModal<?= $p->id_kategori ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md-12 ">
                        <div class="modal-content col-md-12">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Tambah Informasi <?= $p->nama_kategori ?></h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url() ?>mapel/infoMapel" method="POST">
                                    <input type="hidden" value="<?= $p->id_rombel ?>" name="id_rombel">
                                    <input type="hidden" value="<?= $p->id_kategori ?>">
                                    <input type="hidden" value="<?= $p->id_gtk ?>" name="id_gtk">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mapel</label>
                                        <select class="form-control" name="id_pelajaran">
                                            <?php 
                                            $this->db->where('id_kategori', $p->id_kategori );
                                            $pel=$this->db->get('tb_pelajaran')->result();
                                            foreach ($pel as $j) { ?>
                                                <option value="<?= $j->id_pelajaran ?>"><?= $j->nama_pelajaran ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Jenis Informasi</label>
                                        <select class="form-control" name="id_jenis">
                                            <?php foreach ($info as $j) { ?>
                                                <option value="<?= $j->id_jenis ?>"><?= $j->jenis_info ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tanggal</label>
                                        <input style="border-radius: 10px" required type="date" class="form-control" name="dateline" placeholder="Cth : IPA">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Ulasan Informasi</label>
                                        <textarea style="border-radius: 10px" required type="text" class="form-control" name="ulasan_informasi" placeholder="Ulasan Informasi"></textarea>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="input" class=" btn btn-primary">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
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
    <script src="<?= base_url() ?>vendor/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url() ?>vendor/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url() ?>vendor/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url() ?>vendor/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?= base_url() ?>vendor/assets/libs/flot/excanvas.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/flot/jquery.flot.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?= base_url() ?>vendor/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?= base_url() ?>vendor/dist/js/pages/chart/chart-page-init.js"></script>
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

</body>

</html>