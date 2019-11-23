<?php

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('Obat_Home');
	}

	public function index()
	{
		$table = 'obat';
		$hasil = $this->Obat_Home->Get_All($table);
		$data['BanyakObat'] = $hasil;
		if ($this->session->userdata('status')) {
			$this->load->view('Home/headerUser');
			$this->load->view('Home/LandingUserLogin', $data);
			// code statements My Account
		}
		else
		{
			$this->load->view('Home/headerLogin');
			$this->load->view('Home/LandingUser', $data);
		}
	}

	public function Input_Resep()
	{
		$this->load->view('Home/headerUser');
		$this->load->view('Home/InputResep');
	}
	public function Input_Resep_Foto()
	{
		$this->load->library('form_validation');
		$this->load->model('Obat_Resep');
		$foto = $_FILES['FotoResep']['tmp_name'];
		$foto = base64_encode(file_get_contents($foto));
		$username = $this->session->userdata('nama');
		$this->Obat_Resep->Input_Obat_Resep($foto,$username);
		$this->load->view('Home/headerUser');
		$this->load->view('Home/InputResep');
		/*if ($this->form_validation->run() == false) {
			$this->load->view('Home/InputResep');
		} else {
			$this->load->model('Obat_Resep');
			$this->Obat_Resep->Input_Obat_Resep();
			$this->load->view('Home/InputResep');
		}*/
	}
	public function PilihObat($Id)
	{
		if ($this->session->userdata('status')== true) {
			$table = 'obat';
			$this->load->model('Obat_Home');
			$hasil['obat'] = $this->Obat_Home->Get_Detail($Id);
			$this->load->view('Home/Pilih Obat Login', $hasil);
		}else{
			redirect(base_url('index.php/Home'));
		}


	}
	public function BeliObat($Id,$jumlah)
	{
		if ($this->session->userdata('status')== true) {
			$result['tes'] = $Id;
			$this->load->model('Obat_Home');
			$result['jumlah'] = $jumlah;
			$result['medic'] = $this->Obat_Home->Get_Detail($Id);
			$result['username'] = $this->session->userdata('nama');
			$this->load->view('Home/Pembayaran', $result);
		}else{
			redirect(base_url('index.php/Home'));
		}
	}

	public function bayarOffline($idobat,$total,$jumlah)
	{
		if ($this->session->userdata('status')== true) {
			$this->load->model('User_Model');
			$username = $this->session->userdata('nama');
			$this->User_Model->transaksiOffline($username,$idobat,$jumlah,$total);
			$result['total'] = $total;
			$this->load->view('Home/pembayaranOffline',$result);
		}else{
			redirect(base_url('index.php/Home'));
		}
	}

	public function bayarOnline($idobat,$total,$jumlah)
	{
		if ($this->session->userdata('status')== true) {
			$this->load->model('User_Model');
			$username = $this->session->userdata('nama');
			$this->User_Model->transaksiOnline($username,$idobat,$jumlah,$total);
			$result['total'] = $total;
			$this->load->view('Home/pembayaranOnline',$result);
		}else{
			redirect(base_url('index.php/Home'));
		}
	}

	public function InputObat()
	{
			//Input
			if ($this->session->userdata('status')== true) {
				$this->form_validation->set_rules('IDObatI', 'ID Obat', 'integer');
				$this->form_validation->set_rules('HargaObatI', 'Harga Obat', 'min_length[2]');
				$this->form_validation->set_rules('HargaObatI', 'Harga Obat', 'integer');
				$this->form_validation->set_rules('StokObatInpt','Stock Obat Input', 'integer');
				if ($this->form_validation->run() == false) {
					$this->session->set_flashdata('gagal', 'Ditambahkan');
					$this->load->view('Home/HalamanAdmin');
				} else {
					$this->load->model('Obat_Model');
					$foto = $_FILES['FotoObat']['tmp_name'];
					$foto = base64_encode(file_get_contents($foto));
					$this->Obat_Model->Input_Obat($foto);
					$this->session->set_flashdata('berhasil', 'Ditambahkan');
					$this->load->view('Home/HalamanAdmin');
				}
			}else{
				redirect(base_url('index.php/Home'));
			}

	}

	public function DeleteObat()
	{
		//Delete
		$id = $this->input->post('IDObatD');
		$this->load->model('Obat_Model');
		$this->Obat_Model->Delete_Obat($id);
		$this->load->view('Home/HalamanAdmin');
	}
	public function UpdateObat()
	{
		//Update
		$this->load->model('Obat_Model');
		$this->form_validation->set_rules('IDObatI', 'IDObatI', 'integer');
		$this->form_validation->set_rules('IDObatI', 'ID Obat', 'required');
		$this->form_validation->set_rules('NamaObatI', 'Nama Obat', 'required');
		$this->form_validation->set_rules('HargaObatI', 'Harga Obat', 'min_length[2]');
		$this->form_validation->set_rules('HargaObatI', 'Harga Obat', 'integer');

		$idu = $this->input->post('IDObatU');
		$this->Obat_Model->Update_Obat($idu);
		$this->load->view('Home/HalamanAdmin');
	}
	public function adminlanding(){
		if ($this->session->userdata('status')== true) {
			$this->load->view('Home/headerLogin');
			$this->load->view('Home/LandingUser');
		}else{
			redirect(base_url('index.php/Home'));
		}

	}
	public function historitrans(){
		if ($this->session->userdata('status')== true) {
			$this->load->model('Obat_Home');
			$hasil = $this->Obat_Home->getHistoryAdmin();
			$data['histori'] = $hasil;
			$this->load->view('Home/headerAdmin');
			$this->load->view('Home/historyAdmin',$data);
		}else{
			redirect(base_url('index.php/Home'));
		}

	}
	public function homeadmin(){
		$this->load->view('Home/HalamanAdmin');
	}
	public function EditProfile()
	{
		//Update
		if ($this->session->userdata('status')== true) {
			$this->load->model('User_Update');
			$this->form_validation->set_rules('EmailU', 'Email', 'email');
			$this->form_validation->set_rules('HPU', 'NO HP', 'integer');

			$editp = $this->input->post('UsernameU');
			$this->User_Update->Update_User($editp);
			$this->load->view('Home/headerUser');
			$this->load->view('Home/Profile');
		}else{
			redirect(base_url('index.php/Home'));
		}

	}
	public function EditPass()
	{
		if ($this->session->userdata('status')== true) {
			$pwd1 = $this->input->post('PwdUBaru1');
			$pwd2 = $this->input->post('PwdUBaru2');
			//Update
			$this->load->model('User_Update');
			if($pwd1 == $pwd2){
				$editp = $this->session->userdata('nama');
				$this->User_Update->Update_Pass($editp);
				$this->load->view('Home/headerUser');
				$this->load->view('Home/Profile');
	    }else{
	      $this->session->set_flashdata('pwdgasama',"Password Tidak Sama");
				$this->load->view('Home/headerUser');
				$this->load->view('Home/Profile');
	    }
		}else{
			redirect(base_url('index.php/Home'));
		}

	}
	public function search(){
        $d = $this->Obat_Home->search();
        $data["BanyakObat"] = $d;
        $this->load->view('Home/headerUser');
        $this->load->view('Home/LandingUserLogin', $data);

	}

}
