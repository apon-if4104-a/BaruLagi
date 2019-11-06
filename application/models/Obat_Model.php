<?php

class Obat_Model extends CI_Model
{
    public function Input_Obat()
    {
        $Obat = [
            "ID_Obat" => $this->input->post('IDObatI', true),
            "Nama_Obat" => $this->input->post('NamaObatI', true),
            "Keterangan_Obat" => $this->input->post('KeteranganObatI', true),
            "Harga_Obat" => $this->input->post('HargaObatI', true),
            "Deskripsi_Obat" => $this->input->post('DeskripsiObatI', true),
            "stock" => $this->input->post('StokObatInpt',true)
        ];

        $this->db->insert('obat', $Obat);
    }

    public function Input_Foto_Obat(){
      $Obat = [
        "Foto_Obat" => $this->input->post('FotoObatI', true)
      ];
    }

    public function Delete_Obat($id)
    {
        $this->db->where('ID_Obat', $id);
        $this->db->delete('obat');
    }
    public function Update_Obat($idu)
    {
        $data = [
            "ID_Obat" => $this->input->post('IDObatU', true),
            "Nama_Obat" => $this->input->post('NamaObatU', true),
            "Keterangan_Obat" => $this->input->post('KeteranganObatU', true),
            "Harga_Obat" => $this->input->post('HargaObatU', true),
            "Deskripsi_Obat" => $this->input->post('DeskripsiObatU', true),
        ];

        $this->db->where('ID_Obat', $idu);
        $this->db->update('obat', $data);
    }

    public function uploadObat(){
      $config['upload_path'] = './assets/upload';
      $config['allowed_types'] = '|jpg|png|jpeg';
      $config['max_size'] = '2048';
      $config['remove_space'] = TRUE;

      $this->load->library('upload',$config);

      if($this->upload->do_upload('FotoObat')){
        $return = array('result' => 'success','file' => $this->upload->data(),'error' => '');
        return $return;
      }else{
        $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
        return $return;
      }
    }

    public function save ($upload,$id){
      $data = [
        'nama_file' => $upload['file']['file_name'],
        'ukuran_file' => $upload['file']['file_size'],
        'tipe_file' => $upload['file']['file_type']
      ];

      $this->db->where('ID_Obat',$id);
      $this->db->Update('obat',$data);
    }
}
