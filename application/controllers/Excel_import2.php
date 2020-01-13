<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Excel_import extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load model 
        $this->load->model('M_peserta_didik');
        $this->load->model('M_ayah');
        $this->load->model('M_mutasi');
        $this->load->model('M_ibu');
        $this->load->model('M_alamat_ortu');
        $this->load->model('M_alamat_wali');
        $this->load->model('M_wali');
        $this->load->model('M_rombel');
        $this->load->model('M_relasi_siswa');
        $this->load->model('excel_import_model');
        $this->load->library('excel');
    }

    function index()
    {
        $this->load->view('excel_import');
    }

    function fetch()
    {
        $data = $this->excel_import_model->select();
        $output = '
		<h3 align="center">Total Data - ' . $data->num_rows() . '</h3>
		<table class="table table-striped table-bordered">
			<tr>
				<th>Id_Gtk</th>
				<th>Nama</th>
				<th>NUPTK</th>
				<th>JK</th>
				<th>Tempat_Lahir</th>
				<th>Tanggal_Lahir</th>
				<th>NIP</th>
				<th>Status_Kepegawaian</th>
				<th>Jenis_PTK</th>
				<th>Agama</th>
			</tr>
		';
        foreach ($data->result() as $row) {
            $output .= '
			<tr>
				<td>' . $row->id_gtk . '</td>
				<td>' . $row->Nama . '</td>
				<td>' . $row->NUPTK . '</td>
				<td>' . $row->JK . '</td>
				<td>' . $row->Tempat_Lahir . '</td>
				<td>' . $row->Tanggal_lahir . '</td>
				<td>' . $row->NIP . '</td>
				<td>' . $row->Status_Kepegawaian . '</td>
				<td>' . $row->Jenis_PTK . '</td>
				<td>' . $row->Agama . '</td>
			</tr>
			';
        }
        $output .= '</table>';
        echo $output;
    }

    function import()
    {
        if (isset($_FILES["file"]["name"])) {
            $path = $_FILES["file"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                for ($row = 2; $row <= $highestRow; $row++) {
                    $id_siswa = md5(uniqid(rand(), true));
                    $nomor_induk = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $nomor_induk_sn = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $nama_siswa = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $tempat_lahir_siswa = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $tanggal_lahir_siswa = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $jenis_kelamin_siswa = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $agama_siswa = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $kewarganegaraan_siswa = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $bahasa_siswa = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $golongan_siswa = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    $alamat_siswa = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
                    $foto_satu = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
                    $foto_empat = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
                    $id_kelas = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
                    $status = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
                    $id_ayah = md5(uniqid(rand(), true));
                    $nama_ayah = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
                    $pekerjaan_ayah = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
                    $id_ibu = md5(uniqid(rand(), true));
                    $nama_ibu = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $pekerjaan_ibu = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $id_alamat_ortu = md5(uniqid(rand(), true));
                    $jalan_ortu = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $desa_ortu = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $kec_ortu = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $kab_ortu = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $prov_ortu = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $id_alamat_wali = md5(uniqid(rand(), true));
                    $jalan_wali = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $desa_wali = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $kec_wali = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $kab_wali = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $prov_wali = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $id_wali = md5(uniqid(rand(), true));
                    $nama_wali = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $pekerjaan_wali = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $alamat_wali = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $hubungan_kel_wali = $worksheet->getCellByColumnAndRow(17, $row)->getValue();


                    $datasiswa[] = array(
                        'id_siswa'        =>    $id_siswa,
                        'nomor_induk'            =>    $nomor_induk,
                        'nomor_induk_sn'                =>    $nomor_induk_sn,
                        'nama_siswa'        =>    $nama_siswa,
                        'tempat_lahir_siswa'            =>    $tempat_lahir_siswa,
                        'tanggal_lahir_siswa'            =>    $tanggal_lahir_siswa,
                        'jenis_kelamin_siswa'            =>    $jenis_kelamin_siswa,
                        'agama_gtk'            =>    $agama_siswa,
                        'kewarganegaraan_siswa'            =>    $kewarganegaraan_siswa,
                        'bahasa_siswa'            =>    $bahasa_siswa,
                        'golongan_siswa'            =>    $golongan_siswa,
                        'alamat_siswa'            =>    $alamat_siswa,
                        'foto_satu'            =>    $foto_satu,
                        'foto_empat'            =>    $foto_empat,
                        'id_kelas'            =>    $id_kelas,
                        'status'            =>    $status,

                    );
                    $dataayah[] = array(
                        'id_ayah'        =>    $id_ayah,
                        'nama_ayah'        =>    $nama_ayah,
                        'pekerjaan_ayah'        =>    $pekerjaan_ayah,


                    );
                    $dataibu[] = array(
                        'id_ibu'        =>    $id_ibu,
                        'nama_ibu'        =>    $nama_ibu,
                        'pekerjaan_ibu'        =>    $pekerjaan_ibu,

                    );
                    $dataalamatortu[] = array(
                        'id_alamat_ortu'        =>    $id_alamat_ortu,
                        'jalan_ortu'            =>    $jalan_ortu,
                        'desa_ortu'            =>    $desa_ortu,
                        'kec_ortu'            =>    $kec_ortu,
                        'kab_ortu'            =>    $kab_ortu,
                        'prov_ortu'            =>    $prov_ortu,

                    );
                    $dataalamatwali[] = array(
                        'id_alamat_wali'        =>    $id_alamat_wali,
                        'jalan_wali'            =>    $jalan_wali,
                        'desa_wali'            =>    $desa_wali,
                        'kec_wali'            =>    $kec_wali,
                        'kab_wali'            =>    $kab_wali,
                        'prov_wali'            =>    $prov_wali,

                    );
                    $datawali[] = array(
                        'id_wali'        =>    $id_wali,
                        'nama_wali'        =>    $nama_wali,
                        'pekerjaan_wali'        =>    $pekerjaan_wali,
                        'alamat_wali'        =>    $desa_wali,
                        'hubungan_kel_wali'        =>    $hubungan_kel_wali,

                    );
                    $datarelasisiswa[] = array(
                        'id_siswa'        =>    $id_siswa,
                        'id_ayah'        =>    $id_ayah,
                        'id_ibu'        =>    $id_ibu,
                        'id_alamat_ortu'        =>    $id_alamat_ortu,
                        'id_wali'        =>    $id_wali,
                        'id_alamat_wali'        =>    $id_alamat_wali,

                    );
                }
            }
            $this->excel_import_model->insertsiswa($datasiswa);
            $this->excel_import_model->insertayah($dataayah);
            $this->excel_import_model->insertibu($dataibu);
            $this->excel_import_model->insertalamatortu($dataalamatortu);
            $this->excel_import_model->insertalamatwali($dataalamatwali);
            $this->excel_import_model->insertwali($datawali);
            $this->excel_import_model->insertrelasisiswa($datarelasisiswa);
            redirect('pesertadidik');
        }
    }

    public function export()
    {

        $data['siswa'] = $this->M_peserta_didik->getAllSiswa();


        // require(APPPATH. 'libraries/PHPExcel.php');
        require(APPPATH . 'libraries/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("Bikea");
        $object->getProperties()->setLastModifiedBy("SDN BADEAN 1 BONDOWOSO");
        $object->getProperties()->setTitle("Daftar GTK");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'DAFTAR GURU DAN TENAGA KERJA');
        $object->getActiveSheet()->setCellValue('A2', 'No');
        $object->getActiveSheet()->setCellValue('B2', 'NIK');
        $object->getActiveSheet()->setCellValue('C2', 'NIP');
        $object->getActiveSheet()->setCellValue('D2', 'Nama');
        $object->getActiveSheet()->setCellValue('E2', 'Tempat Lahir');
        $object->getActiveSheet()->setCellValue('F2', 'Tanggal Lahir');
        $object->getActiveSheet()->setCellValue('G2', 'JK');
        $object->getActiveSheet()->setCellValue('H2', 'Pangkat Golongan');
        $object->getActiveSheet()->setCellValue('I2', 'Gelar');
        $object->getActiveSheet()->setCellValue('J2', 'Jenis PTK');
        $object->getActiveSheet()->setCellValue('k2', 'Agama');
        $object->getActiveSheet()->setCellValue('L2', 'Jalan');
        $object->getActiveSheet()->setCellValue('M2', 'Desa');
        $object->getActiveSheet()->setCellValue('N2', 'Kecamatan');
        $object->getActiveSheet()->setCellValue('O2', 'Kabupaten');
        $object->getActiveSheet()->setCellValue('P2', 'Provinsi');
        $object->getActiveSheet()->setCellValue('Q2', 'Tanggal Masuk');
        $object->getActiveSheet()->setCellValue('R2', 'Tanggal Keluar');
        $object->getActiveSheet()->setCellValue('S2', 'Foto GTK');

        $baris = 3;
        $no = 1;

        foreach ($data['siswa'] as $gtk) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $gtk->nik_gtk);
            $object->getActiveSheet()->setCellValue('C' . $baris, $gtk->nip_gtk);
            $object->getActiveSheet()->setCellValue('D' . $baris, $gtk->nama_gtk);
            $object->getActiveSheet()->setCellValue('E' . $baris, $gtk->tempat_lahir_gtk);
            $object->getActiveSheet()->setCellValue('F' . $baris, $gtk->tanggal_lahir_gtk);
            $object->getActiveSheet()->setCellValue('G' . $baris, $gtk->jenis_kelamin_gtk);
            $object->getActiveSheet()->setCellValue('H' . $baris, $gtk->pajago_gtk);
            $object->getActiveSheet()->setCellValue('I' . $baris, $gtk->gelar_gtk);
            $object->getActiveSheet()->setCellValue('J' . $baris, $gtk->posisi_gtk);
            $object->getActiveSheet()->setCellValue('K' . $baris, $gtk->agama_gtk);
            $object->getActiveSheet()->setCellValue('L' . $baris, $gtk->jalan_gtk);
            $object->getActiveSheet()->setCellValue('M' . $baris, $gtk->desa_gtk);
            $object->getActiveSheet()->setCellValue('N' . $baris, $gtk->kec_gtk);
            $object->getActiveSheet()->setCellValue('O' . $baris, $gtk->kab_gtk);
            $object->getActiveSheet()->setCellValue('P' . $baris, $gtk->prov_gtk);
            $object->getActiveSheet()->setCellValue('Q' . $baris, $gtk->tgl_masuk_gtk);
            $object->getActiveSheet()->setCellValue('R' . $baris, $gtk->tgl_keluar_gtk);
            $object->getActiveSheet()->setCellValue('S' . $baris, $gtk->foto_gtk);


            $baris++;
        }

        $filename = "Data GTK" . '.xlsx';
        $object->getActiveSheet()->setTitle("Data Gtk");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }
}
