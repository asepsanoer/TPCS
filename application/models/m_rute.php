<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_rute extends CI_Model {
	private $table;
	private $db;
	
	public function __construct(){
        parent::__construct(); 
		 $this->db = $this->load->database('db',TRUE);
    }

	private function get_table() {
		return $this->table = 'rute';
	} 

	// get number of user active
	public function getRoute($asal, $tujuan) {
		$table = $this->get_table();

		$this->db->select('*');
        $this->db->from($table);
        $this->db->where('id_halte',$asal);
		$this->db->where('id_tujuan',$tujuan);
        $result = $this->db->get();

		return $result->row_array(); 
	}
}