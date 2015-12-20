<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_halte extends CI_Model {
	private $table;

	private function get_table() {
		return $this->table = 'halte';
	} 

	// get number of user active
	public function getHalte() {
		$table = $this->get_table();

		$this->db->select('*');
        $this->db->from($table);
        $result = $this->db->get();

		return $result->result_array(); 
	}
}