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
	
	public function sp($status = 0){
		$data['title'] = "SIGN UP | K-ART";
		$data['status'] = $status;
		$this->load->view('templates/Header');
		$this->load->view('team_page/signup', $data);
	}

	// Proses cek nim dan username sign-up
	public function ceksignup(){
		$this->daftar_model->proteksi2;
		if( $this->daftar_model->nimada( $this->input->post('nim') )) {
				// NIM Ada
				redirect( base_url().'usr/signup/1');}
		else if ( $this->daftar_model->userada( $this->input->post('username') )){
				// Username Ada
				redirect( base_url().'usr/signup/2');}
		else{
				$this->daftar_model->dftrlogin();
				$this->session->set_flashdata('msg','THANK YOU! ANDA TELAH TERDAFTAR');
		        redirect(base_url('usr/signup'));
		}
	}

	public function logout(){
		session_destroy();
		redirect('usr/login');
	}

    public function user_profile(){
    	$data['title'] = "USER PROFILE | K-ART";
        $data['judul'] = "USER PROFILE";
        $data['page'] = "UP";
        $data['quotes'] = "Your Profile";
		$data['user'] = $this->daftar_model->getuser( $_SESSION['username'] );
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$this->load->view('pages/usr_profile', $data);
		$this->load->view('templates/Footer');
	}

    
    public function editprofile(){
    	$data['title'] = "EDIT PROFILE | K-ART";
        $data['judul'] = "EDIT PROFILE";
        $data['page'] = "ED";
        $data['quotes'] = "Edit Your Profile";
		$data['user'] = $this->daftar_model->getuser( $_SESSION['username'] );
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$this->load->view('pages/editprofile', $data);
		$this->load->view('templates/Footer');
	}

	public function upd_user(){
		$this->daftar_model->updateuser();
		$file = $_SESSION['username'].".jpg";
		move_uploaded_file($_FILES['foto']['tmp_name'], './assets/images/users/'.$file);
		redirect( base_url().'usr/logout');
	}

}
