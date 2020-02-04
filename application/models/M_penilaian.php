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

    public function getIndikator($id_kelas, $id_pelajaran, $id_ki, $semester, $tahun_ajaran)
    {
        $this->db->select('*');
        $array = array('id_kelas' => $id_kelas, 'id_pelajaran' => $id_pelajaran, 'id_ki' => $id_ki, 'semester' => $semester, 'tahun_ajaran' => $tahun_ajaran);
        $this->db->where($array);
        $query = $this->db->get('tb_kd');
        return $query->result();
    }

    public function getPelajaran()
    {
        $this->db->select('*');
        $query = $this->db->get('tb_pelajaran');
        return $query->result();
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
