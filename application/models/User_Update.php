<?php

class User_Update extends CI_Model
{
  public function Update_User($editp)
  {
      $data = [
          "namaUser" => $this->input->post('NamaU', true),
          "email" => $this->input->post('EmailU', true),
          "noHP" => $this->input->post('HPU', true)
      ];

      $this->db->where('username', $editp);
      $this->db->update('user', $data);
  }
  public function Update_Pass($editp)
  {
      $data = [
          "passwod" => $this->input->post('PwdUBaru1', true)
      ];

      $this->db->where('username', $editp);
      $this->db->update('user', $data);
  }
}
