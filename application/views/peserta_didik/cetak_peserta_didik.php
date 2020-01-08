<?php $this->load->view('templates/header'); ?>

<body>

    <center>
        <h2>IDENTITAS PESERTA DIDIK</h2>
    </center>

    <br />

    <div class="row">
        <div class="col-md-5 col-xs-12" style="margin-left: 10px;">
            <h5 class="">A. IDENTITAS PESERTA DIDIK</h5><br>
            <div class="" style="margin-left: 15px">
                <div class="form-group2 row">
                    <label for="fname" class="col-sm-6 col-xs-5 col-md-6 control-label col-form-label">1. Nomor Induk </label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->nomor_induk ?></label>
                    </div>
                </div>
                <div class="form-group2 row">
                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">2. NISN</label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->nomor_induk_sn ?></label>
                    </div>
                </div>
                <div class="form-group2 row">
                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">3. Nama Peserta Didik</label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->nama_siswa ?></label>
                    </div>
                </div>
                <div class="form-group2 row">
                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">4. Tempat / Tanggal Lahir</label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->tempat_lahir_siswa ?> / <?= $siswa->tanggal_lahir_siswa ?></label>
                    </div>
                </div>
                <div class="form-group2 row">
                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">5. Jenis Kelamin</label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->jenis_kelamin_siswa ?></label>
                    </div>
                </div>
                <div class="form-group2 row">
                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">6. Agama</label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->agama_siswa ?></label>
                    </div>
                </div>

                <div class="form-group2 row">
                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">7. Kewarganegaraan</label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->kewarganegaraan_siswa ?></label>
                    </div>
                </div>
                <div class="form-group2 row">
                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">8. Bahasa Sehari-hari</label>
                    <div class="col-sm-6 col-xs-4 col-md-6">
                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->bahasa_siswa ?></label>
                    </div>
                </div>
                <div class="form-group2 row">
                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">9. Golongan Darah</label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->golongan_siswa ?></label>
                    </div>
                </div>
                <div class="form-group2 row">
                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">10. Alamat Peserta Didik</label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class=" control-label col-form-label">: <?= $siswa->jalan_ortu ?> / <?= $siswa->desa_ortu ?> / <?= $siswa->kec_ortu ?> / <?= $siswa->kab_ortu ?> / <?= $siswa->prov_ortu ?></label>
                    </div>
                </div>
                <div class="form-group2 row">
                    <label for="lname" class="col-sm-5 col-xs-5 col-md-5  control-label col-form-label">11. Asal Murid</label>
                </div>
                <div class="form-group2 row">
                    <div class="col-sm-12 col-xs-12" style="margin-left:15px ">
                        <label for="lname" class="col-sm-12 col-xs-12 col-md-12  control-label col-form-label">a. Masuk menjadi murid baru pada</label>
                        <div class="row" style="margin-left:10px ">
                            <label for="lname" style="margin-left:15px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">a.1 Tanggal Masuk </label>
                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                        </div>
                        <div class="row" style="margin-left:10px ">
                            <label for="lname" style="margin-left:15px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">a.2 Di Kelas </label>
                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12" style="margin-left:15px ">
                        <label for="lname" class="col-sm-5 col-xs-5 col-md-5  control-label col-form-label">b. Asal Sekolah </label>
                        <label for="lname" style="margin-left:21px " class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                    </div>
                </div>
                <div class="form-group2 row">
                    <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">12. Meninggalkan Sekolah</label>
                </div>
                <div class="form-group2 row">
                    <div class="col-sm-12 col-xs-12" style="margin-left:15px ">
                        <label for="lname" class="col-sm-12 col-xs-12 col-md-12  control-label col-form-label">a. Tamat Belajar</label>
                        <div class="row">
                            <label for="lname" style="margin-left:30px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">a.1 Tanggal / Tahun </label>
                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                        </div>
                        <div class="row">
                            <label for="lname" style="margin-left:30px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">a.2 Nomor STB </label>
                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                        </div>
                        <div class="row">
                            <label for="lname" style="margin-left:30px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">a.2 Melanjutkan Sekolah </label>
                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12" style="margin-left:15px ">
                        <label for="lname" class="col-sm-12 col-xs-12 col-md-12  control-label col-form-label">b. Pindah Sekolah</label>
                        <div class="row" style="margin-left:10px ">
                            <label for="lname" style="margin-left:15px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">b.1 Dari Tingkat </label>
                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                        </div>
                        <div class="row" style="margin-left:10px ">
                            <label for="lname" style="margin-left:15px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">b.2 ke Sekolah </label>
                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                        </div>
                        <div class="row" style="margin-left:10px ">
                            <label for="lname" style="margin-left:15px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">b.3 Tanggal </label>
                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12" style="margin-left:15px ">
                        <label for="lname" class="col-sm-12 col-xs-12 col-md-12  control-label col-form-label">c. Keluar Sekolah</label>
                        <div class="row" style="margin-left:10px ">
                            <label for="lname" style="margin-left:15px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">c.1 Tanggal </label>
                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                        </div>
                        <div class="row" style="margin-left:10px ">
                            <label for="lname" style="margin-left:15px " class="col-sm-5 col-xs-6 col-md-5  control-label col-form-label">c.2 Alasan </label>
                            <label for="lname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">: - </label>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <h5 class="">B. KETERANGAN ORANG TUA / WALI MURID</h5>
            <div class="" style="margin-left: 15px">
                <div class="form-group2 row">
                    <label for="fname" class="col-sm-6 col-xs-12  control-label col-form-label">1. NAMA ORANG TUA </label>
                </div>
                <div class="form-group2 row" style="margin-left: 15px">
                    <label for="fname" class="col-sm-6 col-xs-5 col-md-6   control-label col-form-label">a. Ayah</label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class="control-label col-form-label">: <?= $siswa->nama_ayah ?> </label>
                    </div>
                </div>
                <div class="form-group2 row" style="margin-left: 15px">
                    <label for="fname" class="col-sm-6 col-md-6 col-xs-4  control-label col-form-label">b. Ibu </label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class="control-label col-form-label">: <?= $siswa->nama_ibu ?> </label>
                    </div>
                </div>
                <div class="form-group2 row">
                    <label for="fname" class="col-sm-6  control-label col-form-label">2. Pekerjaan Orang Tua </label>
                </div>
                <div class="form-group2 row" style="margin-left: 15px">
                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">a. Ayah</label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class="control-label col-form-label">: <?= $siswa->pekerjaan_ayah ?> </label>
                    </div>
                </div>
                <div class="form-group2 row" style="margin-left: 15px">
                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">b. Ibu </label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class="control-label col-form-label">: <?= $siswa->pekerjaan_ibu ?> </label>
                    </div>
                </div>
                <div class="form-group2 row">
                    <label for="fname" class="col-sm-6  control-label col-form-label">3. Alamat Orang Tua </label>
                </div>
                <div class="form-group2 row" style="margin-left: 15px">
                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">a. Jalan</label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class="control-label col-form-label">: <?= $siswa->jalan_ortu ?> </label>
                    </div>
                </div>
                <div class="form-group2 row" style="margin-left: 15px">
                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">b. Desa / Kelurahan </label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class="control-label col-form-label">: <?= $siswa->desa_ortu ?> </label>
                    </div>
                </div>
                <div class="form-group2 row" style="margin-left: 15px">
                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">c. Kecamatan</label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class="control-label col-form-label">: <?= $siswa->kec_ortu ?> </label>
                    </div>
                </div>
                <div class="form-group2 row" style="margin-left: 15px">
                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">d. Kabupaten </label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class="control-label col-form-label">: <?= $siswa->kab_ortu ?> </label>
                    </div>
                </div>
                <div class="form-group2 row" style="margin-left: 15px">
                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">e. Provinsi </label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class="control-label col-form-label">: <?= $siswa->prov_ortu ?> </label>
                    </div>
                </div>
                <div class="form-group2 row">
                    <label for="fname" class="col-sm-6  control-label col-form-label">4. Wali Peserta Didik </label>
                </div>
                <div class="form-group2 row" style="margin-left: 15px">
                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">a. Nama</label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class="control-label col-form-label">: <?= $siswa->nama_wali ?> </label>
                    </div>
                </div>
                <div class="form-group2 row" style="margin-left: 15px">
                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">b. Pekerjaan </label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class="control-label col-form-label">: <?= $siswa->pekerjaan_wali ?> </label>
                    </div>
                </div>
                <div class="form-group2 row" style="margin-left: 15px">
                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6  control-label col-form-label">c. Alamat</label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class="control-label col-form-label">: <?= $siswa->alamat_wali ?> </label>
                    </div>
                </div>
                <div class="form-group2 row" style="margin-left: 15px">
                    <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label">d. Hubungan Keluarga </label>
                    <div class="col-sm-6 col-md-6 col-xs-4">
                        <label for="fname" class="control-label col-form-label">: <?= $siswa->hubungan_kel_wali ?> </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-1">

        </div>
        <div class="col-md-5">
            <div class="text-right">
                <img src="<?= base_url() ?>vendor/assets/images/profil.png" width=" 300px !important" height="400px">
            </div>
            <br>
            <div class="text-right">
                <img src="<?= base_url('vendor/assets/images/' . $siswa->foto_satu) ?>" width="300px !important" height="400px">
            </div>
            <div class="text-right" style="font-size:20px;">
                                            <label for="fname" class="col-sm-6 col-xs-6 col-md-6   control-label col-form-label"><b>Status</b></label>
                                            <label for="fname" class="control-label col-form-label"><b>: <?= $siswa->status ?> </b></label>
</div>
                                       
        </div><br>
        

    </div>
    <script>
        window.print();
    </script>

</body>

</html>