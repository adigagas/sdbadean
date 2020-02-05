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
                        <h4 class="page-title">Penilaian</h4>
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
                                <h5 class="card-header" style="background:#2980b9; color:#fff;">Daftar Penilaian</h5> <br>
                                <div class="row mb-5">
                                    <div class="col">
                                        <table>
                                            <tr>
                                                <td><b>Mata Penilaian</b></td>
                                                <td><b>:</b></td>
                                                <td> <?= $nama_pelajaran->nama_pelajaran ?> </td>
                                            </tr>
                                            <tr>
                                                <td><b>Kompetensi Inti</b></td>
                                                <td><b>:</b></td>
                                                <td><?= $ki_data->id_ki ?> <?= $ki_data->nama_ki ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Wali Kelas</b></td>
                                                <td><b>:</b></td>
                                                <td><?= $this->session->userdata('nama_gtk'); ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>NIP</b></td>
                                                <td><b>:</b></td>
                                                <td>1234567890</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-4">
                                        <table>
                                            <tr>
                                                <td><b>Tahun Ajaran</b></td>
                                                <td><b>:</b></td>
                                                <td>2019/2020</td>
                                            </tr>
                                            <tr>
                                                <td><b>Semester</b></td>
                                                <td><b>:</b></td>
                                                <td>1</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <table id="zero_config" class="table table-sm">
                                    <thead class="text-center">
                                        <tr>
                                            <th rowspan="2"><b>NO</b></th>
                                            <th rowspan="2"><b>NAMA PESERTA DIDIK</b></th>
                                            <?php $i = 0;
                                            foreach ($indikator_show as $indikators) {
                                                $i++; ?>
                                            <?php } ?>
                                            <th colspan="<?= $i ?>"><b>KOMPETENSI DASAR</b></th>
                                            <th rowspan="2" width="70px"><b>MID</b></th>
                                            <th rowspan="2" width="70px"><b>UAS</b></th>
                                        </tr>
                                        <tr>
                                            <?php foreach ($indikator_show as $indikators) { ?>
                                                <th width="70px" data-toggle="tooltip" data-placement="top" data-original-title="<?= $indikators->kompetensi_dasar ?>"><?= $indikators->indikator_kd ?></th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0;
                                        foreach ($siswa_show as $siswa) {
                                            $i++; ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $siswa->nama_siswa ?></td>
                                                <?php
                                                $f = 0;
                                                $this->db->select('*');
                                                $this->db->join('tb_nilai', 'tb_nilai.kode_nilai_kd = tb_nilai_kd.kode_nilai_kd');
                                                $this->db->where('tb_nilai_kd.kode_nilai_kd', $siswa->kode_nilai_kd);
                                                $query = $this->db->get('tb_nilai_kd');
                                                foreach ($query->result() as $row) {
                                                ?>
                                                    <td class="text-center">
                                                        <?php echo $row->nilai;

                                                        $nilaidata[] = $row->nilai; ?>
                                                        <i data-toggle="modal" data-id="<?= $row->nilai; ?>" data-en="<?= $row->id_nilai_kd; ?>" href="#addBookDialog" class="open-AddBookDialog mdi mdi-border-color"></i>
                                                    </td>
                                                <?php $f++;
                                                } ?>
                                                <td class="text-center">
                                                    <?php $avg = array_sum($nilaidata) / count($nilaidata);
                                                    echo round($avg) ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php $avg = array_sum($nilaidata) / count($nilaidata);
                                                    echo round($avg) ?>
                                                </td>
                                            </tr>
                                        <?php unset($nilaidata);
                                        } ?>
                                    </tbody>
                                </table>
                                <div class="modal fade" id="addBookDialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url('penilaian/change_value') ?>" method="POST" ?>
                                                <div class="modal-body">
                                                    <input hidden class="form-control" type="text" name="bookEn" id="bookEn" value="" />
                                                    <input class="form-control" type="text" name="bookId" id="bookId" value="" />
                                                    <input hidden class="form-control" type="text" name="bookRiwayat" id="bookRiwayat" value="<?= $id_riwayat ?>" />
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save Perubahan</button>
                                                </div>
                                            </form>
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
        $(document).ready(function() {
            $('#zero_config').dataTable({
                'bInfo': false,
                "aLengthMenu": [
                    [25, 50, 75, -1],
                    [25, 50, 75, "All"]
                ],
                "iDisplayLength": 1000,
                "columnDefs": [{
                    "targets": All,
                    "orderable": false
                }]
            });
        });
        $('#zero_config').on('click', 'tbody td:not(:first-child)', function(e) {
            editor.inline(this);
        });
        $(document).on("click", ".open-AddBookDialog", function() {
            var myBookId = $(this).data('id');
            var myBookEn = $(this).data('en');
            $(".modal-body #bookId").val(myBookId);
            $(".modal-body #bookEn").val(myBookEn);
            $('#addBookDialog').modal('show');
        });
    </script>

</body>

</html>