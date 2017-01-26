<?php 
class Administrasi extends CI_Controller{
	function __construct(){
        parent::__construct();
		$this->load->model('daftar_model');
    }

	function reg(){
		$data['title'] = "PENDAFTARAN | K-ART";
		$data['page']  = "Dftr";
		$data['judul'] = "Form Pendaftaran";
		$data['quotes'] = "Fill the form and join us.";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$this->load->view('pages/pendaftaran_ukm', $data);
	}
	function btl(){
		$data['title'] = "PEMBATALAN | K-ART";
		$data['page']  = "Btl";
		$data['judul'] = "Form Pembatalan";
		$data['quotes'] = "Fill the form to leave.";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$this->load->view('pages/pembatalan_ukm', $data);
	}

	public function dftr(){
		$this->Daftar_model->dftranggota();
		$this->session->set_flashdata('msg','PENDAFTARAN BERHASIL');
		redirect( base_url('pendaftaran') );
	}

	public function batal(){
		$this->Daftar_model->btlanggota();
		$this->session->set_flashdata('msg','PEMBATALAN BERHASIL');
		redirect( base_url('pembatalan') );
	}
}	//End of Class