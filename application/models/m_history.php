<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_history extends CI_Model {
	private $table;

	private function get_table() {
		return $this->table = 'history';
	} 

	// get number of user active
	public function getHistory($id_member) {
		$table = $this->get_table();

		$this->db->select('*');
        $this->db->from($table);
        $this->db->where('id_member',$id_member);
        $result = $this->db->get();

		return $result->result_array(); 
	}
}