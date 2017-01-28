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
        $sql = "SELECT n.judul, n.id id_keg, n.username, n.kegiatan, n.tanggal, n.penulis,
                       m.nim id_penulis
                FROM kegiatan n
                LEFT JOIN anggota_ukm m
                    ON(n.penulis=m.nim)
                ORDER BY n.tanggal DESC
                LIMIT 3";
        $query = $this->db->query( $sql );
        if(( $query->result_array() )) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_kegiatan( $idkeg ){
        $sql = "SELECT n.judul, n.id id_keg, n.username, n.kegiatan, n.tanggal, n.penulis,
                       m.nim id_penulis, n.like, n.view
                FROM kegiatan n
                LEFT JOIN anggota_ukm m
                    ON(n.penulis=m.nim)
                WHERE n.id='$idkeg'";
        $query = $this->db->query( $sql );
        if(( $query->row_array() )) {
            $sqlv = "UPDATE kegiatan SET `view`=`view`+1
                    WHERE id=$idkeg";
            $queryv = $this->db->query($sqlv);
            return $query->row_array();
        } else {
            return false;
        }
    }

     public function foreword( $berita ){
        $max = 500;  // maks karakter
        $fore = "";  // potongan berita maks 200 karakter
        $kata = explode( " ", $berita );
        foreach ($kata as $k) {
            if( strlen( $fore ) < $max ) $fore .= $k." ";
        }
        $fore .= "...";
        return $fore;
    }
    public function tambahlike( $id ){
        if(( $_SESSION['sudahlike'.$id] )){
            $sql = "UPDATE kegiatan SET `like`=`like`+1
                    WHERE id=$id";
            $query = $this->db->query($sql);
            $_SESSION['sudahlike'.$id]=1;
        }
        $sql = "SELECT `like` FROM kegiatan WHERE id=$id";
        $query = $this->db->query($sql);
        if(( $query->row_array() )) {
            return $query->row_array()['like'];
        } else {
            return false;
        }
    }
    function proteksi(){
        if($_SESSION['admin']!=1){
            redirect(base_url('error'));
        }
    }
}
