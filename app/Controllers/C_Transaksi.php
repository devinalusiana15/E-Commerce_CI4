<?php

namespace App\Controllers;

use App\Models\M_Barang;
use App\Models\M_Jual;
use App\Models\M_Transaksi;


class C_Transaksi extends BaseController{
    protected $m_barang;
    protected $m_jual;
    protected $m_transaksi;

    public function __construct()
    {
        $this->m_barang = new M_Barang();
        $this->m_jual = new M_Jual();
        $this->m_transaksi = new M_Transaksi();
    }

    public function display()
    {
        $barang = $this->m_barang->getAll();
        $data = [
            'barang' => $barang,
            'title' => 'Barang'
        ];
        return view('v_tampil_barang', $data);
    }

}