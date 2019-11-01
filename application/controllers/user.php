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
    $this->load->model('User_Model');
    $pwd1 = $this->input->post('pwduser1');
    $pwd2 = $this->input->post('pwduser2');
    if($pwd1 == $pwd2){
      $this->User_Model->Input_User();
      $this->load->view('Home/headerUser');
      $this->load->view('Home/LandingUser');
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
      $this->load->view('Home/headerUser');
      $this->load->view('Home/Profile');
    }
  }
