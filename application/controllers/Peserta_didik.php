<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta_didik extends CI_Controller
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

        //
        $this->load->library('form_validation');
        $this->load->library('ajax_pagination');
        // Per page limit 
        $this->perPage = 4;
        //
        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['siswa'] = $this->M_peserta_didik->getAllSiswa();
        $this->load->view('peserta_didik/peserta_didik', $data);
    }

    /*public function filterSiswa()
    {
        $key   = $_POST['key'];
        $kelas = $_GET['kelas'];
        if ($kelas == 0) {
            if ($key == null) {
                $data = $this->M_peserta_didik->getAllSiswa();
            } else {
                $data = $this->M_peserta_didik->getSearch($key);
            }
        } else {
            $data = $this->db->get_where('tb_siswa', ['id_kelas' => $kelas])->result();
        }
        if (!empty($data)) {
            $no = 1;
            foreach ($data as $row) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->nomor_induk ?></td>
                    <td><?= $row->nomor_induk_sn ?></td>
                    <td><?= $row->nama_siswa ?></td>
                    <td><?= $row->tempat_lahir_siswa ?>,<?= $row->tanggal_lahir_siswa ?></td>
                    <td><?= $row->jenis_kelamin_siswa ?></td>
                    <td><?= $row->agama_siswa ?></td>
                    <td><?= $row->nomor_induk ?></td>
                    <td><a type="button" href="<?php echo base_url('peserta_didik/detailPeserta/' . $row->id_siswa) ?>" class=" btn btn-info" style="border-radius: 10px;"> Detail</a></td>
                </tr>
            <?php endforeach ?> <?php
                            } else {
                                ?>
            <tr>
                <td align="center" colspan="9">Tidak ada peserta didik</td>
            </tr>
<?php
                            }
                        }*/

    public function tambahPeserta()
    {
        $this->load->view('peserta_didik/tambah_peserta_didik');
    }

    public function tambahPeserta2()
    {

        $this->load->view('peserta_didik/tambah_peserta_didik2');
    }

    public function mutasiKeluar($id_siswa = null)
    {
        $siswa = $this->M_relasi_siswa;
        $data["siswa"] = $siswa->getDetailSiswa($id_siswa);
        $this->load->view('peserta_didik/mutasi_keluar', $data);
    }

    public function keluarSekolah()
    {
        $this->M_mutasi->keluarSekolah();
        redirect('peserta_didik/index');
    }

    public function cetakDetail($id_siswa = null)

    {
        $siswa = $this->M_relasi_siswa;
        $data["siswa"] = $siswa->getDetailSiswa($id_siswa);
        $this->load->view('peserta_didik/cetak_peserta_didik', $data);
    }

    public function detailPeserta($id_siswa = null)
    {
        $siswa = $this->M_relasi_siswa;
        $data["siswa"] = $siswa->getDetailSiswa($id_siswa);

        if (is_null($id_siswa)) {
            redirect(base_url('peserta_didik'));
        } else {
            $this->load->view('peserta_didik/detail_peserta_didik', $data);
        }
    }

    public function editSiswa($id_siswa = null)
    {
        if ($this->input->post('submit')) {
            $this->M_Gtk->updateGtk($id_siswa);
            redirect('peserta_didik/index');
        }

        if (is_null($id_siswa)) {
            redirect(base_url('peserta_didik'));
        } else {
            $data['siswa'] = $this->M_peserta_didik->updateSiswa($id_siswa);
            $this->load->view('peserta_didik/edit_peserta_didik', $data);
        }
    }



    public function mutasiKeluarPeserta()
    {

        $this->load->view('peserta_didik/mutasi_keluar_pd');
    }

    public function rombonganBelajar()
    {
        $data['rombel'] = $this->M_rombel->getAllRombel();
        $this->load->view('peserta_didik/rombongan_belajar', $data);
    }

    public function simpanSiswa()
    {
        $this->M_peserta_didik->addSiswa();
        $this->M_ayah->addAyah();
        $this->M_ibu->addIbu();
        $this->M_alamat_ortu->addAlamatOrtu();
        $this->M_alamat_wali->addAlamatWali();
        $this->M_wali->addWali();
        $this->M_relasi_siswa->addRelasi();
        redirect('peserta_didik/index');
    }
    public function tambahPD()
    {

        $this->load->view('peserta_didik/tambah_pd');
    }
}
