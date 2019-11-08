<?php

class user extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('form_validation');
  }

  public function daftaruser()
  {
    //Input
    $this->load->model('Obat_Home');
    $this->load->model('User_Model');
    $pwd1 = $this->input->post('pwduser1');
    $pwd2 = $this->input->post('pwduser2');
    $table = 'obat';
    $username = $this->input->post('usernameuser');
    $hasil = $this->Obat_Home->Get_All($table);
    $data['BanyakObat'] = $hasil;
    if($pwd1 == $pwd2){
      $this->User_Model->Input_User();
      $data_session = [
          'nama' => $username,
          'status' => true
      ];
      $this->session->set_userdata($data_session);
      $this->load->view('Home/headerUser');
      $this->load->view('Home/LandingUserLogin',$data);
    }else{
      $this->session->set_flashdata('pwdgasama',"Password Tidak Sama");
      redirect(base_url('index.php/Home'));
    }
		/*$this->form_validation->set_rules('IDObatI', 'IDObatI', 'integer');
		$this->form_validation->set_rules('IDObatI', 'ID Obat', 'required');
		$this->form_validation->set_rules('NamaObatI', 'Nama Obat', 'required');
		$this->form_validation->set_rules('HargaObatI', 'Harga Obat', 'min_length[2]');
		$this->form_validation->set_rules('HargaObatI', 'Harga Obat', 'integer');*/
    }
    public function profile(){
      if ($this->session->userdata('status')== true) {
        $this->load->view('Home/headerUser');
        $this->load->view('Home/Profile');
      }else{
        redirect(base_url('index.php/Home'));
      }

    }
    public function HistoriUser(){
      if ($this->session->userdata('status')== true) {
        $this->load->model('Obat_Home');
        $username = $this->session->userdata('nama');
        $hasil = $this->Obat_Home->getHistoryUser($username);
        $data['histori'] = $hasil;
        $this->load->view('Home/headerUser');
        $this->load->view('Home/historyUser',$data);
      }else{
        redirect(base_url('index.php/Home'));
      }

    }
  }

