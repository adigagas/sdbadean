<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load model 

        $this->load->model('M_mapel');
        $this->load->model('M_info_mapel');


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

    public function mapel()
    {
        $data['jabatan'] = $this->session->userdata('jabatan');
        $data['list'] = $this->db->get('tb_pelajaran')->result();
        $this->load->view('mapel/mapel', $data);
    }

    public function infoMapel()
    {
        $mapel = $this->M_info_mapel->addInfoMapel();
        if ($mapel > 0) {
            $this->session->set_flashdata(
                'msg',
                '<div class="alert alert-success">
                <p> Ifnormasi Berhasil Ditambahkan!</p>
                </div>'
            );
            redirect('Admin/indexguru');
        }
    }

    public function tambahMapel()
    {
        $mapel = $this->M_mapel->addMapel();
        if ($mapel > 0) {
            $this->session->set_flashdata(
                'msg',
                '<div class="alert alert-success">
                <p> Mata Pelajaran Berhasil Ditambahkan!</p>
                </div>'
            );
            redirect('mapel/index');
        }
    }
    function tambahPelajaran()
    {
        $id_pelajaran = $this->input->post('id_pelajaran');
        $nama_pelajaran = $this->input->post('nama_pelajaran');
        $id_kategori = $this->input->post('id_kategori');
        $id_ki ="KI-3 KI-4";

        $data = array(
            'id_pelajaran' => $id_pelajaran,
            'nama_pelajaran' => $nama_pelajaran,
            'id_ki' => $id_ki,
            'id_kategori' => $id_kategori,
        );
        $this->M_mapel->addPelajaran($data, 'tb_pelajaran');
        $this->session->set_flashdata(
            'msg',
            '<div class="alert alert-success">
            <p> Mata Pelajaran Berhasil Ditambahkan!</p>
        </div>'
        );
        redirect('mapel/mapel');
    }

    public function index()
    {
        $data['jabatan'] = $this->session->userdata('jabatan');
        $this->load->helper('tgl_indo');
        $data['pelajaran'] = $this->db->get('tb_pelajaran')->result();
        
        $this->db->order_by('id_kelas');
        $data['rombel'] = $this->db->get('tb_rombel')->result();
        //----------------------//

        //$data['selasa'] = $this->M_mapel->getMapelSelasa();
        // $data['rabu'] = $this->M_mapel->getMapelRabu();
        //$data['kamis'] = $this->M_mapel->getMapelKamis();
        //$data['jumat'] = $this->M_mapel->getMapelJumat();
        //$data['sabtu'] = $this->M_mapel->getMapelSabtu();
        //---------------------//
        $data['gtk'] = $this->db->get('tb_gtk')->result();
        $data['hari'] = $this->db->get('tb_hari')->result();



        $waktu = date('Y-m-d');
        $data['waktu'] = formatHariTanggal($waktu);
        $this->load->view('mapel/daftar_mapel', $data);
    }
    //-------------------------------------------------Hari Senin-------------------------------------//
    public function load()
    {
        $angkatan = $_GET['angkatan'];
        $test = $this->M_mapel->getMapelDay($angkatan);
        foreach ($test as $m) : ?>
            <tr>

                <td style="font-size: 12px"><?= $m->nama_kategori ?></td>
                <td style="font-size: 12px"><?= $m->waktu_mulai ?></td>
                <td style="font-size: 12px"><?= $m->nama_gtk ?></td>
            </tr>

        <?php endforeach; ?> <?php

                            }
                            //-------------------------------------------------Hari Selasa-------------------------------------//
                            public function load2()
                            {
                                 $angkatan = $_GET['angkatan'];
        $test = $this->M_mapel->getMapelSelasa($angkatan);
        foreach ($test as $m) : ?>
            <tr>

                <td style="font-size: 12px"><?= $m->nama_kategori ?></td>
                <td style="font-size: 12px"><?= $m->waktu_mulai ?></td>
                <td style="font-size: 12px"><?= $m->nama_gtk ?></td>
            </tr>

        <?php endforeach; ?> <?php
                            }
                            //-------------------------------------------------Hari Rabu-------------------------------------//
                            public function load3()
                            {
                                $angkatan = $_GET['angkatan'];
                                $test = $this->M_mapel->getMapelRabu($angkatan);
                                foreach ($test as $m) : ?>
            <tr>

                <td style="font-size: 12px"><?= $m->nama_pelajaran ?></td>
                <td style="font-size: 12px"><?= $m->waktu_mulai ?> - <?= $m->waktu_selesai ?></td>
                <td style="font-size: 12px"><?= $m->nama_gtk ?></td>
                <td style="font-size: 12px"> <a href="" data-toggle="modal" data-target="#modalDel<?= $m->id_pelajaran ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a></td>

            </tr>
        <?php endforeach; ?> <?php

                            }

                            //-------------------------------------------------Hari Kamins-------------------------------------//
                            public function load4()
                            {
                                $angkatan = $_GET['angkatan'];
                                $test = $this->M_mapel->getMapelKamis($angkatan);
                                foreach ($test as $m) : ?>
            <tr>

                <td style="font-size: 12px"><?= $m->nama_pelajaran ?></td>
                <td style="font-size: 12px"><?= $m->waktu_mulai ?> - <?= $m->waktu_selesai ?></td>
                <td style="font-size: 12px"><?= $m->nama_gtk ?></td>
                <td style="font-size: 12px"> <a href="" data-toggle="modal" data-target="#modalDel" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a></td>

            </tr>
        <?php endforeach; ?> <?php

                            }


                            //-------------------------------------------------Hari Kamins-------------------------------------//
                            public function load5()
                            {
                                $angkatan = $_GET['angkatan'];
                                $test = $this->M_mapel->getMapelJumat($angkatan);
                                foreach ($test as $m) : ?>
            <tr>

                <td style="font-size: 12px"><?= $m->nama_kategori ?></td>
                <td style="font-size: 12px"><?= $m->waktu_mulai ?> </td>
                <td style="font-size: 12px"><?= $m->nama_gtk ?></td>
              

            </tr>
        <?php endforeach; ?> <?php

                            }
                            //-------------------------------------------------Hari Sabtu-------------------------------------//
                            public function load6()
                            {
                                $angkatan = $_GET['angkatan'];
                                $test = $this->M_mapel->getMapelSabtu($angkatan);
                                foreach ($test as $m) : ?>
            <tr>

                <td style="font-size: 12px"><?= $m->nama_pelajaran ?></td>
                <td style="font-size: 12px"><?= $m->waktu_mulai ?> - <?= $m->waktu_selesai ?></td>
                <td style="font-size: 12px"><?= $m->nama_gtk ?></td>
                <td style="font-size: 12px"> <a href="" data-toggle="modal" data-target="#modalDel" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a></td>

            </tr>
        <?php endforeach; ?> <?php

                            }
                        }
