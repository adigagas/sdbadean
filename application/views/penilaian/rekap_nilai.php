<?php $this->load->view('templates/header'); ?>

<!-- Datatable CSS -->


<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Datatable JS -->
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <?php
        $this->load->view('templates/navbar');
        ?>

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Data Peserta Didik</h4>
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
            <!-- Search filter -->
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
                                    <div>
                                        <form action="<?= base_url() ?>Laporan/cetakLaporan" method="POST">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <h4>Tahun Ajaran</h4>

                                                    <select class="form-control" name="tahun" id="sel_tahun">
                                                        <!--<option value=''>-- Pilih Tahun --</option>-->
                                                        <?php 
                                                        $this->db->group_by('tahun_ajaran');
                                                        $rom=$this->db->get('tb_rombel')->result();
                                                        foreach($rom as $r){?>
                                                        <option value="<?= $r->tahun_ajaran?>"> <?= $r->tahun_ajaran?> </option><?php }?>
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4>Rombel</h4>
                                                    <!-- Gender -->
                                                    <select id='sel_rombel' name="id_rombel" class="form-control">
                                                        <!--<option value=''>-- Pilih Rombel --</option>-->
                                                        <?php
                                                        $this->db->order_by('id_kelas', 'ASC');
                                                        $this->db->group_by('nama_rombel');
                                                        $data = $this->db->get('tb_rombel')->result();
                                                        foreach ($data as $d) : ?>
                                                            <option value='<?= $d->nama_rombel ?>'><?= $d->nama_rombel ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>

                                                <!-- Name -->
                                                <div class="col-md-2 ">
                                                    <h4></h4><br>
                                                    <input id="searchName" class="form-control" placeholder="Search Name">
                                                </div>
                                                <div class="text-right col-md-6">
                                                    <?= date('l, d-m-Y'); ?>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <br>
                                    <!-- Table -->
                                    <div class="table-responsive">
                                        <table id='userTable' class="table table-striped table-bordered">

                                            <thead>
                                                <tr>
                                                    <th>NISN</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Nama Rombel</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>


                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>vendor/assets/libs/jquery/dist/jquery.min.js">
    </script>
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

    <!-- Script -->
    <script type="text/javascript">
        $(document).ready(function() {
            var userDataTable = $('#userTable').DataTable({
                //   'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                //'searching': false, // Remove default Search Control
                'ajax': {
                    'url': '<?= base_url() ?>index.php/Laporan/rombelList',
                    'data': function(data) {
                        data.searchRombel = $('#sel_rombel').val();
                        data.searchTahun = $('#sel_tahun').val();
                        data.searchName = $('#searchName').val();
                        console.log(data);
                    }

                },
                'columns': [{
                        data: 'nomor_induk_sn'
                    },
                    {
                        data: 'nama_siswa'
                    },
                    {
                        data: 'nama_rombel'
                    },
                    {
                        data: 'action'
                    }

                ]
            });

            $('#sel_city,#sel_gender,#sel_rombel,#sel_mapel,#sel_bulan,#sel_tahun').change(function() {
                userDataTable.draw();
            });
            $('#searchName').keyup(function() {
                userDataTable.draw();
            });
        });
    </script>
</body>

</html>