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
                        <h4 class="page-title">Mata Pelajaran</h4>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-header" style="background:#2980b9; color:#fff;">Absensi Peserta Didik</h5> <br>
                                <div class="">
                                    <div class="text-left col-md-12">
                                        <div class="row">
                                            <?php if ($jabatan == 2 || $jabatan == 3) {
                                            ?>
                                                <div class="col-md-6">
                                                    <select id="angkatan" class="form-control custom-select col-md-5" style=" border-radius: 10px;">

                                                        <option value="0">--Pilih Rombel--</option>
                                                        <?php foreach ($rombel as $r) : ?>
                                                            <option value="<?= $r->id_rombel ?>"><?= $r->nama_rombel ?></option>
                                                        <?php endforeach; ?>

                                                    </select>&nbsp;&nbsp;
                                                    <a type="button" href="" class="btn btn-success " data-toggle="modal" data-target="#myModal" style="border-radius: 10px;"><i class="fa fa-user"></i> Tambah Mapel</a>
                                                </div>

                                                <div class="text-right col-md-6">
                                                    <?= $waktu; ?>

                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                </div><br>
                                <?php echo $this->session->flashdata('msg'); ?>

                                <div style="">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 style="text-align: center" class="card-title m-b-0">
                                                        <td>Senin</td>
                                                    </h5>
                                                </div>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"><b> Mapel</b></th>
                                                            <th scope="col"><b>Waktu</b></th>
                                                            <th scope="col"><b>Guru</b></th>
                                                            <th scope="col"><b>Aksi</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="kelas">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!--Bentar-->

                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 style="text-align: center" class="card-title m-b-0">
                                                        <td>Selasa</td>
                                                    </h5>
                                                </div>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"><b> Mapel</b></th>
                                                            <th scope="col"><b>Waktu</b></th>
                                                            <th scope="col"><b>Guru</b></th>
                                                            <th scope="col"><b>Aksi</b></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody id="kelas2">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 style="text-align: center" class="card-title m-b-0">
                                                        <td>Rabu</td>
                                                    </h5>
                                                </div>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"><b> Mapel</b></th>
                                                            <th scope="col"><b>Waktu</b></th>
                                                            <th scope="col"><b>Guru</b></th>
                                                            <th scope="col"><b>Aksi</b></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody id="kelas3">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 style="text-align: center" class="card-title m-b-0">
                                                        <td>Kamis</td>
                                                    </h5>
                                                </div>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"><b> Mapel</b></th>
                                                            <th scope="col"><b>Waktu</b></th>
                                                            <th scope="col"><b>Guru</b></th>
                                                            <th scope="col"><b>Aksi</b></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody id="kelas4">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 style="text-align: center" class="card-title m-b-0">
                                                        <td>Jum'at</td>
                                                    </h5>
                                                </div>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"><b> Mapel</b></th>
                                                            <th scope="col"><b>Waktu</b></th>
                                                            <th scope="col"><b>Guru</b></th>
                                                            <th scope="col"><b>Aksi</b></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody id="kelas5">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 style="text-align: center" class="card-title m-b-0">
                                                        <td>Sabtu</td>
                                                    </h5>
                                                </div>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"><b> Mapel</b></th>
                                                            <th scope="col"><b>Waktu</b></th>
                                                            <th scope="col"><b>Guru</b></th>
                                                            <th scope="col"><b>Aksi</b></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody id="kelas6">

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div id="kls_2" style="display:none;">
                                    <h5 class="card-header" style="background:#fff; ">Pilih Mapel</h5> <br>
                                    <form action="<?php echo base_url('absensi_siswa/absenSiswa/2'); ?>" method="post">
                                        <!--<input name="id_kelas" value="1" type="hidden">-->
                                        <select id="mapel" class="form-control custom-select col-md-3" style=" border-radius: 10px;">
                                            <option value="0">Pilih Mapel</option>
                                            <option value="IPA">IPA</option>
                                            <option value="IPS">IPS</option>
                                            <option value="MTK">MTK</option>
                                        </select>
                                        <input type="submit" value="Absen" class="btn btn-success required">
                                    </form>
                                </div>
                                <div id="kls_3" style="display:none;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Tambah Mata Pelajaran</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url() ?>mapel/tambahMapel" method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mapel</label>
                                        <select style="border-radius: 10px" class="form-control" name="id_pelajaran">
                                            <option value="">--Pilih Mapel--</option>
                                            <?php foreach ($pelajaran as $r) : ?>
                                                <option value="<?= $r->id_pelajaran ?>"><?= $r->nama_pelajaran ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12 ">
                                                <label for="exampleInputPassword1">Jadwal Hari</label>
                                                <select style="border-radius: 10px" class="form-control" name="id_hari">
                                                    <option value="">--Pilih Hari--</option>
                                                    <?php foreach ($hari as $r) : ?>
                                                        <option value="<?= $r->id_hari ?>"><?= $r->nama_hari ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-md-3 col-xs-6 ">
                                                <label for="exampleInputPassword1">Waktu Mulai</label>
                                                <input style="border-radius: 10px" required type="time" class="form-control" name="waktu_mulai" id="nama_rombel" placeholder="IPA">
                                            </div>
                                            <div class="col-md-3 col-xs-6 ">
                                                <label for="exampleInputPassword1">Waktu Selesai</label>
                                                <input style="border-radius: 10px" required type="time" class="form-control" name="waktu_selesai" id="nama_rombel" placeholder="IPA">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col-md-6 col-xs-12 ">
                                                <label for="exampleInputPassword1">Rombel</label>
                                                <select style="border-radius: 10px" class="form-control" name="id_rombel">
                                                    <option value="">--Pilih Rombel--</option>
                                                    <?php foreach ($rombel as $r) : ?>
                                                        <option value="<?= $r->id_rombel ?>"><?= $r->nama_rombel ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-xs-12 ">
                                                <label for="exampleInputPassword1">GTK</label>
                                                <select style="border-radius: 10px" class="form-control" name="id_gtk">
                                                    <option value="">--Pilih GTK--</option>
                                                    <?php foreach ($gtk as $r) : ?>
                                                        <option value="<?= $r->id_gtk ?>"><?= $r->nama_gtk ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
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
                <div class="modal fade" id="modalDel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="simpan btn btn-primary">Save changes</button>
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
    <!-- this page js -->
    <script src="<?= base_url() ?>vendor/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?= base_url() ?>vendor/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?= base_url() ?>vendor/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config2').DataTable();
    </script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config3').DataTable();
    </script>
    <script>
        $(document).ready(function() {

            $("#state").change(function() {
                // foo is the id of the other select box 
                if ($(this).val() == "1") {
                    $("#kls_1").show();
                    $("#kls_2").hide();
                    $("#kls_3").hide();
                } else if ($(this).val() == "2") {
                    $("#kls_2").show();
                    $("#kls_1").hide();
                    $("#kls_3").hide();
                } else if ($(this).val() == "3") {
                    $("#kls_1").hide();
                    $("#kls_2").hide();
                    $("#kls_3").show();
                } else {
                    $("#kls_1").hide();
                    $("#kls_2").hide();
                    $("#kls_3").hide();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#angkatan").change(function() {
                //let a = $(this).val();
                //console.log(a);

                kelas();
                kelas2();
                kelas3();
                kelas4();
                kelas5();
                kelas6();
            });
        });

        function kelas() {
            var angkatan = $("#angkatan").val();
            $.ajax({
                url: "<?= base_url('Mapel/load') ?>",
                data: "angkatan=" + angkatan,
                success: function(data) {
                    console.log(data)
                    $("#kelas").html(data);
                }
            });
        }

        function kelas2() {
            var angkatan = $("#angkatan").val();
            $.ajax({
                url: "<?= base_url('Mapel/load2') ?>",
                data: "angkatan=" + angkatan,
                success: function(data) {
                    console.log(data)
                    $("#kelas2").html(data);
                }
            });
        }

        function kelas3() {
            var angkatan = $("#angkatan").val();
            $.ajax({
                url: "<?= base_url('Mapel/load3') ?>",
                data: "angkatan=" + angkatan,
                success: function(data) {
                    console.log(data)
                    $("#kelas3").html(data);
                }
            });
        }

        function kelas4() {
            var angkatan = $("#angkatan").val();
            $.ajax({
                url: "<?= base_url('Mapel/load4') ?>",
                data: "angkatan=" + angkatan,
                success: function(data) {
                    console.log(data)
                    $("#kelas4").html(data);
                }
            });
        }

        function kelas5() {
            var angkatan = $("#angkatan").val();
            $.ajax({
                url: "<?= base_url('Mapel/load5') ?>",
                data: "angkatan=" + angkatan,
                success: function(data) {
                    console.log(data)
                    $("#kelas5").html(data);
                }
            });
        }

        function kelas6() {
            var angkatan = $("#angkatan").val();
            $.ajax({
                url: "<?= base_url('Mapel/load6') ?>",
                data: "angkatan=" + angkatan,
                success: function(data) {
                    console.log(data)
                    $("#kelas6").html(data);
                }
            });
        }
    </script>

</body>

</html>