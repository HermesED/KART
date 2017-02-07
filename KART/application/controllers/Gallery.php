<?php 
class Gallery extends CI_Controller{
	function __construct(){
        parent::__construct();
		$this->load->model('daftar_model');
    }

	function g1(){
		$data['title'] = "GALLERY | K-ART";
		$data['page']  = "Gal1";
		$data['judul'] = "Gallery1";
		$data['quotes'] = "Photos & Images";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$this->load->view('gallery/gallery1', $data);
		$this->load->view('templates/Footer');		
	}

	function g2(){
		$data['title'] = "GALLERY2 | K-ART";
		$data['page']  = "Gal2";
		$data['judul'] = "Gallery2";
		$data['quotes'] = "Photos & Images";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$this->load->view('gallery/gallery2', $data);
		$this->load->view('templates/Footer');		
	}

	function project(){
		$data['title'] = "PROJECT | K-ART";
		$data['page']  = "PJT";
		$data['judul'] = "Project On Going";
		$data['quotes'] = "Our Projects";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$this->load->view('gallery/project', $data);
		$this->load->view('templates/Footer');		
	}
}	//End of Class
