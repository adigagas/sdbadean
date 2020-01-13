<?php
class Excel_import_model extends CI_Model
{
	function select()
	{
		$this->db->order_by('id_gtk', 'ASC');
		$query = $this->db->get('gtk');
		return $query;
	}
	function insert($data)
	{
		$this->db->insert_batch('tb_gtk', $data);
	}
	function gtk()
	{
		return $this->db->get('tb_gtk');
	}
}
