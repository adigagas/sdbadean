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
                                <h5 class="card-header" style="background:#2980b9; color:#fff;">Daftar Siswa</h5> <br>
                                <div class="text-left">
                                    <div class="row">
                                        <?php foreach ($rombel_detail as $detail_rombel) : ?>
                                            <div class="col-2">
                                                <h6>Nama Rombel</h6>
                                            </div>
                                            <div class="col-6">
                                                <h6>: <b><?= $detail_rombel->nama_rombel;
                                                            $getKelas = $detail_rombel->id_kelas;
                                                            $nama_rombel_nonaik = $detail_rombel->nama_rombel;
                                                            $tahun_ajaran_nonaik = $detail_rombel->tahun_ajaran; ?><b></h6>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <h6>Nama Wali Kelas</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6>: <b><?= $detail_rombel->nama_gtk;
                                                        $aboutgtk = $detail_rombel->id_gtk;
                                                        $myvalue = $detail_rombel->tahun_ajaran ?><b></h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <h6>NIP</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6>: <b><?= $detail_rombel->nip_gtk ?><b></h6>
                                        </div>
                                    <?php endforeach; ?>

                                    </div>
                                    <?php if ($jabatan == 2 || $jabatan == 3) {
                                    ?>
                                        <div class="text-right">
                                            <!-- Button to Open the Modal -->
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style=" Border-radius: 5px;">
                                                <i class="fa fa-user"></i> Tambah Siswa
                                            </button>
                                        </div>
                                    <?php } ?>
                                    <br>

                                    <form action="<?= base_url('rombel/naikkelas') ?>" method="POST">
                                        <div class="row">
                                            <div class="col-sm-2 btn-align text-center">
                                                <input type="checkbox" id="naikdata" onClick="toggle(this)" /> Pilih Semua<br />
                                            </div>
                                            <br>
                                            <div class="col-sm-1">
                                                <div class="input-group">
                                                    <select required class="custom-select" id="nama_kelas" name="nama_kelas">
                                                        <?php $option = md5(uniqid(rand(), true));
                                                        if ($getKelas == 1 || $getKelas == 2 || $getKelas == 3 || $getKelas == 4 || $getKelas == 5) {
                                                            $kelasnew = $getKelas + 1;
                                                            echo "<option value=" . $kelasnew  . 'A' . ">" . $kelasnew  . "A" . "</option>";
                                                            echo "<option value=" . $kelasnew  . 'B' . ">" . $kelasnew  . "B" . "</option>";
                                                        } else {
                                                            echo "<option value='LULUS'>LULUS</option>";
                                                        } ?>
                                                    </select>

                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <select required class="custom-select" id="id_gtk" name="id_gtk">
                                                        <?php $option = md5(uniqid(rand(), true));
                                                        foreach ($wali as $showwali) :
                                                            echo "<option value=" . $showwali->id_gtk . ">" . $showwali->nama_gtk . "</option>";
                                                        endforeach;
                                                        ?>
                                                    </select>
                                                    <input hidden id="class_id" name="class_id" type="text" value="<?= $getKelas + 1 ?>">
                                                    <input hidden id="aboutgtk" name="aboutgtk" type="text" value="<?= $aboutgtk ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-sm-2">
                                                <div class="input-group">
                                                    <?php $arr = explode('/', trim($myvalue)); ?>
                                                    <select id="years_ajaran" name="years_ajaran" required class="custom-select" d>
                                                        <?php
                                                        $years_nonaik = $arr[1];
                                                        $yearsnext_nonaik = $arr[1] +  1;
                                                        for ($i = 0; $i < 10; $i++) {
                                                            $years = $arr[1] + $i;
                                                            $plus = $i + 1;
                                                            $yearsnext = $arr[1] + $plus;
                                                            echo "<option value='" . $years . "/" . $yearsnext . "'>" . $years . "/" . $yearsnext . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                    <input hidden id="class_id" name="class_id" type="text" value="<?= $getKelas + 1 ?>">
                                                    <input hidden id="aboutgtk" name="aboutgtk" type="text" value="<?= $aboutgtk ?>">
                                                    <input hidden id="id_class_nonaik" name="id_class_nonaik" type="text" value="<?= $getKelas - 1 ?>">
                                                    <input hidden id="nama_rombel_nonaik" name="nama_rombel_nonaik" type="text" value="<?= $nama_rombel_nonaik ?>">
                                                    <input hidden id="tahun_ajaran_nonaik" name="tahun_ajaran_nonaik" type="text" value="<?= $years_nonaik . "/" . $yearsnext_nonaik  ?>"></div>
                                            </div>
                                            <br>
                                            <div class="col-sm-2">
                                                <input id="myBtn" class="delete btn btn-success" type="submit" disabled="disabled" style=" Border-radius: 5px;" name="remove_levels" value="Naikkan Kelas">
                                                </input>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <style>
                                                .btn-align {
                                                    padding: 6px 12px;
                                                    line-height: 1.42857143;
                                                    vertical-align: middle;

                                                }
                                            </style>
                                            <div class="col-sm-2 btn-align text-center">
                                                <input type="checkbox" id="cekdata" class="cekdata" onClick="unclass(this)" /> Pilih Semua<br />
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <select required class="custom-select" id="id_gtk_nonaik" name="id_gtk_nonaik">
                                                        <?php $option = md5(uniqid(rand(), true));
                                                        foreach ($wali as $showwali) :
                                                            echo "<option value=" . $showwali->id_gtk . ">" . $showwali->nama_gtk . "</option>";
                                                        endforeach;
                                                        ?>
                                                    </select>
                                                    <input hidden id="class_id" name="class_id" type="text" value="<?= $getKelas + 1 ?>">
                                                    <input hidden id="aboutgtk" name="aboutgtk" type="text" value="<?= $aboutgtk ?>">
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <input id="downClass" class="notclass btn btn-danger" type="submit" disabled="disabled" style=" Border-radius: 5px;" name="noclasstrue" value="Tidak Naik">
                                                </input>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="table-responsive">
                                            <table id="zero_config" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th><b>NIS</b></th>
                                                        <th><b>NISN</b></th>
                                                        <th><b>Nama Peserta Didik</b></th>
                                                        <th><b>Tempat Tanggal Lahir</b></th>
                                                        <th><b>Jenis Kelamin</b></th>
                                                        <th><b>Agama</b></th>
                                                        <th><b>Aksi</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    foreach ($rombel as $s) : ?>
                                                        <tr>
                                                            <td><input class="checkbox" type="checkbox" name="Id_siswa[]" value=<?= $s->id_siswa ?>><br></td>
                                                            <input name="id_class" hidden value="<?= $s->id_rombel ?>">
                                                            <td><?= $s->nomor_induk ?></td>
                                                            <td><?= $s->nomor_induk_sn ?></td>
                                                            <td><?= $s->nama_siswa ?></td>
                                                            <td><?= $s->tempat_lahir_siswa . ', ' . $s->tanggal_lahir_siswa ?></td>
                                                            <td><?= $s->jenis_kelamin_siswa ?></td>
                                                            <td><?= $s->agama_siswa ?></td>
                                                            <td><a type="button" href="<?= base_url() ?>Peserta_didik/detailPeserta/<?= $s->id_siswa ?>" class="btn btn-info btn-sm">Detail</a></td>
                                                        </tr>
                                                    <?php
                                                        $i++;
                                                    endforeach; ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="confirm" class="modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Konfirmasi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah anda yakin ingin menaikkan murid tersebut ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Yakin</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="noclass" class="modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Konfirmasi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah anda yakin tidak menaikkan murid ini ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Yakin</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div id="confirm" class="modal hide fade">
                        <div class="modal-body">
                            Are you sure?
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
                            <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                        </div>
                    </div> -->
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Siswa</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <script>
                                        $(document).ready(function() {
                                            $('#dataTable').DataTable();
                                        });
                                    </script>
                                    <div class="table-responsive">
                                        <table id="dataTable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th><b>NIS</b></th>
                                                    <th><b>NISN</b></th>
                                                    <th><b>Nama Peserta Didik</b></th>
                                                    <th><b>Aksi</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                foreach ($siswafree as $s) : ?>
                                                    <tr>
                                                        <td><input type="checkbox" name="Id_siswaRombel[]" value=<?= $s->id_siswa ?>><br></td>
                                                        <td><?= $s->nomor_induk ?></td>
                                                        <td><?= $s->nomor_induk_sn ?></td>
                                                        <td><?= $s->nama_siswa ?></td>
                                                        <td>
                                                            <form action="<?= base_url() ?>rombel/addsiswa" method="POST">
                                                                <input type="text" hidden name="id_rombel" value="<?php echo $this->uri->segment(3); ?>">
                                                                <input type="text" hidden name="id_siswa" value="<?= $s->id_siswa ?>">
                                                                <input id="acceptTerms" name="acceptTerms" type="submit" class="btn btn-info btn-sm" value="Tambahkan">
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php
                                                    $i++;
                                                endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        <script language="JavaScript">
            function toggle(source) {
                var chet = <?php echo $count ?>;
                checkboxes = document.getElementsByName('Id_siswa[]');
                if (checkboxes.length == 0) {
                    document.getElementById("naikdata").checked = false;
                    document.getElementById("cekdata").checked = false;
                }
                if (document.getElementById('naikdata').checked = source.checked) {
                    document.getElementById('cekdata').checked = !source.checked;
                    document.getElementById('downClass').disabled = source.checked;
                };
                if (chet > 0) {
                    checkboxes = document.getElementsByName('Id_siswa[]');
                    document.getElementById('myBtn').disabled = !source.checked;
                    for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                    }
                }

            }
        </script>

        <script language="JavaScript">
            function unclass(source) {
                var chet = <?php echo $count ?>;
                checkboxes = document.getElementsByName('Id_siswa[]');
                if (checkboxes.length == 0) {
                    document.getElementById("naikdata").checked = false;
                    document.getElementById("cekdata").checked = false;
                }
                if (document.getElementById('cekdata').checked = source.checked) {
                    document.getElementById('naikdata').checked = !source.checked;
                    document.getElementById('myBtn').disabled = source.checked;
                };
                if (chet > 0) {
                    checkboxes = document.getElementsByName('Id_siswa[]');
                    document.getElementById('downClass').disabled = !source.checked;
                    for (var i = 0, n = checkboxes.length; i < n; i++) {
                        checkboxes[i].checked = source.checked;
                    }
                }

            }
        </script>

        <script language="JavaScript">
            $(function() {
                $(".checkbox").click(function() {
                    lengthchekboxes = $('[name="Id_siswa[]"]:checked').length;
                    checkboxes = document.getElementsByName('Id_siswa[]');
                    if (lengthchekboxes < checkboxes.length) {
                        document.getElementById("naikdata").checked = false;
                        document.getElementById("cekdata").checked = false;
                    }
                    if (lengthchekboxes == checkboxes.length) {
                        document.getElementById("naikdata").checked = true;
                        document.getElementById("cekdata").checked = true;
                    }
                    $('.delete').prop('disabled', $('input.checkbox:checked').length == 0);
                    $('.notclass').prop('disabled', $('input.checkbox:checked').length == 0);
                });
            });
        </script>

        <script>
            $('button[name="remove_levels"]').on('click', function(e) {
                var $form = $(this).closest('form');
                e.preventDefault();
                $('#confirm').modal({
                        backdrop: 'static',
                        keyboard: false
                    })
                    .on('click', '#delete', function(e) {
                        $form.trigger('submit');
                    });
            });
        </script>

        <script>
            $('button[name="noclasstrue"]').on('click', function(e) {
                var $form = $(this).closest('form');
                e.preventDefault();
                $('#noclass').modal({
                        backdrop: 'static',
                        keyboard: false
                    })
                    .on('click', '#delete', function(e) {
                        $form.trigger('submit');
                    });
            });
        </script>
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
        <script src="<?= base_url() ?>vendor/assets/extra-libs/DataTables/datatables.js"></script>
        <script>
            /****************************************
             *       Basic Table                   *
             ****************************************/
            $('#zero_config').DataTable();
        </script>

</body>

</html>