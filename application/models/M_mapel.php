<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mapel extends CI_Model
{

    private $_table = 'tb_mapel';

    public $id_kategori;
    public $id_hari;
    public $waktu_mulai;
    public $id_rombel;
    public $id_gtk;




    function __construct()
    {
        parent::__construct();
    }
    public function rules()
    {
        return [
            [
                'field' => 'id_siswa',
                'label' => 'Name',
                'rules' => 'required'
            ]
        ];
    }


    public function getMapel()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getMapelDay($angkatan)
    {
        $hari = "1";
        $this->db->select('tb_mapel.*,tb_hari.*,tb_kategori.*,tb_gtk.*');
        $this->db->from('tb_mapel');
        $this->db->join('tb_hari', 'tb_mapel.id_hari=tb_hari.id_hari');
        $this->db->join('tb_kategori', 'tb_mapel.id_kategori=tb_kategori.id_kategori');
        $this->db->join('tb_gtk', 'tb_mapel.id_gtk=tb_gtk.id_gtk');
        $this->db->join('tb_rombel', 'tb_mapel.id_rombel=tb_rombel.id_rombel');
        $this->db->order_by('waktu_mulai');
        $this->db->where('tb_mapel.id_hari', $hari);
        $this->db->where('tb_mapel.id_rombel', $angkatan);
        return $this->db->get()->result();
    }

    public function getMapelSelasa($angkatan)
    {
        $hari = "2";
        $this->db->select('tb_mapel.*,tb_hari.*,tb_kategori.*,tb_gtk.*');
        $this->db->from('tb_mapel');
        $this->db->join('tb_hari', 'tb_mapel.id_hari=tb_hari.id_hari');
        $this->db->join('tb_kategori', 'tb_mapel.id_kategori=tb_kategori.id_kategori');
        $this->db->join('tb_gtk', 'tb_mapel.id_gtk=tb_gtk.id_gtk');
        $this->db->join('tb_rombel', 'tb_mapel.id_rombel=tb_rombel.id_rombel');
        $this->db->order_by('waktu_mulai');
        $this->db->where('tb_mapel.id_hari', $hari);
        $this->db->where('tb_mapel.id_rombel', $angkatan);
        return $this->db->get()->result();
    }

    public function getMapelRabu($angkatan)
    {
        $hari = "3";
        $this->db->select('tb_mapel.*,tb_hari.*,tb_pelajaran.*,tb_gtk.*');

        $this->db->from('tb_mapel');
        $this->db->join('tb_hari', 'tb_mapel.id_hari=tb_hari.id_hari');
        $this->db->join('tb_pelajaran', 'tb_mapel.id_pelajaran=tb_pelajaran.id_pelajaran');
        $this->db->join('tb_gtk', 'tb_mapel.id_gtk=tb_gtk.id_gtk');
        $this->db->order_by('waktu_mulai');
        $this->db->join('tb_rombel', 'tb_mapel.id_rombel=tb_rombel.id_rombel');
        $this->db->where('tb_mapel.id_rombel', $angkatan);
        $this->db->where('tb_mapel.id_hari', $hari);
        return $this->db->get()->result();
    }

    public function getMapelKamis($angkatan)
    {
        $hari = "4";
        $this->db->select('tb_mapel.*,tb_hari.*,tb_pelajaran.*,tb_gtk.*');

        $this->db->from('tb_mapel');
        $this->db->join('tb_hari', 'tb_mapel.id_hari=tb_hari.id_hari');
        $this->db->join('tb_pelajaran', 'tb_mapel.id_pelajaran=tb_pelajaran.id_pelajaran');
        $this->db->join('tb_gtk', 'tb_mapel.id_gtk=tb_gtk.id_gtk');
        $this->db->order_by('waktu_mulai');
        $this->db->join('tb_rombel', 'tb_mapel.id_rombel=tb_rombel.id_rombel');
        $this->db->where('tb_mapel.id_rombel', $angkatan);
        $this->db->where('tb_mapel.id_hari', $hari);
        return $this->db->get()->result();
    }

   public function getMapelJumat($angkatan)
    {
        $hari = "5";
        $this->db->select('tb_mapel.*,tb_hari.*,tb_kategori.*,tb_gtk.*');
        $this->db->from('tb_mapel');
        $this->db->join('tb_hari', 'tb_mapel.id_hari=tb_hari.id_hari');
        $this->db->join('tb_kategori', 'tb_mapel.id_kategori=tb_kategori.id_kategori');
        $this->db->join('tb_gtk', 'tb_mapel.id_gtk=tb_gtk.id_gtk');
        $this->db->join('tb_rombel', 'tb_mapel.id_rombel=tb_rombel.id_rombel');
        $this->db->order_by('waktu_mulai');
        $this->db->where('tb_mapel.id_hari', $hari);
        $this->db->where('tb_mapel.id_rombel', $angkatan);
        return $this->db->get()->result();
    }


    public function getMapelSabtu($angkatan)
    {
        $hari = "6";
        $this->db->select('tb_mapel.*,tb_hari.*,tb_pelajaran.*,tb_gtk.*');

        $this->db->from('tb_mapel');
        $this->db->join('tb_hari', 'tb_mapel.id_hari=tb_hari.id_hari');
        $this->db->join('tb_pelajaran', 'tb_mapel.id_pelajaran=tb_pelajaran.id_pelajaran');
        $this->db->join('tb_gtk', 'tb_mapel.id_gtk=tb_gtk.id_gtk');
        $this->db->order_by('waktu_mulai');
        $this->db->join('tb_rombel', 'tb_mapel.id_rombel=tb_rombel.id_rombel');
        $this->db->where('tb_mapel.id_rombel', $angkatan);
        $this->db->where('tb_mapel.id_hari', $hari);
        return $this->db->get()->result();
    }


    public function getAbsensiSiswa()
    {
        $tgl = date('d-m-Y');
        $this->db->select('tb_siswa.*,tb_absensi_siswa.*');
        $this->db->from('tb_absensi_siswa');
        $this->db->join('tb_siswa', 'tb_absensi_siswa.id_siswa=tb_siswa.id_siswa');
        $this->db->where('tanggal', $tgl);
        return $this->db->get();
    }

    public function addMapel()
    {
        $post = $this->input->post();
        $this->id_kategori = $post['id_kategori'];
        $this->id_hari = $post['id_hari'];
        $this->waktu_mulai = $post['waktu_mulai'];
        $this->id_rombel = $post['id_rombel'];
        $this->id_gtk = $post['id_gtk'];

        return $this->db->insert($this->_table, $this);
    }

    public function addPelajaran($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function jadwalAjar($id_gtk, $hari)
    {
        $this->db->where('nama_hari', $hari);
        $query = $this->db->get('tb_hari');
        foreach ($query->result() as $row) {
            $hri =  $row->id_hari;
        }


        $this->db->select('tb_mapel.*, tb_gtk.*, tb_rombel.*, tb_kategori.*');
        $this->db->from('tb_mapel');
        $this->db->join('users', 'tb_mapel.id_gtk=users.id_gtk');
        $this->db->join('tb_gtk', 'tb_mapel.id_gtk=tb_gtk.id_gtk');
        $this->db->join('tb_hari', 'tb_mapel.id_hari=tb_hari.id_hari');
        $this->db->join('tb_kategori', 'tb_mapel.id_kategori=tb_kategori.id_kategori');
        $this->db->join('tb_rombel', 'tb_mapel.id_rombel=tb_rombel.id_rombel');
        $this->db->where('tb_mapel.id_gtk', $id_gtk);
        $this->db->where('tb_hari.id_hari', $hri);
        
        return $this->db->get()->result();
    }



    public function updateSiswa($id_siswa)
    {
        $this->db->select('*');
        $this->db->from('tb_relasi_siswa');
        $this->db->join('tb_siswa', 'tb_siswa.id_siswa =tb_relasi_siswa.id_siswa');
        $this->db->join('tb_wali', 'tb_wali.id_wali=tb_relasi_siswa.id_wali');
        $this->db->join('tb_alamat_wali', 'tb_alamat_wali.id_alamat_wali=tb_relasi_siswa.id_alamat_wali');
        $this->db->join('tb_alamat_ortu', 'tb_alamat_ortu.id_alamat_ortu=tb_relasi_siswa.id_alamat_ortu');
        $this->db->join('tb_ayah', 'tb_ayah.id_ayah=tb_relasi_siswa.id_ayah');
        $this->db->join('tb_ibu', 'tb_ibu.id_ibu=tb_relasi_siswa.id_ibu');
        $this->db->where('tb_siswa.id_siswa', $id_siswa);
        $query = $this->db->get()->row();
        return $query;
    }



    private function _uploadImage()
    {
        $config['upload_path']          =  './vendor/assets/images/';
        $config['allowed_types']        = 'gif|jpg|png|JPG';
        $config['max_size']             = 9048;
        $config['overwrite']            = true;
        $config['file_name']            = $_FILES['foto_satu']['name'];
        // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_satu')) {
            return $this->upload->data("file_name");
        }

        return "camera.jpg";
    }
}
