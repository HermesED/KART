<?php 
class Kegiatan extends CI_Controller{
	function __construct(){
        parent::__construct();
		$this->load->model('kegiatan_model');
    }

	function keg1( $id = ''){
		$data['title'] = "KEGIATAN | K-ART";
		$data['page']  = "Keg";
		$data['judul'] = "Kegiatan";
		$data['quotes'] = "Check our news and activities.";
		$this->load->view('templates/Header');
		
		if( $id==''){
			$this->load->view('templates/Nav', $data);
			$this->data['kegiatan'] = $this->kegiatan_model->get_list_kegiatan();
			$this->load->view('kegiatan/kegiatan', $data);
			$this->load->view('templates/Footer');
		} else {
			$this->load->view('templates/Nav', $data);
			$this->data['kegiatan'] = $this->kegiatan_model->get_kegiatan($id);
			$this->load->view('kegiatan/kegiatandetail', $data);
			$this->load->view('templates/Footer');
		}
	}

    function kegiatan2(){
    	$data['title'] = "KEGIATAN2 | K-ART";
    	$data['page']  = "Keg2";
    	$data['judul'] = "Kegiatan 2";
		$data['quotes'] = "Check our news and activities.";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$this->load->view('kegiatan/kegiatan2', $data);
		$this->load->view('templates/Footer');		
    }

    function detailkeg(){
    	$data['title'] = "DETAIL KEGIATAN | K-ART";
    	$data['page']  = "Kegde";
    	$data['judul'] = "Detail Kegiatan";
		$data['quotes'] = "Check our detail news and activities.";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$this->load->view('kegiatan/kegiatan_detail', $data);
		$this->load->view('templates/Footer');
    }

    function tlkeg(){
    	$data['title'] = "TIMELINE KEGIATAN | K-ART";
    	$data['page']  = "Tikeg";
    	$data['judul'] = "Timeline Kegiatan";
		$data['quotes'] = "Check our detail news and activities.";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$this->load->view('kegiatan/tlkeg', $data);
		$this->load->view('templates/Footer');
    }

    function entrykeg(){
		$data['title'] = "ENTRY KEGIATAN | K-ART";
		$data['page']  = "EK";
		$data['judul'] = "Entry Kegiatan";
		$data['quotes'] = "Input, Post, and Share!";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$this->load->view('kegiatan/kegiatanentry', $data);
			
	}

	function submit(){
        $this->kegiatan_model->save_kegiatan2();
        $this->session->set_flashdata('msg','DATA KEGIATAN TELAH DITAMBAHKAN');
        redirect(base_url('kegiatan/kegiatan'));
    }

}	//End of Class