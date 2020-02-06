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
                        <h4 class="page-title">Form Rombel</h4>
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
                                <h5 class="card-header" style="background:#2980b9; color:#fff;">Data Rombongan Belajar (Rombel)</h5> <br>
                                <div class="text-left col-md-12">
                                </div>
                                <?php if ($jabatan == 2) {
                                ?>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="border-radius: 10px;"><i class="fa fa-user"></i> Tambah Rombel</a>
                                        </button>
                                    </div>
                                <?php
                                } ?>
                                <br>

                                <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tambahkan Rombongan Belajar</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form action="<?= base_url() ?>rombel/addRombel" method="POST">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Kelas</label>
                                                        <div class="input-group mb-3">
                                                            <select required class="custom-select" id="id_kelas" name="id_kelas">
                                                                <option selected value="">Pilih Kelas</option>
                                                                <?php
                                                                foreach ($kelas as $kelasdata) : ?>
                                                                    <option value="<?= $kelasdata->id_kelas ?>"><?= $kelasdata->kelas ?></option>
                                                                <?php
                                                                endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Nama Rombongan Belajar</label>
                                                        <input required type="text" class="form-control" name="nama_rombel" id="nama_rombel" placeholder="Cth : 1 A">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Wali Kelas</label>
                                                        <div class="input-group mb-3">
                                                            <select required class="custom-select" id="id_gtk" name="id_gtk">
                                                                <option selected value="">Pilih Wali Kelas</option>
                                                                <?php
                                                                foreach ($wali as $walimurid) : ?>
                                                                    <option value="<?= $walimurid->id_gtk ?>"><?= $walimurid->nama_gtk ?></option>
                                                                <?php
                                                                endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Tahun Ajaran</label>
                                                        <div class="input-group mb-3">
                                                            <select required class="custom-select" id="tahun_ajaran" name="tahun_ajaran">
                                                                <option selected value="">Pilih Tahun Ajaran</option>
                                                                <option value="2019/2020">2019/2020</option>
                                                                <option value="2020/2021">2020/2021</option>
                                                                <option value="3">......</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Semester</label>
                                                        <div class="input-group mb-3">
                                                            <select required class="custom-select" id="tahun_ajaran" name="semester">
                                                                <option selected value="">Pilih Semester</option>
                                                                <option value="1">Ganjil</option>
                                                                <option value="2">Genap</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <select id="groupTahun" name="groupTahun" class="form-control">
                                    <?php $first = true;
                                    foreach ($tahun as $years) {
                                        if ($first) {
                                            $first = false;
                                            $yearlast = $years->tahun_ajaran ?>
                                            <option value="<?= $years->tahun_ajaran ?>"><?= $years->tahun_ajaran ?></option>
                                        <?php } else { ?>
                                            <option value="<?= $years->tahun_ajaran ?>"><?= $years->tahun_ajaran ?></option>
                                    <?php }
                                    } ?>

                                </select>
                                <br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>Kelas</b></th>
                                                <th><b>Nama Rombel</b></th>
                                                <th><b>Wali Kelas</b></th>
                                                <th><b>Tahun Ajaran</b></th>
                                                <th><b>Semester</b></th>
                                                <th><b>Aksi</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $ab= "Ganjil";
                                            $i = 1;
                                            foreach ($rombel as $s) : 
                                            if($s->semester == "1"){
                                                $ab="Ganjil";
                                            } else if($s->semester == "2"){
                                                $ab="Genap";
                                            }
                                            
                                            ?>
                                                <tr>
                                                    <td><?= $s->kelas ?></td>
                                                    <td><?= $s->nama_rombel ?></td>
                                                    <td><?= $s->nama_gtk ?></td>
                                                    <td><?= $s->tahun_ajaran ?></td>
                                                    <td><?= $ab ?></td>
                                                    <td>
                                                        <a type="button" href="<?= base_url() ?>rombel/detail_rombel/<?= $s->id_rombel ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail" class="mdi mdi-24px mdi-account-card-details"></a>
                                                        <?php
                                                        if ($jabatan == 2) {

                                                        ?>
                                                            <a type="button" href="<?= base_url() ?>rombel/detail_rombel/<?= $s->id_rombel ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" class="mdi mdi-24px mdi-account-edit"></a>
                                                            <a type="button" href="<?= base_url() ?>rombel/detail_rombel/<?= $s->id_rombel ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus" class="mdi mdi-24px mdi-delete"></a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php
                                                $i++;
                                            endforeach; ?>
                                        </tbody>

                                    </table>
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
    <script>
        $(document).ready(function() {
            $('#zero_config').DataTable().column(3).search("<?= $yearlast ?>").draw();
        });
        $(document).ready(function() {
            $('#groupTahun').change(function(e) {
                e.preventDefault();
                $('#zero_config').DataTable().column(3).search($(this).val()).draw();
            })
        });
    </script>
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

</body>

</html>