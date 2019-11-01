<?php

class Obat_Home extends CI_Model
{
    public function Get_Keywoard($keywoard)
    {
        $keywoard = $this->input->post('keywoard', true);
        $this->db->like('Nama_Obat', $keywoard);
        $this->db->or_like('Keterangan_Obat', $keywoard);
        return $this->db->get('apon')->result();
    }
    public function get_All($table){
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function Get_Detail($Id){
      return $this->db->get_where('obat', ['ID_Obat' => $Id])->row_array();
    }

    public function Get_DetailNama($Id){
      return $this->db->get_where('obat', ['Nama_Obat' => $Id])->row_array();
    }

}
