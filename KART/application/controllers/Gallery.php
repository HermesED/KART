<?php 
class Gallery extends CI_Controller{
	function __construct(){
        parent::__construct();
		$this->load->model('daftar_model');
    }

	function g1(){
		$data['title'] = "GALLERY | K-ART";
		$data['page']  = "Gal1";
		$data['judul'] = "K-ART Gallery";
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

	function upd_gallery(){
		$this->daftar_model->proteksi();
		$file = $_SESSION['username'].date('U').".jpg";
        move_uploaded_file($_FILES['foto']['tmp_name'], './assets/images/gallery/'.$file);
        redirect( base_url('gallery'));
    }

    function delete_img(){
    	$this->daftar_model->proteksi();
    	if (array_key_exists('delete_file', $_POST)) {
			$filename = ($_POST['delete_file']);
				if (file_exists($filename)){
					unlink($filename);
		    		$this->session->set_flashdata('msg','GAMBAR TELAH DIHAPUS');
		    		redirect( base_url('gallery'));}
				else {
					$this->session->set_flashdata('msg','Could Not Delete '.$filename.', File Does not Exist');
		    		redirect( base_url('gallery'));
		  		}
		}
    }

    function leader_img(){
		$this->daftar_model->proteksi();
		$file = date('U').$_SESSION['username'].".jpg";
        move_uploaded_file($_FILES['foto']['tmp_name'], './assets/images/leaders/'.$file);
        redirect( base_url('about'));
    }

}	//End of Class
