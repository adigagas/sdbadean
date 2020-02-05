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

                                        <select class="custom-select" id='sel_city'>
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
                                        <select class="custom-select" id='sel_gender'>
                                            <?php foreach ($tahun as $years) { ?>
                                                <option value="<?= $years->id_pelajaran ?>"><?= $years->nama_pelajaran ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="btn-align text-center col-md-1">
                                        <p><b>Kelas</b></p>
                                    </div>
                                    <div class="col-md-2">
                                        <!-- Gender -->
                                        <select class="custom-select" id='sel_class'>
                                            <?php foreach ($tahun as $years) { ?>
                                                <option value="<?= $years->id_kelas ?>"><?= $years->id_kelas ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                    <div class="btn-align text-center col-md-2">
                                        <p><b>Semester</b></p>
                                    </div>
                                    <div class="col-md-2 ">
                                        <select class="custom-select" id='sel_semester'>
                                            <?php foreach ($tahun as $years) { ?>
                                                <option value="<?= $years->semester ?>"><?= $years->semester ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                    <div class="btn-align text-center col-md-2">
                                        <p><b>Kompentensi Inti</b></p>
                                    </div>
                                    <div class="col-md-2 ">
                                        <!-- Gender -->
                                        <select class="custom-select" id='sel_ki'>
                                            <?php foreach ($tahun as $years) { ?>
                                                <option value="<?= $years->id_ki ?>"><?= $years->nama_ki ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                    <div>
                                        <!-- Name -->
                                        <input hidden type="text" id="searchName" placeholder="Search Name">
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id='userTableData' class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="2" class="text-center">Semester I</th>
                                            </tr>
                                            <tr>
                                                <th class="w-15">NO</th>
                                                <th>DESKRIPSI KD PENGETAHUAN (KI_3)</th>
                                                <th>DESKRIPSI KD PENGETAHUAN (KI_3)</th>

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
            var userDataTable = $('#userTableData').DataTable({
                'processing': true,
                'bInfo': false,
                "lengthChange": false,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url': '<?= base_url() ?>penilaian/userdaata',
                    'data': function(data) {
                        data.searchCity = $('#sel_city').val();
                        data.searchGender = $('#sel_gender').val();
                        data.searchClass = $('#sel_class').val();
                        data.searchName = $('#searchName').val();
                        data.searchSemester = $('#sel_semester').val();
                        data.searchKI = $('#sel_ki').val();
                    }
                },
                'columns': [{
                        data: 'nama_pelajaran'
                    },
                    {
                        data: 'nama_pelajaran'
                    },
                    {
                        data: 'id_riwayat_nilai',
                        render: function(data, type, row) {
                            return '<a href="<?= base_url('penilaian/detail_show/') ?>' + data + '" class="btn btn-primary btn-lg active" role="button" >Primary link</a>';
                        }
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