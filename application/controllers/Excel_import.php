<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel_import extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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
		<h3 align="center">Total Data - '.$data->num_rows().'</h3>
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
		foreach($data->result() as $row)
		{
			$output .= '
			<tr>
				<td>'.$row->id_gtk.'</td>
				<td>'.$row->Nama.'</td>
				<td>'.$row->NUPTK.'</td>
				<td>'.$row->JK.'</td>
				<td>'.$row->Tempat_Lahir.'</td>
				<td>'.$row->Tanggal_lahir.'</td>
				<td>'.$row->NIP.'</td>
				<td>'.$row->Status_Kepegawaian.'</td>
				<td>'.$row->Jenis_PTK.'</td>
				<td>'.$row->Agama.'</td>
			</tr>
			';
		}
		$output .= '</table>';
		echo $output;
	}

	function import()
	{
		if(isset($_FILES["file"]["name"]))
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++)
				{
					$id_gtk = md5(uniqid(rand(), true));
					$nik = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$nip = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$nama = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$Tempat_Lahir = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$Tanggal_lahir = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$jk = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$pajago = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$gelar = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
					$posisi = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
					$agama = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
					$jalan = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
					$desa = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
					$kecamatan = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
					$kabupaten = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
					$provinsi = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
					$tgl_masuk = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
					$tgl_keluar = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
					$foto_gtk = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
					$data[] = array(
						'id_gtk'		=>	$id_gtk,
						'nik_gtk'			=>	$nik,
						'nip_gtk'				=>	$nip,
						'nama_gtk'		=>	$nama,
						'tempat_lahir_gtk'			=>	$Tempat_Lahir,
						'tanggal_lahir_gtk'			=>	$Tanggal_lahir,
						'jenis_kelamin_gtk'			=>	$jk,
						'pajago_gtk'			=>	$pajago,
						'gelar_gtk'			=>	$gelar,
						'posisi_gtk'			=>	$posisi,
						'agama_gtk'			=>	$agama,
						'jalan_gtk'			=>	$jalan,
						'desa_gtk'			=>	$desa,
						'kec_gtk'			=>	$kecamatan,
						'kab_gtk'			=>	$kabupaten,
						'prov_gtk'			=>	$provinsi,
						'tgl_masuk_gtk'			=>	$tgl_masuk,
						'tgl_keluar_gtk'			=>	$tgl_keluar,
						'foto_gtk'			=>	$foto_gtk,
					);
				}
			}
			$this->excel_import_model->insert($data);
			redirect('gtk');
		}	
	}

	public function export(){

		$data['gtk'] = $this->excel_import_model->gtk('tb_gtk')->result();


		// require(APPPATH. 'libraries/PHPExcel.php');
		require(APPPATH. 'libraries/PHPExcel/Writer/Excel2007.php');

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
		$no=1;
		
		foreach($data['gtk'] as $gtk) {
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $gtk->nik_gtk);
			$object->getActiveSheet()->setCellValue('C'.$baris, $gtk->nip_gtk);
			$object->getActiveSheet()->setCellValue('D'.$baris, $gtk->nama_gtk);
			$object->getActiveSheet()->setCellValue('E'.$baris, $gtk->tempat_lahir_gtk);
			$object->getActiveSheet()->setCellValue('F'.$baris, $gtk->tanggal_lahir_gtk);
			$object->getActiveSheet()->setCellValue('G'.$baris, $gtk->jenis_kelamin_gtk);
			$object->getActiveSheet()->setCellValue('H'.$baris, $gtk->pajago_gtk);
			$object->getActiveSheet()->setCellValue('I'.$baris, $gtk->gelar_gtk);
			$object->getActiveSheet()->setCellValue('J'.$baris, $gtk->posisi_gtk);
			$object->getActiveSheet()->setCellValue('K'.$baris, $gtk->agama_gtk);
			$object->getActiveSheet()->setCellValue('L'.$baris, $gtk->jalan_gtk);
			$object->getActiveSheet()->setCellValue('M'.$baris, $gtk->desa_gtk);
			$object->getActiveSheet()->setCellValue('N'.$baris, $gtk->kec_gtk);
			$object->getActiveSheet()->setCellValue('O'.$baris, $gtk->kab_gtk);
			$object->getActiveSheet()->setCellValue('P'.$baris, $gtk->prov_gtk);
			$object->getActiveSheet()->setCellValue('Q'.$baris, $gtk->tgl_masuk_gtk);
			$object->getActiveSheet()->setCellValue('R'.$baris, $gtk->tgl_keluar_gtk);
			$object->getActiveSheet()->setCellValue('S'.$baris, $gtk->foto_gtk);
			

			$baris++;
		}

		$filename = "Data GTK".'.xlsx';
		$object->getActiveSheet()->setTitle("Data Gtk");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer =PHPExcel_IOFactory::createWriter($object, 'Excel2007');
		$writer->save('php://output');

		exit;

	}
}
