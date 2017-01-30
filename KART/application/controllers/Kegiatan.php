<?php 
class Kegiatan extends CI_Controller{
	private $data;
	public function __construct() {
        parent::__construct();
		$this->load->model('kegiatan_model');
        $this->load->model('daftar_model');
        $this->data = [ 'page' => "Keg",
                        'quotes' => "Check our activity list"
                      ];
    }

	function keg( $idkeg = '' ) {
        $this->load->view('templates/Header');
        if( $idkeg==''){
        	$this->data['title'] = "KEGIATAN | K-ART";
        	$this->data['judul'] = "KEGIATAN";
            $this->data['news'] = $this->kegiatan_model->get_list_kegiatan();
            $this->load->view('templates/Nav', $this->data);
            $this->load->view('kegiatan/kegiatan');
            $this->load->view('templates/Footer');
        } else {
        	$this->data['title'] = "DETAIL KEGIATAN | K-ART";
        	$this->data['judul'] = "DETAIL KEGIATAN";
            $this->data['news'] = $this->kegiatan_model->get_kegiatan($idkeg);
            $this->load->view('templates/Nav', $this->data);
            $this->load->view('kegiatan/kegiatan_detail');
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

    function tlkeg($idkeg = ''){
        $this->load->view('templates/Header');
        if( $idkeg==''){
            $this->data['title'] = "TIMELINE KEGIATAN | K-ART";
            $this->data['judul'] = "Timeline Kegiatan";
            $this->data['page'] = "Tikeg";
            $this->data['news'] = $this->kegiatan_model->get_list_kegiatan();
            $this->load->view('templates/Nav', $this->data);
            $this->load->view('kegiatan/tlkeg');
            $this->load->view('templates/Footer');
        } else {
            $this->data['title'] = "DETAIL KEGIATAN | K-ART";
            $this->data['judul'] = "DETAIL KEGIATAN";
            $this->data['news'] = $this->kegiatan_model->get_kegiatan($idkeg);
            $this->load->view('templates/Nav', $this->data);
            $this->load->view('kegiatan/kegiatan_detail');
            $this->load->view('templates/Footer');
        }
    }

    function entrykeg(){
		$data['title'] = "ENTRY KEGIATAN | K-ART";
		$data['page']  = "EK";
		$data['judul'] = "Entry Kegiatan";
		$data['quotes'] = "Input, Post, and Share!";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
        $this->daftar_model->proteksi();
		$this->load->view('kegiatan/kegiatanentry', $data);
			
	}

	function submit(){
        $this->daftar_model->proteksi();
        $this->kegiatan_model->save_kegiatan2();
        $this->session->set_flashdata('msg','DATA KEGIATAN TELAH DITAMBAHKAN');
        redirect(base_url('kegiatan/entry'));
    }

    public function likenews(){
        echo $this->kegiatan_model->tambahlike( $_SESSION['idnews']);
    }

    public function update(){
        $file = $_SESSION['idkeg'].".jpg";
        move_uploaded_file($_FILES['foto']['tmp_name'], './assets/images/kegiatan/'.$file);
        redirect( base_url().'kegiatan');
    }

}	//End of Class
