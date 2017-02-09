<?php
class Daftar_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function dftranggota(){
        $data = [

        'namalengkap'          => $this->input->post('nama'),
        'nim'                  => $this->input->post('nim'),
        'programstudi'         => $this->input->post('studi'),
        'pengalamansoftware'   => $this->input->post('experience'),
        'angkatan'             => $this->input->post('angkatan'),
        'email'                => $this->input->post('email'),
        'nomor_hp'             => $this->input->post('nomorhp')
                ];

        $this->db->insert( 'pendaftaran', $data );
    }
    function btlanggota(){
        $data = [

        'nim'               => $this->input->post('nim'),
        'namalengkap'       => $this->input->post('nama'),
        'angkatan'          => $this->input->post('angkatan'),
        'alasan'            => $this->input->post('alasan'),
        'pe_saran'          => $this->input->post('pe_saran')
                ];

        $this->db->insert( 'pembatalan', $data );
    }

    function dftrlogin(){
        $data = [

        'nim'                    => $this->input->post('nim'),
        'username'               => $this->input->post('username'),
        'password'               => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
                ];

        $this->db->insert( 'dblogin', $data );
    }
    function entryanggota(){
        $data = [

        'nim'                  => $this->input->post('nim'),
        'namalengkap'          => $this->input->post('nama'),
        'programstudi'         => $this->input->post('studi'),
        'angkatan'             => $this->input->post('angkatan'),
        'status'               => $this->input->post('status')
                ];

        $this->db->insert( 'anggota_ukm', $data );
    }

    public function nimada( $nim ){
        $query = $this->db->get_where( 'dblogin', array( 'nim' => $nim) );
        if(( $query->row_array() )) {
            $_SESSION['nim'] = $query->row_array()['nim'];
            return true;
        }
        return false;
    }

    public function userada( $username ){
        $query = $this->db->get_where( 'dblogin', array( 'username' => $username) );
        if(( $query->row_array() )) {
            $_SESSION['username'] = $query->row_array()['username'];
            $_SESSION['password'] = $query->row_array()['password'];
            $_SESSION['nim'] = $query->row_array()['nim'];
            $_SESSION['admin'] = $query->row_array()['admin'];
            return true;
        }
        return false;
    }

    public function passwordok( $pass ){
        if( password_verify( $this->input->post('password') , $_SESSION['password'] ) ){
            return true;
        }
        return FALSE;
    }

    //VALIDASI FORM PENDAFTARAN
    public function nimexist( $nim ){
        $query = $this->db->get_where( 'anggota_ukm', array( 'nim' => $nim) );
        if(( $query->row_array() )) {
            return true;
        }
        return false;
    }
    public function namaexist( $nama ){
        $query = $this->db->get_where( 'anggota_ukm', array( 'namalengkap' => $nama) );
        if(( $query->row_array() )) {
            return true;
        }
        return false;
    }
    public function emailexist( $email ){
        $query = $this->db->get_where( 'pendaftaran', array( 'email' => $email) );
        if(( $query->row_array() )) {
            return true;
        }
        return false;
    }
    public function hpexist( $hp ){
        $query = $this->db->get_where( 'anggota_ukm', array( 'nomor_hp' => $hp) );
        if(( $query->row_array() )) {
            return true;
        }
        return false;
    }
    
    function proteksi(){
        if($_SESSION['admin']!=1){
            redirect(base_url('error'));
        }
    }

    public function getuser($username){
        $query = $this->db->get_where( 'dblogin', array( 'username' => $username) );
        if(( $query->row_array() ) ) {
            return $query->row_array();
        }
        return false;
    }

    public function updateuser(){
        $this->db->where('username', $_SESSION['username'] );
        $data = [ 'username' => $this->input->post('username') ];
        $this->db->update( 'dblogin', $data );
    }


}//END
