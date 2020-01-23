<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_device extends CI_Model
{

    private $_table = 'tb_device';



    public $nisn;
    public $password;
    public $token;



    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'nisn',
                'label' => 'Name',
                'rules' => 'required'
            ]
        ];
    }

    function get_pesan_by_id($nisn,$password)
	{
        $data = $this->db->query("SELECT tb_device.*, tb_siswa.nama_siswa, tb_absensi.keterangan, tb_absensi.tanggal_absensi, tb_mapel.waktu_mulai, tb_mapel.waktu_selesai, tb_pelajaran.nama_pelajaran, tb_rombel.nama_rombel, tb_gtk.nama_gtk FROM tb_device JOIN tb_siswa ON tb_siswa.nomor_induk_sn=tb_device.nisn JOIN tb_absensi ON tb_absensi.id_siswa=tb_siswa.id_siswa JOIN tb_mapel ON tb_mapel.id_jadwal_mapel=tb_absensi.id_mapel JOIN tb_pelajaran ON tb_pelajaran.id_pelajaran=tb_absensi.id_pelajaran JOIN tb_rombel ON tb_rombel.id_rombel=tb_absensi.id_rombel JOIN tb_gtk ON tb_gtk.id_gtk=tb_absensi.id_gtk WHERE tb_device.nisn='$nisn' AND tb_device.password='$password'")->row_array();
        // $this->db->select('tb_device.*, tb_siswa.nama_siswa, tb_absensi.keterangan, tb_absensi.tanggal_absensi, tb_mapel.waktu_mulai, tb_mapel.waktu_selesai, tb_pelajaran.nama_pelajaran, tb_rombel.nama_rombel, tb_gtk.nama_gtk');
        // $this->db->from('tb_device');
        // $this->db->join('tb_siswa', 'tb_siswa.nomor_induk_sn=tb_device.nisn');
        // $this->db->join('tb_absensi', 'tb_absensi.id_siswa=tb_siswa.id_siswa');
        // $this->db->join('tb_mapel', 'tb_mapel.id_jadwal_mapel=tb_absensi.id_mapel ');
        // $this->db->join('tb_pelajaran', 'tb_pelajaran.id_pelajaran=tb_absensi.id_pelajaran');
        // $this->db->join('tb_rombel', 'tb_rombel.id_rombel=tb_absensi.id_rombel');
        // $this->db->join('tb_gtk', 'tb_gtk.id_gtk=tb_absensi.id_gtk');
        // $this->db->where('tb_device.nisn', $nisn);
        // $this->db->where('tb_device.password', $password);
        // $query = $this->db->get()->row_array;
		return $data;
	}
    public function addDevice()
    {
        $post = $this->input->post();
        $this->nisn = $post['nomor_induk_sn'];
        $this->password = $post['password'];
        $this->token = $post['token'];
        $this->db->insert($this->_table, $this);
    }
}
