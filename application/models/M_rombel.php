<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_rombel extends CI_Model
{

    private $_table = 'tb_rombel';

    public $id_rombel;
    public $id_kelas;
    public $nama_rombel;
    public $id_gtk;
    public $tahun_ajaran;

    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'nama_rombel',
                'label' => 'Name',
                'rules' => 'required'
            ]
        ];
    }

    public function getAllRombel()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_rombel.id_kelas');
        $this->db->join('tb_gtk', 'tb_gtk.id_gtk = tb_rombel.id_gtk');
        $query = $this->db->get();
        return $query->result();
    }

    public function getKelas()
    {
        $this->db->select('*');
        $this->db->from('tb_kelas');
        $query = $this->db->get();
        return $query->result();
    }

    public function getWali()
    {
        $this->db->select('*');
        $this->db->from('tb_gtk');
        $query = $this->db->get();
        return $query->result();
    }

    public function getDetailRombel($id_rombel)
    {
        $this->db->select('*');
        $this->db->from('tb_relasi_rombel_siswa');
        $this->db->join('tb_rombel', 'tb_rombel.id_rombel = tb_relasi_rombel_siswa.id_rombel');
        $this->db->join('tb_siswa', 'tb_siswa.id_siswa = tb_relasi_rombel_siswa.id_siswa');
        $array = array('tb_relasi_rombel_siswa.id_rombel' => $id_rombel, 'tb_siswa.status' => 'Aktif');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function getCount($id_rombel)
    {
        $this->db->select('*');
        $this->db->from("tb_relasi_rombel_siswa");
        $this->db->join('tb_rombel', 'tb_rombel.id_rombel = tb_relasi_rombel_siswa.id_rombel');
        $this->db->join('tb_siswa', 'tb_siswa.id_siswa = tb_relasi_rombel_siswa.id_siswa');
        $array = array('tb_relasi_rombel_siswa.id_rombel' => $id_rombel, 'tb_siswa.status' => 'Aktif');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function getRombel($id_rombel)
    {
        $this->db->select('*');
        $this->db->from("tb_rombel");
        $this->db->join('tb_gtk', 'tb_gtk.id_gtk = tb_rombel.id_gtk');
        $this->db->where('tb_rombel.id_rombel', $id_rombel);
        $query = $this->db->get();
        return $query->result();
    }

    public function getRombelSelect($id_rombel)
    {
        $this->db->select('*');
        $this->db->from("tb_rombel");
        $this->db->where("id_rombel !=", $id_rombel);
        $this->db->order_by('nama_rombel', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function getSiswaIsFree()
    {
        $query = $this->db->query("SELECT * FROM tb_relasi_rombel_siswa RIGHT OUTER JOIN tb_siswa
        ON tb_relasi_rombel_siswa.id_siswa = tb_siswa.id_siswa
        WHERE tb_relasi_rombel_siswa.id_siswa IS NULL");
        return $query->result();
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
