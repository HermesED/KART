<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ajax extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->model('daftar_model');
    }
    public function ceknim(){
        if( $this->daftar_model->nimsudahterdaftar( $this->input->post('nim') ) ){
            echo "1";
        } else {
            echo "0";
        }
    }
    public function cekemail(){
        if( $this->daftar_model->emailsudahterdaftar( $this->input->post('email') ) ){
            echo "1";
        } else {
            echo "0";
        }
    }
}