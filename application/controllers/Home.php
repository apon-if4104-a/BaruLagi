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
		$this->Obat_Resep->Input_Obat_Resep();
		echo "berhasil";
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
		$table = 'obat';
		$this->load->model('Obat_Home');
		$hasil['obat'] = $this->Obat_Home->Get_Detail($Id);
		$this->load->view('Home/Pilih Obat Login', $hasil);

	}
	public function BeliObat($Id,$jumlah)
	{
		$result['tes'] = $Id;
		$this->load->model('Obat_Home');
		$result['jumlah'] = $jumlah;
		$result['medic'] = $this->Obat_Home->Get_Detail($Id);
		$result['username'] = $this->session->userdata('nama');
		$this->load->view('Home/Pembayaran', $result);
	}

	public function bayarOffline($idobat,$total,$jumlah)
	{
		$this->load->model('User_Model');
		$username = $this->session->userdata('nama');
		$this->User_Model->transaksiOffline($username,$idobat,$jumlah,$total);
		$result['total'] = $total;
		$this->load->view('Home/pembayaranOffline',$result);
	}

	public function bayarOnline($idobat,$total,$jumlah)
	{
		$this->load->model('User_Model');
		$username = $this->session->userdata('nama');
		$this->User_Model->transaksiOnline($username,$idobat,$jumlah,$total);
		$result['total'] = $total;
		$this->load->view('Home/pembayaranOnline',$result);
	}

	public function InputObat()
	{
			//Input
			$this->form_validation->set_rules('IDObatI', 'ID Obat', 'integer');
			$this->form_validation->set_rules('HargaObatI', 'Harga Obat', 'min_length[2]');
			$this->form_validation->set_rules('HargaObatI', 'Harga Obat', 'integer');
			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('gagal', 'Ditambahkan');
				$this->load->view('Home/HalamanAdmin');
			} else {
				$this->load->model('Obat_Model');
				$this->Obat_Model->Input_Obat();
				$this->session->set_flashdata('berhasil', 'Ditambahkan');
				$this->load->view('Home/HalamanAdmin');
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
		$this->load->view('Home/headerLogin');
		$this->load->view('Home/LandingUser');
	}
	public function historitrans(){
		$this->load->view('Home/headerAdmin');
		$this->load->view('Home/historyAdmin');
	}
	public function homeadmin(){
		$this->load->view('Home/HalamanAdmin');
	}
}
