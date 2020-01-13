<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Excel_import2 extends CI_Controller
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
                    $nama_ayah = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
                    $pekerjaan_ayah = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
                    $id_ibu = md5(uniqid(rand(), true));
                    $nama_ibu = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $pekerjaan_ibu = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
                    $id_alamat_ortu = md5(uniqid(rand(), true));
                    $jalan_ortu = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
                    $desa_ortu = $worksheet->getCellByColumnAndRow(20, $row)->getValue();
                    $kec_ortu = $worksheet->getCellByColumnAndRow(21, $row)->getValue();
                    $kab_ortu = $worksheet->getCellByColumnAndRow(22, $row)->getValue();
                    $prov_ortu = $worksheet->getCellByColumnAndRow(23, $row)->getValue();
                    $id_wali = md5(uniqid(rand(), true));
                    $nama_wali = $worksheet->getCellByColumnAndRow(24, $row)->getValue();
                    $pekerjaan_wali = $worksheet->getCellByColumnAndRow(25, $row)->getValue();
                    $alamat_wali = $worksheet->getCellByColumnAndRow(26, $row)->getValue();
                    $hubungan_kel_wali = $worksheet->getCellByColumnAndRow(27, $row)->getValue();
                    $id_alamat_wali = md5(uniqid(rand(), true));
                    $jalan_wali = $worksheet->getCellByColumnAndRow(28, $row)->getValue();
                    $desa_wali = $worksheet->getCellByColumnAndRow(29, $row)->getValue();
                    $kec_wali = $worksheet->getCellByColumnAndRow(30, $row)->getValue();
                    $kab_wali = $worksheet->getCellByColumnAndRow(31, $row)->getValue();
                    $prov_wali = $worksheet->getCellByColumnAndRow(32, $row)->getValue();



                    $datasiswa[] = array(
                        'id_siswa'        =>    $id_siswa,
                        'nomor_induk'            =>    $nomor_induk,
                        'nomor_induk_sn'                =>    $nomor_induk_sn,
                        'nama_siswa'        =>    $nama_siswa,
                        'tempat_lahir_siswa'            =>    $tempat_lahir_siswa,
                        'tanggal_lahir_siswa'            =>    $tanggal_lahir_siswa,
                        'jenis_kelamin_siswa'            =>    $jenis_kelamin_siswa,
                        'agama_siswa'            =>    $agama_siswa,
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

    public function export2()
    {

        $data['siswa'] = $this->M_relasi_siswa->getexportSiswa()->result();


        // require(APPPATH. 'libraries/PHPExcel.php');
        require(APPPATH . 'libraries/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("Bikea");
        $object->getProperties()->setLastModifiedBy("SDN BADEAN 1 BONDOWOSO");
        $object->getProperties()->setTitle("Daftar Siswa");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'DAFTAR GURU DAN TENAGA KERJA');
        $object->getActiveSheet()->setCellValue('A2', 'No');
        $object->getActiveSheet()->setCellValue('B2', 'NIPD');
        $object->getActiveSheet()->setCellValue('C2', 'NISN');
        $object->getActiveSheet()->setCellValue('D2', 'Nama');
        $object->getActiveSheet()->setCellValue('E2', 'Tempat Lahir');
        $object->getActiveSheet()->setCellValue('F2', 'Tanggal Lahir');
        $object->getActiveSheet()->setCellValue('G2', 'JK');
        $object->getActiveSheet()->setCellValue('H2', 'Agama');
        $object->getActiveSheet()->setCellValue('I2', 'Kewarganegaraan');
        $object->getActiveSheet()->setCellValue('J2', 'Bahasa sehari-hari');
        $object->getActiveSheet()->setCellValue('k2', 'Golongan Darah');
        $object->getActiveSheet()->setCellValue('L2', 'Kelas');
        $object->getActiveSheet()->setCellValue('M2', 'Status');
        $object->getActiveSheet()->setCellValue('N2', 'Nama Ayah');
        $object->getActiveSheet()->setCellValue('O2', 'Pekerjaan Ayah');
        $object->getActiveSheet()->setCellValue('P2', 'Nama Ibu');
        $object->getActiveSheet()->setCellValue('Q2', 'Pekerjaan Ibu');
        $object->getActiveSheet()->setCellValue('R2', 'Jalan');
        $object->getActiveSheet()->setCellValue('S2', 'Desa');
        $object->getActiveSheet()->setCellValue('T2', 'Kecamatan');
        $object->getActiveSheet()->setCellValue('U2', 'Kabupaten');
        $object->getActiveSheet()->setCellValue('V2', 'Provinsi');
        $object->getActiveSheet()->setCellValue('W2', 'Nama Wali');
        $object->getActiveSheet()->setCellValue('X2', 'Pekerjaan Wali');
        $object->getActiveSheet()->setCellValue('Y2', 'Jalan');
        $object->getActiveSheet()->setCellValue('Z2', 'Desa');
        $object->getActiveSheet()->setCellValue('AA2', 'Kecamatan');
        $object->getActiveSheet()->setCellValue('AB2', 'Kabupaten');
        $object->getActiveSheet()->setCellValue('AC2', 'Provinsi');

        $baris = 3;
        $no = 1;

        foreach ($data['siswa'] as $siswa) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $siswa->nomor_induk);
            $object->getActiveSheet()->setCellValue('C' . $baris, $siswa->nomor_induk_sn);
            $object->getActiveSheet()->setCellValue('D' . $baris, $siswa->tempat_lahir_siswa);
            $object->getActiveSheet()->setCellValue('E' . $baris, $siswa->tanggal_lahir_siswa);
            $object->getActiveSheet()->setCellValue('F' . $baris, $siswa->jenis_kelamin_siswa);
            $object->getActiveSheet()->setCellValue('G' . $baris, $siswa->agama_siswa);
            $object->getActiveSheet()->setCellValue('H' . $baris, $siswa->kewarganegaraan_siswa);
            $object->getActiveSheet()->setCellValue('I' . $baris, $siswa->bahasa_siswa);
            $object->getActiveSheet()->setCellValue('J' . $baris, $siswa->golongan_siswa);
            $object->getActiveSheet()->setCellValue('K' . $baris, $siswa->id_kelas);
            $object->getActiveSheet()->setCellValue('L' . $baris, $siswa->status);
            $object->getActiveSheet()->setCellValue('M' . $baris, $siswa->nama_ayah);
            $object->getActiveSheet()->setCellValue('N' . $baris, $siswa->pekerjaan_ayah);
            $object->getActiveSheet()->setCellValue('O' . $baris, $siswa->nama_ibu);
            $object->getActiveSheet()->setCellValue('P' . $baris, $siswa->pekerjaan_ibu);
            $object->getActiveSheet()->setCellValue('Q' . $baris, $siswa->jalan_ortu);
            $object->getActiveSheet()->setCellValue('R' . $baris, $siswa->desa_ortu);
            $object->getActiveSheet()->setCellValue('S' . $baris, $siswa->kec_ortu);
            $object->getActiveSheet()->setCellValue('T' . $baris, $siswa->kab_ortu);
            $object->getActiveSheet()->setCellValue('U' . $baris, $siswa->prov_ortu);
            $object->getActiveSheet()->setCellValue('V' . $baris, $siswa->nama_wali);
            $object->getActiveSheet()->setCellValue('W' . $baris, $siswa->pekerjaan_wali);
            $object->getActiveSheet()->setCellValue('X' . $baris, $siswa->hubungan_kel_wali);
            $object->getActiveSheet()->setCellValue('Y' . $baris, $siswa->jalan_wali);
            $object->getActiveSheet()->setCellValue('Z' . $baris, $siswa->desa_wali);
            $object->getActiveSheet()->setCellValue('AA' . $baris, $siswa->kec_wali);
            $object->getActiveSheet()->setCellValue('AB' . $baris, $siswa->kab_wali);
            $object->getActiveSheet()->setCellValue('AC' . $baris, $siswa->prov_wali);


            $baris++;
        }

        $filename = "Data Siswa" . '.xlsx';
        $object->getActiveSheet()->setTitle("Data Gtk");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }
}
