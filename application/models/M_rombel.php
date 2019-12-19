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
}
