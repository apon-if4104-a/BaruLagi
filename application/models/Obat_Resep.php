<?php
class Obat_Resep extends CI_Model
{
    public function Input_Obat_Resep($foto,$username)
    {
        $Resep = [
            "Foto_Resep" => $foto,
            "Deskripsi_Resep" => $this->input->post('DeskripsiTambahan', true),
            "username" => $username
        ];

        $this->db->insert('obat_resep', $Resep);
    }
}
