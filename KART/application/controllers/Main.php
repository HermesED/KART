<?php 
class Main extends CI_Controller{
	function __construct(){
        parent::__construct();
		$this->load->model('daftar_model');
		$this->load->model('project_model');
    }

	function home(){
		$data['title'] = "HOME | K-ART";
		$data['page']  = "Home";
		$data['judul']  = "";
		$data['quotes'] = "";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$data['total'] 	 	= $this->project_model->total_anggota();			//untuk menghitung total jumlah anggota ukm
		$data['tuser'] 	 	= $this->project_model->total_user();				//untuk menghitung total user
		$this->load->view('team_page/homepage', $data);
		$this->load->view('templates/Footer');		
	}

	function soon(){
		$data['title'] = "MAINTENANCE | K-ART";
		$data['page']   = "MT";
		$this->load->view('templates/Header');
		$this->load->view('team_page/comingsoon', $data);
		$this->load->view('templates/Footer');
	}

	function aboutus(){
		$data['title']  = "ABOUT US | K-ART";
		$data['page']   = "Abt";
		$data['judul']  = "About Us";
		$data['quotes'] = "Why our Clients love to work with us.";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$this->load->view('team_page/aboutus', $data);
		$this->load->view('templates/Footer');	
	}

	function contactus(){
		$data['title']  = "CONTACT US | K-ART";
		$data['page']  	= "Cnt";
		$data['judul']  = "Contact Us";
		$data['quotes'] = "Message Us, Call Us, Stay Close.";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$this->load->view('team_page/contactus', $data);
		$this->load->view('templates/Footer');	
	}

	function price(){
		$data['title'] = "PRICING | K-ART";
		$data['page'] = "Prc";
		$data['judul']  = "Pricing Table";
		$data['quotes'] = "Configure your pricing table.";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$this->load->view('team_page/pricing', $data);
		$this->load->view('templates/Footer');
	}
	function service(){
		$data['title'] = "SERVICE | K-ART";
		$data['page'] = "Srv";
		$data['judul']  = "Services";
		$data['quotes'] = "Designed to suit you.";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$this->load->view('team_page/service', $data);
		$this->load->view('templates/Footer');
	}

	function error404(){
		$data['title'] = "ERROR 404 | K-ART";
		$this->load->view('templates/Header');
		$this->load->view('team_page/error404', $data);			
	}

}	//End of Class