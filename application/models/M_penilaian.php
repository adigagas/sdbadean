<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_penilaian extends CI_Model
{
    public function getTahun()
    {
        $this->db->distinct();
        $this->db->select('tahun_ajaran');
        $this->db->order_by('tahun_ajaran', 'DESC');
        $query = $this->db->get('tb_kd');
        return $query->result();
    }

    public function getSpiritual()
    {
        $this->db->distinct();
        $this->db->select('tahun_ajaran');
        $query = $this->db->get('tb_spiritual');
        return $query->result();
    }
    
        public function getSpiritualSemester()
    {
        $this->db->distinct();
        $this->db->select('semester');
        $query = $this->db->get('tb_spiritual');
        return $query->result();
    }
    
        public function getSpiritualRombel()
    {
        $this->db->distinct();
        $this->db->select('tb_spiritual.id_rombel, nama_rombel');
                $this->db->join('tb_rombel', 'tb_rombel.id_rombel = tb_spiritual.id_rombel');

        $query = $this->db->get('tb_spiritual');
        return $query->result();
    }

    public function getNilai($id_riwayat_nilai)
    {
        $this->db->distinct();
        $this->db->select('*');
        $this->db->join('tb_siswa', 'tb_siswa.id_siswa = tb_nilai.id_siswa');
        $this->db->where('id_riwayat_nilai', $id_riwayat_nilai);
        $this->db->order_by('nama_siswa', 'ASC  ');
        $query = $this->db->get('tb_nilai');
        return $query->result();
    }

    public function getKD($kode)
    {
        $this->db->distinct();
        $this->db->select('*');
        $this->db->join('tb_nilai_kd', ' tb_nilai_kd.kode_nilai_kd = tb_nilai.kode_nilai_kd');
        $this->db->join('tb_kd', ' tb_kd.id_kd = tb_nilai_kd.id_kd');
        $this->db->where('tb_nilai_kd.kode_nilai_kd', $kode);
        $query = $this->db->get('tb_nilai');
        return $query->result();
    }

    public function getTahunKI()
    {
        $this->db->distinct();
        $this->db->select('tahun_ajaran, semester, tb_kd.id_pelajaran, tb_pelajaran.nama_pelajaran, id_kelas, tb_ki.id_ki, tb_ki.nama_ki');
        $this->db->from('tb_riwayat_nilai');
        $this->db->join('tb_kd', 'tb_kd.id_kd = tb_riwayat_nilai.id_kd');
        $this->db->join('tb_pelajaran', 'tb_pelajaran.id_pelajaran = tb_kd.id_pelajaran');
        $this->db->join('tb_ki', 'tb_ki.id_ki = tb_kd.id_ki');
        $this->db->order_by('tahun_ajaran', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function getPelajaranKI()
    {
        $this->db->distinct();
        $this->db->select('*');
        $this->db->from('tb_riwayat_nilai');
        $this->db->join('tb_kd', 'tb_kd.id_kd = tb_riwayat_nilai.id_kd');
        $this->db->order_by('tahun_ajaran', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function getKIFilter($kode)
    {
        $this->db->distinct();
        $this->db->select('tb_ki.id_ki, tb_ki.nama_ki');
        $this->db->join('tb_kd', 'tb_kd.id_kd = tb_riwayat_nilai.id_kd');
        $this->db->join('tb_ki', 'tb_ki.id_ki = tb_kd.id_ki');
        $query = $this->db->get_where('tb_riwayat_nilai', array('tb_riwayat_nilai.id_riwayat_nilai' => $kode));
        return $result = $query->row();
    }

    public function getKI()
    {
        $this->db->select('*');
        $this->db->order_by('id_kd', 'DESC');
        $query = $this->db->get('tb_kd');
        return $query->result();
    }

    public function getIndikator($id_kelas, $id_pelajaran, $id_ki, $semester, $tahun_ajaran)
    {
        $this->db->select('*');
        $array = array('id_kelas' => $id_kelas, 'id_pelajaran' => $id_pelajaran, 'id_ki' => $id_ki, 'semester' => $semester, 'tahun_ajaran' => $tahun_ajaran);
        $this->db->where($array);
        $query = $this->db->get('tb_kd');
        return $query->result();
    }

    public function getPelajaranFilter($kode)
    {
        $this->db->distinct();
        $this->db->select('nama_pelajaran');
        $this->db->join('tb_pelajaran', 'tb_pelajaran.id_pelajaran = tb_riwayat_nilai.id_pelajaran');
        $query = $this->db->get_where('tb_riwayat_nilai', array('tb_riwayat_nilai.id_riwayat_nilai' => $kode));
        return $result = $query->row();
    }

    public function getPelajaran()
    {
        $this->db->select('*');
        $query = $this->db->get('tb_pelajaran');
        return $query->result();
    }

    function getKom($postData = null)
    {
        $response = array();
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        // Custom search filter 
        $searchTahun = $postData['searchCity'];
        $searchPelajaran = $postData['searchGender'];
        $searchClass = $postData['searchClass'];
        $searchName = $postData['searchName'];
        $searchSemester = $postData['searchSemester'];
        $searchKI = $postData['searchKI'];

        ## Search 
        $search_arr = array();
        $searchQuery = "";
        if ($searchValue != '') {
            $search_arr[] = " (id_riwayat_nilai like '%" . $searchValue . "%') ";
        }
        if ($searchTahun != '') {
            $search_arr[] = " tb_kd.tahun_ajaran='" . $searchTahun . "' ";
        }
        if ($searchClass != '') {
            $search_arr[] = " tb_kd.id_kelas='" . $searchClass . "' ";
        }
        if ($searchPelajaran != '') {
            $search_arr[] = " tb_pelajaran.id_pelajaran='" . $searchPelajaran . "' ";
        }
        if ($searchSemester != '') {
            $search_arr[] = " tb_kd.semester='" . $searchSemester . "' ";
        }
        if ($searchKI != '') {
            $search_arr[] = " tb_ki.id_ki='" . $searchKI . "' ";
        }
        if (count($search_arr) > 0) {
            $searchQuery = implode(" and ", $search_arr);
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('tb_riwayat_nilai');
        $this->db->join('tb_kd', 'tb_kd.id_kd = tb_riwayat_nilai.id_kd');
        $this->db->join('tb_pelajaran', 'tb_pelajaran.id_pelajaran = tb_kd.id_pelajaran');
        $this->db->join('tb_ki', 'tb_ki.id_ki = tb_kd.id_ki');
        $records = $this->db->get()->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('tb_riwayat_nilai');
        $this->db->join('tb_kd', 'tb_kd.id_kd = tb_riwayat_nilai.id_kd');
        $this->db->join('tb_pelajaran', 'tb_pelajaran.id_pelajaran = tb_kd.id_pelajaran');
        $this->db->join('tb_ki', 'tb_ki.id_ki = tb_kd.id_ki');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get()->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('*');
        $this->db->join('tb_kd', 'tb_kd.id_kd = tb_riwayat_nilai.id_kd');
        $this->db->join('tb_pelajaran', 'tb_pelajaran.id_pelajaran = tb_kd.id_pelajaran');
        $this->db->join('tb_ki', 'tb_ki.id_ki = tb_kd.id_ki');
        $this->db->join('tb_rombel', 'tb_rombel.id_rombel = tb_riwayat_nilai.id_rombel');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('tb_riwayat_nilai')->result();
        $data = array();
        foreach ($records as $record) {
            $data[] = array(
                "nama_pelajaran" => $record->nama_pelajaran,
                "nama_rombel" => $record->nama_rombel,
                "id_riwayat_nilai" => $record->id_riwayat_nilai
            );
        }
        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }

    function getSpiritualValue($postData = null)
    {
        $response = array();
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        // Custom search filter 
        $searchTahun = $postData['searchCity'];
        $searchPelajaran = $postData['searchGender'];
        $searchClass = $postData['searchClass'];
        $searchSemester = $postData['searchSemester'];

        ## Search 
        $search_arr = array();
        $searchQuery = "";
        if ($searchValue != '') {
            $search_arr[] = " (tahun_ajaran like '%" . $searchValue . "%') ";
        }
        if ($searchTahun != '') {
            $search_arr[] = " tahun_ajaran='" . $searchTahun . "' ";
        }
        if ($searchSemester != '') {
            $search_arr[] = " semester='" . $searchSemester . "' ";
        }
                if ($searchPelajaran != '') {
            $search_arr[] = " id_rombel='" . $searchPelajaran . "' ";
        }
        if (count($search_arr) > 0) {
            $searchQuery = implode(" and ", $search_arr);
        }

        ## Total number of records without filtering
        $this->db->distinct();

        $this->db->select('count(*) as allcount');
        $this->db->from('tb_spiritual');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get()->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('tb_spiritual');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get()->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('*');
        $this->db->join('tb_siswa', 'tb_siswa.id_siswa = tb_spiritual.id_siswa');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('tb_spiritual')->result();
        $data = array();
        foreach ($records as $record) {
            $arraynilai = array($record->nilai_beribadah, $record->nilai_syukur, $record->nilai_berdoa);
            $deskripsi = 'Tuntas';
            if ($record->nilai_beribadah < 3 || $record->nilai_syukur < 3 || $record->nilai_berdoa < 3) {
                $deskripsi = 'Tidak Tuntas';
            }
            $nilai = $record->nama_siswa;
            $data[] = array(
                "nama_siswa" => $nilai,
                'nilai_beribadah' => $record->nilai_beribadah,
                'nilai_syukur' => $record->nilai_syukur,
                'nilai_berdoa' => $record->nilai_berdoa,
                "id_rombel" => $record->id_rombel,
                "id_rombel" => $record->id_rombel,
                'deskripsi_spiritual' => $deskripsi
            );
        }
        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }

    function getUsers($postData = null)
    {
        $response = array();
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        // Custom search filter 
        $searchCity = $postData['searchCity'];
        $searchGender = $postData['searchGender'];
        $searchClass = $postData['searchClass'];
        $searchName = $postData['searchName'];

        ## Search 
        $search_arr = array();
        $searchQuery = "";
        if ($searchValue != '') {
            $search_arr[] = " (indikator_kd like '%" . $searchValue . "%') ";
        }
        if ($searchCity != '') {
            $search_arr[] = " tahun_ajaran='" . $searchCity . "' ";
        }
        if ($searchClass != '') {
            $search_arr[] = " id_kelas='" . $searchClass . "' ";
        }
        if ($searchGender != '') {
            $search_arr[] = " id_pelajaran='" . $searchGender . "' ";
        }
        if ($searchName != '') {
            $search_arr[] = " indikator_kd like '%" . $searchName . "%' ";
        }
        if (count($search_arr) > 0) {
            $searchQuery = implode(" and ", $search_arr);
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('users')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('tb_kd')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('*');
        $array = array('id_ki' => 'KI-3', 'semester' => '1');
        $this->db->where($array);
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('tb_kd')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "indikator_kd" => $record->indikator_kd,
                "kompetensi_dasar" => $record->kompetensi_dasar
            );
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }

    function getUsersI($postData = null)
    {
        $response = array();
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        // Custom search filter 
        $searchCity = $postData['searchCity'];
        $searchGender = $postData['searchGender'];
        $searchClass = $postData['searchClass'];
        $searchName = $postData['searchName'];

        ## Search 
        $search_arr = array();
        $searchQuery = "";
        if ($searchValue != '') {
            $search_arr[] = " (indikator_kd like '%" . $searchValue . "%') ";
        }
        if ($searchCity != '') {
            $search_arr[] = " tahun_ajaran='" . $searchCity . "' ";
        }
        if ($searchClass != '') {
            $search_arr[] = " id_kelas='" . $searchClass . "' ";
        }
        if ($searchGender != '') {
            $search_arr[] = " id_pelajaran='" . $searchGender . "' ";
        }
        if ($searchName != '') {
            $search_arr[] = " indikator_kd like '%" . $searchName . "%' ";
        }
        if (count($search_arr) > 0) {
            $searchQuery = implode(" and ", $search_arr);
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('users')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('tb_kd')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('*');
        $array = array('id_ki' => 'KI-4', 'semester' => '1');
        $this->db->where($array);
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('tb_kd')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "indikator_kd" => $record->indikator_kd,
                "kompetensi_dasar" => $record->kompetensi_dasar
            );
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }

    function getUsersII($postData = null)
    {
        $response = array();
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        // Custom search filter 
        $searchCity = $postData['searchCity'];
        $searchGender = $postData['searchGender'];
        $searchClass = $postData['searchClass'];
        $searchName = $postData['searchName'];

        ## Search 
        $search_arr = array();
        $searchQuery = "";
        if ($searchValue != '') {
            $search_arr[] = " (indikator_kd like '%" . $searchValue . "%') ";
        }
        if ($searchCity != '') {
            $search_arr[] = " tahun_ajaran='" . $searchCity . "' ";
        }
        if ($searchClass != '') {
            $search_arr[] = " id_kelas='" . $searchClass . "' ";
        }
        if ($searchGender != '') {
            $search_arr[] = " id_pelajaran='" . $searchGender . "' ";
        }
        if ($searchName != '') {
            $search_arr[] = " indikator_kd like '%" . $searchName . "%' ";
        }
        if (count($search_arr) > 0) {
            $searchQuery = implode(" and ", $search_arr);
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('users')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('tb_kd')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('*');
        $array = array('id_ki' => 'KI-3', 'semester' => '2');
        $this->db->where($array);
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('tb_kd')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "indikator_kd" => $record->indikator_kd,
                "kompetensi_dasar" => $record->kompetensi_dasar
            );
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }

    function getUsersIII($postData = null)
    {
        $response = array();
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        // Custom search filter 
        $searchCity = $postData['searchCity'];
        $searchGender = $postData['searchGender'];
        $searchClass = $postData['searchClass'];
        $searchName = $postData['searchName'];

        ## Search 
        $search_arr = array();
        $searchQuery = "";
        if ($searchValue != '') {
            $search_arr[] = " (indikator_kd like '%" . $searchValue . "%') ";
        }
        if ($searchCity != '') {
            $search_arr[] = " tahun_ajaran='" . $searchCity . "' ";
        }
        if ($searchClass != '') {
            $search_arr[] = " id_kelas='" . $searchClass . "' ";
        }
        if ($searchGender != '') {
            $search_arr[] = " id_pelajaran='" . $searchGender . "' ";
        }
        if ($searchName != '') {
            $search_arr[] = " indikator_kd like '%" . $searchName . "%' ";
        }
        if (count($search_arr) > 0) {
            $searchQuery = implode(" and ", $search_arr);
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('users')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('tb_kd')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('*');
        $array = array('id_ki' => 'KI-4', 'semester' => '2');
        $this->db->where($array);
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('tb_kd')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = array(
                "indikator_kd" => $record->indikator_kd,
                "kompetensi_dasar" => $record->kompetensi_dasar
            );
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        return $response;
    }
}
