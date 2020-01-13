<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mutasi extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'tanggal',
                'label' => 'Name',
                'rules' => 'required'
            ]
        ];
    }


    public function keluarSekolah()
    {
        $post = $this->input->post();
        $status = "Nonaktif";
        $this->id_siswa = $post['id_siswa'];
        $this->tanggal = $post['tanggal'];
        $this->alasan = $post['alasan'];

        $this->db->set('status', $status);
        $this->db->where('id_siswa',  $post['id_siswa']);
        $this->db->update('tb_siswa');

        $this->db->insert('tb_keluar_sekolah', $this);
    }
}
