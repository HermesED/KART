<?php 
class Member extends CI_Controller{
	function __construct(){
        parent::__construct();
		$this->load->model('daftar_model');
		$this->load->model('project_model');
    }

	function m1(){
		$data['title'] = "MEMBERS | K-ART";
		$data['page']  = "MB1";
		$data['judul'] = "MEMBERS";
		$data['quotes'] = "List of Our Members";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);

		$data['anggota'] 	= $this->project_model->tampil_dbmember(); 			//untuk tampil database anggota
		$data['lol'] 		= $this->project_model->DBmember(); 				//ORDER BY NIM database anggota
		$data['total'] 	 	= $this->project_model->total_anggota();			//untuk menghitung total jumlah anggota ukm

		$this->load->view('members/members1', $data);
		$this->load->view('templates/Footer');		
	}
	function entrym(){
		$data['title'] = "MEMBERS | K-ART";
		$data['page']  = "EM";
		$data['judul'] = "ENTRY MEMBER";
		$data['quotes'] = "Add Data";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);

		$data['anggota'] 	= $this->project_model->tampil_dbmember(); 			//untuk tampil database anggota
		$data['lol'] 		= $this->project_model->DBmember(); 				//ORDER BY NIM database anggota
		$data['daftar']  	= $this->project_model->tampil_dbdaftar(); 			//untuk tampil database pendaftaran
		$data['batal']	 	= $this->project_model->tampil_dbpmbtln(); 			//untuk tampil database pembatalan
		$data['total'] 	 	= $this->project_model->total_anggota();			//untuk menghitung total jumlah anggota ukm

		$this->load->view('members/entry_member', $data);
	}
	function userpage(){
		$data['title'] = "USERS | K-ART";
		$data['page']  = "USR";
		$data['judul'] = "ADMINS & USERS";
		$data['quotes'] = "Change Status";
		$this->load->view('templates/Header');
		$this->load->view('templates/Nav', $data);
		$data['users']		= $this->project_model->tampil_dbusers(); 			//untuk tampil database USER
		$data['tuser'] 	 	= $this->project_model->total_user();				//untuk menghitung total jumlah user
		$this->load->view('pages/users1', $data);
	}



	public function index(){
		$data['title'] = "Pengurus UKM";
		$data['page']  = "Pengurus";
		$data['warna'] = "Pengurus";
 
		$this->load->view('Templates/My_Link_Script');
		$this->load->view('Templates/NavAdmin', $data);

		

		$this->load->view('member_admin', $data);
		$this->load->view('Templates/Footer');
	}

	function tambah(){
		$this->load->view('member_ukm');
	}

	public function input_anggota(){
		$this->daftar_model->entryanggota();
		$this->session->set_flashdata('msg','INPUT DATA BERHASIL');
		redirect( base_url('member_admin') );
	}

	function update(){
		$nim 					= $this->input->post('nim');
		$namalengkap 			= $this->input->post('nama');
		$programstudi 			= $this->input->post('studi');
		$angkatan 				= $this->input->post('angkatan');
		$status 				= $this->input->post('status');

		$data = array(
			'namalengkap' 		=> $namalengkap,
			'programstudi' 		=> $programstudi,
			'angkatan'			=> $angkatan,
			'status'			=> $status,
		);

		$where = array(
		'nim' => $nim
		);

		$this->project_model->update_data($where,$data,'anggota_ukm');
		$this->session->set_flashdata('msg','DATA ANGGOTA TELAH DI UPDATE');
		redirect('member_admin');
	}
	function upd_user(){
		$nim 					= $this->input->post('nim');
		$username	 			= $this->input->post('username');
		$admin 					= $this->input->post('admin');

		$data = array(
			'nim' 			=> $nim,
			'username' 		=> $username,
			'admin'			=> $admin,
		);

		$where = array(
		'nim' => $nim
		);

		$this->project_model->update_data($where,$data,'dblogin');
		$this->session->set_flashdata('msg','STATUS TELAH DI UPDATE');
		redirect('users');
	}

	//Function hapus/delete di tabel anggota ukm, hapus anggota berdasarkan nim
	function hapus_anggota($nim){
		$where = array('nim' => $nim);
		$this->project_model->hapus_data($where,'anggota_ukm');
	    $this->session->set_flashdata('msg','DATA ANGGOTA TELAH DI HAPUS');
		redirect('member_admin');
	}
	//Function hapus/delete list pembatalan
	function hapusbtl($nim){
		$where = array('nim' => $nim);
		$this->project_model->hapus_data($where,'pembatalan');
		$this->session->set_flashdata('msg','DATA PEMBATALAN TELAH DI HAPUS');
		redirect('member_admin');
	}
	//Function hapus/delete list pendaftaran
	function hapusdftr($nim){
		$where = array('nim' => $nim);
		$this->project_model->hapus_data($where,'pendaftaran');
		$this->session->set_flashdata('msg','DATA PENDAFTARAN TELAH DI HAPUS');
		redirect('member_admin');
	}
	function deluser($nim){
		$where = array('nim' => $nim);
		$this->project_model->hapus_data($where,'dblogin');
		$this->session->set_flashdata('msg','DATA USER TELAH DI HAPUS');
		redirect('users');
	}

	//This function will be called in view as form action
	function submit(){
		if($this->input->post('sbm') == "input") { 
		    $this->tambah_aksi();} 									//Execute Input Button
		else if ($this->input->post('sbm') == "update") {
			$this->update();}										//Execute Update Button
		else if ($this->input->post('sbm') == "upd_user") {
			$this->upd_user();}										//Execute Update User Button
		else if ($this->input->post("$pengurus->nim")) {
			$this->hapus();}										//Execute Delete (X icon)
		else{
			//I DON'T KNOW
		}
	}

}	//End of Class