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
                                <style>
                                    .btn-align {
                                        padding: 6px 12px;
                                        line-height: 1.42857143;
                                        vertical-align: middle;

                                    }
                                </style>
                                <div class="row">
                                    <div class="btn-align text-center col-md-2">
                                        <p><b>Tahun Ajaran</b></p>
                                    </div>
                                    <div class="col-md-2 ">
                                        <!-- City -->

                                        <select class="custom-select" name="sel_city" id='sel_city'>
                                            <?php foreach ($tahun as $years) { ?>
                                                <option value="<?= $years->tahun_ajaran ?>"><?= $years->tahun_ajaran ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="btn-align text-center col-md-2">
                                        <p><b>Pelajaran</b></p>
                                    </div>
                                    <div class="col-md-2 ">
                                        <!-- Gender -->
                                        <select class="custom-select" id='sel_gender' name="sel_gender">
                                            <?php foreach ($rombel as $years) { ?>
                                                <option value="<?= $years->id_rombel ?>"><?= $years->nama_rombel ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <!-- Gender -->
                                    <select hidden class="custom-select" id='sel_class' name="sel_class">
                                        <?php foreach ($tahun as $years) { ?>
                                            <option value="<?= $years->id_rombel ?>"><?= $years->id_kelas ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="btn-align text-center col-md-2">
                                        <p><b>Semester</b></p>
                                    </div>
                                    <div class="col-md-2 ">
                                        <select class="custom-select" id='sel_semester' name="sel_semester">
                                            <?php foreach ($semester as $years) { ?>
                                                <option value="<?= $years->semester ?>"><?= $years->semester ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                    <div class="col-md-2 ">
                                        <!-- Gender -->
                                        <select hidden class="custom-select" id='sel_ki' name="sel_ki">
                                            <?php foreach ($tahun as $years) { ?>
                                                <option value="<?= $years->id_rombel ?>"><?= $years->nama_rombel ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                    <div>
                                        <!-- Name -->
                                        <input hidden type="text" id="searchName" placeholder="Search Name">
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id='userTableSosial' class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="vertical-align : middle;text-align:center;" rowspan="2"><b>NAMA PESERTA DIDIK</b></th>
                                                <th style="vertical-align : middle;text-align:center;" colspan="7"><b>ASPEK NILAI</b></th>
                                                <th style="vertical-align : middle;text-align:center;" rowspan="2">Ketuntasan</th>
                                            </tr>
                                            <tr>
                                                <th style="vertical-align : middle;text-align:center;">Jujur</th>
                                                <th style="vertical-align : middle;text-align:center;">Disiplin</th>
                                                <th style="vertical-align : middle;text-align:center;">Tanggung Jawab</th>
                                                <th style="vertical-align : middle;text-align:center;">Santun</th>
                                                <th style="vertical-align : middle;text-align:center;">Peduli</th>
                                                <th style="vertical-align : middle;text-align:center;">Percaya Diri</th>
                                                <th style="vertical-align : middle;text-align:center;">Toleransi</th>

                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br>
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
            var userDataTable = $('#userTableSosial').DataTable({
                'processing': true,
                'bInfo': false,
                "lengthChange": false,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url': '<?= base_url() ?>penilaian/userdatasosial',
                    'data': function(data) {
                        data.searchCity = $('#sel_city').val();
                        data.searchGender = $('#sel_gender').val();
                        data.searchClass = $('#sel_class').val();
                        data.searchName = $('#searchName').val();
                        data.searchSemester = $('#sel_semester').val();
                    }
                },
                'columns': [{
                        data: 'nama_siswa'
                    },
                    {
                        data: 'nilai_jujur'
                    },
                    {
                        data: 'nilai_disiplin'
                    },
                    {
                        data: 'nilai_tj'
                    },
                    {
                        data: 'nilai_santun'
                    },
                    {
                        data: 'nilai_peduli'
                    },
                    {
                        data: 'nilai_pd'
                    },
                    {
                        data: 'nilai_toleransi'
                    },
                    {
                        data: 'deskripsi'
                    },
                ]
            });

            $('#sel_city,#sel_gender,#sel_class,#sel_semester,#sel_ki', ).change(function() {
                userDataTable.draw();
            });
            $('#searchName').keyup(function() {
                userDataTable.draw();
            });
        });
    </script>
    <style>
        /* ul.pagination li:first-child,
        ul.pagination li:last-child {
            display: none;
        } */

        ul.pagination {
            display: none;
        }

        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
            visibility: hidden;
        }
    </style>
</body>

</html>