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
                        <h4 class="page-title">Form Akun</h4>
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
                                <h5 class="card-header" style="background:#2980b9; color:#fff;">Akun Pengguna</h5><br>
                                <div class="form-gruop">

                                    <div class="text-right">

                                        <!-- <h7><strong> Posisi di sekolah </strong></h7> &nbsp;
                                        <input> &nbsp; &nbsp; &nbsp; &nbsp; -->
                                        <!-- Button trigger modal -->
                                        <a href="<?= base_url('Info/tambahInfo'); ?>" class="btn btn-success">Tambah Info</a>

                                    </div>
                                </div><br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>No</b></th>
                                                <th><b>Judul</b></th>
                                                <th><b>deskripsi</b></th>
                                                <th><b>Tanggal publish</b></th>
                                                <th><b>Gambar</b></th>
                                                <th><b>Aksi</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($info as $g) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $g->judul ?></td>
                                                    <td><?= $g->description ?></td>
                                                    <td><?= $g->tgl_publish ?></td>
                                                    <td> <img width="100px;" height="100px" src="<?= base_url('vendor/assets/images/info/') .  $g->gambar; ?>" alt="..."></td>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#modal-edit<?= $g->id_info; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" class="mdi mdi-24px mdi-account-edit"></a>
                                                        <a type="button" href="<?= base_url('Akun/hapusAkun/' . $g->id_info);   ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data  ?');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus" class="mdi mdi-24px mdi-delete"></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php $no=0; foreach($info as $row): $no++; ?>
                <div class="row">
  <div id="modal-edit<?=$row->id_info;?>" class="modal fade">
  <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Ekskul</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           
                            <div class="modal-body">
                                <form action="<?php echo base_url('Akun/editAkun/'.$row->id_info); ?>" method="post" enctype="multipart/form-data">
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-4  control-label col-form-label">Judul </label>
                                        <div class="col-sm-8">
                                        <input type="hidden" style="border-radius: 10px;" name="id_login" class="form-control" id="id_login" value="<?php echo $row->id_info; ?>" placeholder="Nama Penanggung Jawab" required>
                                            <input type="text" style="border-radius: 10px;" name="username" class="form-control" id="username" value="<?php echo $row->judul;  ?>" placeholder="Nama Penanggung Jawab" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-4  control-label col-form-label">Description</label>
                                        <div class="col-sm-8">
                                        
                                            <input type="text" style="border-radius: 10px;" name="username" class="form-control" id="username" value="<?php echo $row->description;  ?>" placeholder="Nama Penanggung Jawab" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-4  control-label col-form-label">Username</label>
                                        <div class="col-sm-8">
                                       
                                            <input type="text" style="border-radius: 10px;" name="username" class="form-control" id="username" value="<?php echo $row->tgl_publish;  ?>" placeholder="Nama Penanggung Jawab" required>
                                        </div>
                                    </div>
                                   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </form>
                        </div>
                    </div>
</div>
                <?php endforeach; ?>
                <!-- Modal -->

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

</body>

</html>