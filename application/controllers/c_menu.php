<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_menu extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct(){
        parent::__construct(); 
		$this->load->database();
    }
	
	public function index()
	{
		$data['status'] = $this->session->userdata('login');
		$this->load->view('f_home',$data);
	}
	
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$this->load->model('m_login');
		if($this->m_login->isMember($username, $password)){
			$data_session = array(
							'username' => $username,
							'password' => $password,
							'login' => TRUE
						);
						
			$this->session->set_userdata($data_session);
			redirect('c_menu');
		}
		else {
			echo "<script>alert('gagal login');</script>";
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('c_menu');
	}
	
	public function showRoutes(){
		$asal = $this->input->post('halte1');
		$tujuan = $this->input->post('halte2');

		$this->load->model('m_rute');
		$data['rute'] = $this->m_rute->getRoute($asal, $tujuan);
		$this->load->view('f_rute',$data);
	}
	
	public function showHalte(){
		
		$this->load->model('m_halte');
		$this->m_halte->getHalte();
		$this->load->view('f_halte',$data);
	}
	
	public function showHistory(){
		$id = $this->input->get('id');
		
		$this->load->model('m_history');
		$this->m_history->getHistory($id);
		$this->load->view('f_history',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */