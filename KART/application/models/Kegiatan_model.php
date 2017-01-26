<?php
class Kegiatan_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function save_kegiatan2(){
        $data['id']             = date('U');
        $data['judul']          = $this->input->post('judul');
        $data['username']       = $this->input->post('username');
        $data['tanggal']        = date('j F Y');
        $data['kegiatan']       = $this->input->post('kegiatan');
        $data['penulis']        = $this->input->post('penulis');
        $this->db->insert( 'kegiatan', $data );
    }


    public function get_list_kegiatan(){
        $sql = "SELECT n.judul, n.id id, n.kegiatan, n.tanggal, n.penulis
                FROM kegiatan n
                LEFT JOIN anggota_ukm m
                    ON(n.penulis=nim)
                ORDER BY n.tanggal DESC
                LIMIT 10";
        $query = $this->db->query( $sql );
       
    }
    public function get_kegiatan( $id ){
        $sql = "SELECT n.judul, n.id id, n.kegiatan, n.tanggal, n.penulis
                FROM kegiatan n
                LEFT JOIN anggota_ukm m
                    ON(n.penulis=nim)
                WHERE n.id='$id'";
        $query = $this->db->query( $sql );
        
    }
    public function foreword( $berita ){
        $max = 200;  // maks karakter
        $fore = "";  // potongan berita maks 200 karakter
        $kata = explode( " ", $berita );
        foreach ($kata as $k) {
            if( strlen( $fore ) < $max ) $fore .= $k." ";
        }
        $fore .= "...";
        return $fore;
    }
}