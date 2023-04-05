<?php

namespace App\Models;

use CodeIgniter\Model as CodeIgniterModel;

class M_Jual extends CodeIgniterModel
{
    protected $model;
    protected $table      = 'jual';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['id_barang', 'no_transaksi', 'jumlah', 'harga'];

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAll()
    {
        // eksekusi sql di atas
        $db = db_connect();
        $data = $db->query("SELECT * FROM {$this->table}");

        // return by array
        return $data->getResultArray();
    }


    //store data barang
    public function barang_store($data)
    {
        return $this->db->query("INSERT INTO {$this->table} (id_barang, no_transaksi, jumlah, harga) VALUES ('{$data['id_barang']}', '{$data['no_transaksi']}', '{$data['jumlah']}', '{$data['harga']}')");
    }

    // get data barang berdasarkan id_barang
    public function barang_get($id_barang)
    {
        $data = $this->db->query("SELECT * FROM {$this->table} WHERE id_barang = '{$id_barang}'");
        $this->db->close();
        return $data->getRowArray();
    }

    // hapus data barang berdasarkan id barang
    public function barang_destroy($id_barang)
    {
        return $this->db->query("DELETE FROM {$this->table} WHERE id_barang = '{$id_barang}'");
    }
}
