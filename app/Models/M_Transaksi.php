<?php

namespace App\Models;

use CodeIgniter\Model as CodeIgniterModel;

class M_Transaksi extends CodeIgniterModel
{
    protected $model;
    protected $table      = 'transaksi_penjualan';
    protected $primaryKey = 'no_transaksi';
    protected $allowedFields = ['no_transaksi', 'tanggal', 'nama', 'no_hp', 'alamat','kecamatan','kota','total_transaksi'];

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
        return $this->db->query("INSERT INTO {$this->table} (no_transaksi, tanggal, nama, no_hp, alamat, kecamatan, kota, total_transaksi) VALUES ('{$data['no_transaksi']}', '{$data['tanggal']}', '{$data['nama']}', '{$data['no_hp']}','{$data['alamat']}','{$data['kecamatan']}','{$data['kota']}','{$data['total_transaksi']}')");
    }

    // get data barang berdasarkan id_barang
    public function barang_get($no_transaksi)
    {
        $data = $this->db->query("SELECT * FROM {$this->table} WHERE no_transaksi = '{$no_transaksi}'");
        $this->db->close();
        return $data->getRowArray();
    }

    // hapus data barang berdasarkan id barang
    public function barang_destroy($no_transaksi)
    {
        return $this->db->query("DELETE FROM {$this->table} WHERE no_transaksi = '{$no_transaksi}'");
    }
}
