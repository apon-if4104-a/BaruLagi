<?php

class User_Model extends CI_Model
{
    public function Input_User()
    {
        $user = [
            "username" => $this->input->post('usernameuser', true),
            "namaUser" => $this->input->post('Fullname', true),
            "email" => $this->input->post('emailusr', true),
            "noHP" => $this->input->post('hp', true),
            "passwod" => $this->input->post('pwduser1', true)
        ];

        $this->db->insert('user', $user);
    }

    public function login_user($username,$pwd)
    {
        $user = [
            "username" => $username,
            "passwod" => $pwd
        ];
        return $this->db->get_where('user', $user);
    }
    public function cek_username($username)
    {
        $user = [
            "username" => $username
        ];
        return $this->db->get_where('user', $user);
    }

    public function transaksiOffline($username,$idobat,$jumlah,$total){
      $transaction = [
        "username" => $username,
        "ID_Obat" => $idobat,
        "Jumlah" => $jumlah,
        "Total_Harga" => $total,
        "Metode_Pembayaran" => 'Offline',
        "Status" => 'Belum Dibayar'
      ];

      $this->db->insert('transaksi',$transaction);

      $stock = $this->db->select('stock')
                        ->get_where('obat',array('ID_Obat' => $idobat))
                        ->row()
                        ->stock;
      $data = [
        "stock" => $stock-$jumlah
      ];

      $this->db->where('ID_Obat',$idobat);
      $this->db->update('obat',$data);
    }

    public function transaksiOnline($username,$idobat,$jumlah,$total){
      $transaction = [
        "username" => $username,
        "ID_Obat" => $idobat,
        "Jumlah" => $jumlah,
        "Total_Harga" => $total,
        "Metode_Pembayaran" => 'Online',
        "Status" => 'Belum Dibayar'
      ];

      $this->db->insert('transaksi',$transaction);

      $stock = $this->db->select('stock')
                        ->get_where('obat',array('ID_Obat' => $idobat))
                        ->row()
                        ->stock;
      $data = [
        "stock" => $stock-$jumlah
      ];

      $this->db->where('ID_Obat',$idobat);
      $this->db->update('obat',$data);
    }

  }
