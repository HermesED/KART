<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ajax extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('daftar_model');
    }


    public function ceknim(){
        if( $this->daftar_model->nimexist( $this->input->post('nim') )) {
            echo "1";
        } else {
            echo "0";
        }
    }

    public function ceknama(){
        if( $this->daftar_model->namaexist( $this->input->post('nama') ) ){
            echo "1";
        } else {
            echo "0";
        }
    }

    public function cekemail(){
        if( $this->daftar_model->emailexist( $this->input->post('email') ) ){
            echo "1";
        } else {
            echo "0";
        }
    }

}
