<?php 
class Usr extends CI_Controller{
	function __construct(){
        parent::__construct();
		$this->load->model('daftar_model');
    }

	public function log($status = 0){
		$data['title'] = "LOGIN | K-ART";
		$data['status'] = $status;
		$this->load->view('templates/Header');
		$this->load->view('team_page/login', $data);
	}

	// proses login user
	public function login(){
		if( $this->daftar_model->userada( $this->input->post('username') )) {
			if( $this->daftar_model->passwordok( $this->input->post('password') ) ){
				// user OK
				$data_session = array('status' => "login");
				$this->session->set_userdata($data_session);
				redirect( base_url().'home'); }
			else{
				// password salah
				redirect( base_url().'usr/login/2'); }
		} else{
			// username salah
			redirect( base_url().'usr/login/1');
		}

	}
	
	public function sp(){
		$data['title'] = "SIGN UP | K-ART";
		$this->load->view('templates/Header');
		$this->load->view('team_page/signup', $data);
	}

	public function register(){
		$this->daftar_model->dftrlogin();
		$this->session->set_flashdata('msg','AKUN ANDA TELAH TERDAFTAR');
        redirect(base_url('usr/register'));
    }

	public function logout(){
		session_destroy();
		redirect('usr/login');
	}
}
