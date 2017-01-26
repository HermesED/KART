<?php
class Project_model extends CI_Model{
    // FOR LOGIN PAGE //
    function cek($table,$where){      
        return $this->db->get_where($table,$where);
    }

    // GET DATA //
    //Pembatalan
    function DBbtl(){
        return $this->db->get('pembatalan');      //panggil database, tabel pembatalan
    }
    //Pendaftaran
    function DBdaftar(){
        return $this->db->get('pendaftaran');      //panggil database, tabel pendaftaran
    } 
    //Anggota_UKM 
    function DBmember(){
        $query = $this->db->order_by('nim', 'ASC');
        $query = $this->db->get('anggota_ukm');      //panggil database, tabel anggota_ukm
        return $query->result();
    }
    //Admin
    function DBadmin(){
        return $this->db->get('admin');            //panggil database, tabel admin
    }

    // SELECT DATA //
    //tampil database pembatalan?
    function tampil_dbpmbtln(){
    $query=$this->db->query('select * from pembatalan');
    return $query->result();
    }
    //tampil database pendaftaran?
    function tampil_dbdaftar(){
    $query=$this->db->query('select * from pendaftaran');
    return $query->result();
    }
     //tampil database member?
    function tampil_dbmember(){
    $query=$this->db->query('select * from anggota_ukm');
    return $query->result();
    }
    //tampil database low-admin?
    function tampil_dbusers(){
    $query=$this->db->query('select * from dblogin');
    return $query->result();
    }
    //INSERT / INPUT DATA //
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    //HAPUS DATA //
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    function input_admin($where,$table){
        $this->db->where($where);
        $this->db->insert($table);
    }

    // EDIT DATA //
    function edit_data($where,$table){      
        return $this->db->get_where($table,$where);
    }

    //=UPDATE DATA //
    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    } 

    //Fungsi untuk menghitung jumlah anggota, disini memanggil tabel anggota UKM, eksekusinya ada di View//
    function total_anggota(){
        $query = $this->db->query('SELECT * FROM anggota_ukm');
        return $query;
    }
    function total_user(){
        $query = $this->db->query('SELECT * FROM dblogin');
        return $query;
    }

}		
?>