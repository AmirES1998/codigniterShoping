<?php

class My_Model extends CI_Model

{

	function __construct()
	{

		parent::__construct();
	}


	public function insert($table, $data) {
		return $this->db->insert($table, $data) ;
	}

	public function select($selectArray, $table, $conditionArray, $order_by = "id", $group_by) {

		$this->db->select($selectArray) ;
		$this->db->from($table) ;
		$this->db->where($conditionArray) ;
		$this->db->order_by($order_by) ;
		$this->db->group_by($group_by) ;
		$query =  $this->db->get() ;
		$result = $query->result_array() ;

		if(is_array($result) && !empty($result))
			return $result ;
		else
			return $this->db->_error_message() ;



	}

	public function update($table, $data, $conditionArray) {
		$this->db->where($conditionArray) ;
		$this->db->update($table, $data) ;

	}

	public function delete($table, $conditionArray) {
		$this->db->delete($table, $conditionArray) ;
	}


}
