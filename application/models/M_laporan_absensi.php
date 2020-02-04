<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan_absensi extends CI_Model
{
    // Get DataTable data
    function getUsers($postData = null)
    {

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        // Custom search filter 
        $searchTahun = $postData['searchTahun'];
        $searchRombel = $postData['searchRombel'];
        $searchMapel = $postData['searchMapel'];
        $searchBulan = $postData['searchBulan'];
        $searchName = $postData['searchName'];

        ## Search 
        $search_arr = array();
        $searchQuery = "";
        if ($searchValue != '') {
            $search_arr[] = " (nomor_induk_sn like '%" . $searchValue . "%' or 
            nama_kategori like '%" . $searchValue . "%' or 
                nama_rombel like'%" . $searchValue . "%  or 
                tanggal_absensi like'%" . $searchValue . "%' ) ";
        }
        if ($searchRombel != '') {
            $search_arr[] = " nama_rombel='" . $searchRombel . "' ";
        }
        if ($searchMapel != '') {
            $search_arr[] = " nama_kategori='" . $searchMapel . "' ";
        }
        if ($searchBulan != '') {
            $search_arr[] = " tanggal_absensi like '%" . $searchBulan . "%' ";
        }
        if ($searchTahun != '') {
            $search_arr[] = " tanggal_absensi like '%" . $searchTahun . "%' ";
        }
        if ($searchName != '') {
            $search_arr[] = " nomor_induk_sn like '%" . $searchName . "%' ";
        }
        if (count($search_arr) > 0) {
            $searchQuery = implode(" and ", $search_arr);
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->join('tb_siswa', 'tb_absensi.id_siswa=tb_siswa.id_siswa');
        $this->db->join('tb_rombel', 'tb_absensi.id_rombel=tb_rombel.id_rombel');
        $this->db->join('tb_kategori', 'tb_absensi.id_kategori=tb_kategori.id_kategori');
        $this->db->join('tb_pelajaran', 'tb_absensi.id_pelajaran=tb_pelajaran.id_pelajaran');
        $records = $this->db->get('tb_absensi')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->join('tb_siswa', 'tb_absensi.id_siswa=tb_siswa.id_siswa');
        $this->db->join('tb_rombel', 'tb_absensi.id_rombel=tb_rombel.id_rombel');
        $this->db->join('tb_kategori', 'tb_absensi.id_kategori=tb_kategori.id_kategori');
        $this->db->join('tb_pelajaran', 'tb_absensi.id_pelajaran=tb_pelajaran.id_pelajaran');
        $records = $this->db->get('tb_absensi')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $this->db->group_by('tb_absensi.id_pelajaran');
        $this->db->group_by('tb_absensi.id_siswa');
        $this->db->join('tb_siswa', 'tb_absensi.id_siswa=tb_siswa.id_siswa');
        $this->db->join('tb_rombel', 'tb_absensi.id_rombel=tb_rombel.id_rombel');
        $this->db->join('tb_kategori', 'tb_absensi.id_kategori=tb_kategori.id_kategori');
        $this->db->join('tb_pelajaran', 'tb_absensi.id_pelajaran=tb_pelajaran.id_pelajaran');
        $records = $this->db->get('tb_absensi')->result();

        $data = array();

        foreach ($records as $record) {

            $bulan = $record->tanggal_absensi;
            list($day, $date, $month, $year) = mb_split('[ ]', $bulan);
            $data[] = array(
                "nomor_induk_sn" => $record->nomor_induk_sn,
                "nama_siswa" => $record->nama_siswa,
                "nama_rombel" => $record->nama_rombel,
                "nama_kategori" => $record->nama_kategori,
                "tanggal_absensi" => $month,
                "tahun_absensi" => $year,
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

    // Get cities array
    public function getCities()
    {

        ## Fetch records
        $this->db->distinct();
        $this->db->select('city');
        $this->db->order_by('city', 'asc');
        $records = $this->db->get('users')->result();

        $data = array();

        foreach ($records as $record) {

            $data[] = $record->city;
        }

        return $data;
    }
}
