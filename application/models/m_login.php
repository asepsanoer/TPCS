<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {
	private $table;

	private function get_table() {
		return $this->table = 'member';
	} 

	// get number of user active
	public function isMember($username, $password) {
		$table = $this->get_table();
		$this->db->select('*');
        $this->db->from($table); 
		
		
        $this->db->where('username',$username);
		$this->db->where('password',$password);
        $result = $this->db->get();

		return $result->num_rows(); 
	}
}