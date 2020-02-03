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

                                <div class="row">
                                    <div class="col-md-2 ">
                                        <!-- City -->

                                        <select class="custom-select" id='sel_city'>
                                            <?php foreach ($tahun as $years) { ?>
                                                <option value="<?= $years->tahun_ajaran ?>"><?= $years->tahun_ajaran ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-2 ">
                                        <!-- Gender -->
                                        <select class="custom-select" id='sel_gender'>
                                            <?php foreach ($pelajaran as $study) { ?>
                                                <option value="<?= $study->id_pelajaran ?>"><?= $study->nama_pelajaran ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-2 ">
                                        <!-- Gender -->

                                        <select class="custom-select" id='sel_class'>
                                            <?php foreach ($kelas as $class) { ?>
                                                <option value="<?= $class->id_kelas ?>"><?= $class->kelas ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                    <div>
                                        <!-- Name -->
                                        <input hidden type="text" id="searchName" placeholder="Search Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="table-responsive">
                                            <table id='userTable' class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2" class="text-center">Semester I</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="w-15">NO</th>
                                                        <th>DESKRIPSI KD PENGETAHUAN (KI_3)</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="table-responsive">
                                            <table id='userTableData' class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2" class="text-center">Semester I</th>
                                                    </tr>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>DESKRIPSI KD KETERAMPILAN (KI_4)
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="table-responsive">
                                            <table id='userTableII' class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2" class="text-center">Semester II</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="w-15">NO</th>
                                                        <th>DESKRIPSI KD PENGETAHUAN (KI_3)</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="table-responsive">
                                            <table id='userTableI' class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                    <tr>
                                                        <th colspan="2" class="text-center">Semester II</th>
                                                    </tr>
                                                    <th>NO</th>
                                                    <th>DESKRIPSI KD KETERAMPILAN (KI_4)
                                                    </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
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

            var userDataTable = $('#userTableData').DataTable({
                'processing': true,
                'bInfo': false,
                "lengthChange": false,
                'serverSide': true,
                'serverMethod': 'post',
                //'searching': false, // Remove default Search Control
                'ajax': {
                    'url': '<?= base_url() ?>Penilaian/userListI',
                    'data': function(data) {
                        data.searchCity = $('#sel_city').val();
                        data.searchGender = $('#sel_gender').val();
                        data.searchClass = $('#sel_class').val();
                        data.searchName = $('#searchName').val();
                    }
                },
                'columns': [{
                        data: 'indikator_kd'
                    },
                    {
                        data: 'kompetensi_dasar'
                    },
                ]
            });

            $('#sel_city,#sel_gender,#sel_class').change(function() {
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
    <script type="text/javascript">
        $(document).ready(function() {

            var userDataTable = $('#userTable').DataTable({
                'processing': true,
                'bInfo': false,
                "lengthChange": false,
                'serverSide': true,
                'serverMethod': 'post',
                //'searching': false, // Remove default Search Control
                'ajax': {
                    'url': '<?= base_url() ?>Penilaian/userList',
                    'data': function(data) {
                        data.searchCity = $('#sel_city').val();
                        data.searchGender = $('#sel_gender').val();
                        data.searchClass = $('#sel_class').val();
                        data.searchName = $('#searchName').val();
                    }
                },
                'columns': [{
                        data: 'indikator_kd'
                    },
                    {
                        data: 'kompetensi_dasar'
                    },
                ]
            });

            $('#sel_city,#sel_gender,#sel_class').change(function() {
                userDataTable.draw();
            });
            $('#searchName').keyup(function() {
                userDataTable.draw();
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            var userDataTable = $('#userTableII').DataTable({
                'processing': true,
                'bInfo': false,
                "lengthChange": false,
                'serverSide': true,
                'serverMethod': 'post',
                //'searching': false, // Remove default Search Control
                'ajax': {
                    'url': '<?= base_url() ?>Penilaian/userListII',
                    'data': function(data) {
                        data.searchCity = $('#sel_city').val();
                        data.searchGender = $('#sel_gender').val();
                        data.searchClass = $('#sel_class').val();
                        data.searchName = $('#searchName').val();
                    }
                },
                'columns': [{
                        data: 'indikator_kd'
                    },
                    {
                        data: 'kompetensi_dasar'
                    },
                ]
            });

            $('#sel_city,#sel_gender,#sel_class').change(function() {
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
    <script type="text/javascript">
        $(document).ready(function() {

            var userDataTable = $('#userTableI').DataTable({
                'processing': true,
                'bInfo': false,
                "lengthChange": false,
                'serverSide': true,
                'serverMethod': 'post',
                //'searching': false, // Remove default Search Control
                'ajax': {
                    'url': '<?= base_url() ?>Penilaian/userListIII',
                    'data': function(data) {
                        data.searchCity = $('#sel_city').val();
                        data.searchGender = $('#sel_gender').val();
                        data.searchClass = $('#sel_class').val();
                        data.searchName = $('#searchName').val();
                    }
                },
                'columns': [{
                        data: 'indikator_kd'
                    },
                    {
                        data: 'kompetensi_dasar'
                    },
                ]
            });

            $('#sel_city,#sel_gender,#sel_class').change(function() {
                userDataTable.draw();
            });
            $('#searchName').keyup(function() {
                userDataTable.draw();
            });
        });
    </script>
</body>

</html>