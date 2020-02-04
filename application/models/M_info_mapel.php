<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_info_mapel extends CI_Model
{

    private $_table = 'tb_info_mapel';

    public $id_pelajaran;
    public $ulasan_informasi;
    public $tanggal_informasi;
    public $dateline;
    public $id_jenis_informasi;
    public $id_gtk;
    public $id_rombel;





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


    public function addInfoMapel()
    {
        $waktu = date('Y-m-d');
        $date = formatHariTanggal($waktu);

        $id_r = $this->id_rombel = $this->input->post('id_rombel');
        $this->id_pelajaran = $this->input->post('id_pelajaran');
        $this->id_gtk = $this->input->post('id_gtk');
        $this->id_jenis_informasi = $this->input->post('id_jenis');
        $this->ulasan_informasi = $this->input->post('ulasan_informasi');
        $this->dateline = $this->input->post('dateline');
        $this->tanggal_informasi = $date;
        //---------------------------------------------------------
        $this->db->where('id_jenis', $this->id_jenis_informasi);
        $jenis = $this->db->get('tb_jenis_info')->row_array();
        //---------------------------------------------------------
        $this->db->where('id_pelajaran', $this->id_pelajaran);
        $pelajaran = $this->db->get('tb_pelajaran')->row_array();
        //---------------------------------------------------------
        $this->db->where('id_rombel', $this->id_rombel);
        $rombel = $this->db->get('tb_rombel')->row_array();

        $data = $this->db->insert($this->_table, $this);
        if ($data > 0) {
            $this->db->join('tb_relasi_rombel_siswa', 'tb_siswa.id_siswa=tb_relasi_rombel_siswa.id_siswa');
            $this->db->where('tb_relasi_rombel_siswa.id_rombel', $id_r);
            $cek = $this->db->get('tb_siswa')->result();
            foreach ($cek as $c) {
                $this->db->where('nisn', $c->nomor_induk_sn);
                $datauser = $this->db->get('tb_device')->result();
                foreach ($datauser as $user) {
                    $fcmUrl = 'https://fcm.googleapis.com/fcm/send';

                    if ($this->id_jenis_informasi == 'J-1') {
                        $msg = array(
                            'body'  => 'Tugas pelajaran ' . $pelajaran['nama_pelajaran'] . ' dikumpulkan pada tanggal ' . $this->dateline,
                            'title' => $jenis['jenis_info'] . ' Kelas ' . $rombel['nama_rombel'],
                            'sound' => 'default'
                        );
                    } else if ($this->id_jenis_informasi == 'J-2') {
                        $msg = array(
                            'body'  => 'Ulangan ' . $pelajaran['nama_pelajaran'] . ' dilaksanakan pada tanggal ' . $this->dateline,
                            'title' => $jenis['jenis_info'] . ' Kelas ' . $rombel['nama_rombel'],
                            'sound' => 'default'
                        );
                    }

                    $dt = array(

                        'jenis_notif'   => "surat masuk",
                        'message'       => "No. Surat ",
                        'title'         => "Surat Masuk Baru ",
                        'sound'         => 'default'
                    );
                    $notification = [
                        "to"            => $user->token,
                        'notification'  => $msg,
                        'data'          => $dt
                    ];
                    $headers = [
                        'Authorization: key=AAAAQFk2f0s:APA91bENLkT42_G8mqImNXBo-4GX0I63UYlu_WSAQPQwsFcUhAGGc0uJyOe5pt4-6vRxpF3FNFlEyyo6OupaAaV3UcIyOx28WBTUYMq_X6CHJ_V53pdsO1P17WURa1HcVkw5na8e9M9k',
                        'Content-Type: application/json'
                    ];
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $fcmUrl);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($notification));
                    $insert = curl_exec($ch);
                    curl_close($ch);
                }
            }
        }
        return $data;
    }
}
