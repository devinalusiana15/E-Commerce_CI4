<?php

namespace App\Controllers;

use App\Models\M_Barang;

class C_Keranjang extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new M_Barang();
    }

    public function index()
    {
        $data['items'] = array_values(session('cart'));
        $data['total'] = $this->total();
        return view('v_cart', $data);
    }

    public function buy($id)
    {
        $barang = $this->model->barang_get($id);
        $item = array(
            'id_barang' => $barang['id_barang'],
            'nama_barang' => $barang['nama_barang'],
            'stok' => $barang['stok'] ,
            'harga' => $barang['harga'],
            'nama_file' => $barang['nama_file'],
            'kuantitas' => 1
        );
        $session = session();
        if ($session->has('cart')) {
            $index = $this->exists($id);
            $cart = array_values(session('cart'));
            if($index == -1){
                array_push($cart,$item);
                $session->set('cart', $cart);
            }else{
                $cart[$index]['kuantitas']++;
            }
            $session->set('cart', $cart);
        } else {
            $cart = array($item);
            $session->set('cart', $cart);
        }
        return redirect()->to(site_url('cart/index'));
    }

    public function remove($id)
    {
        $index = $this->exists($id);
        $cart = array_values(session('cart'));
        unset($cart[$index]);
        $session = session();
        $session->set('cart', $cart);
        return redirect()->to(site_url('cart/index'));
    }

    private function exists($id)
    {
        $items = array_values(session('cart'));
        for($i=0;$i<count($items);$i++){
            if($items[$i]['id_barang']==$id){
                return $i;
            }
        }
        return -1;
    }

    private function total()
    {
        $s=0;
        $items = array_values(session('cart'));
        foreach($items as $item){
            $s += $item['harga'] * $item['kuantitas'];
        }
        return $s;
    }

    private function checkout()
    {
        $items = array_values(session('cart'));
        foreach($items as $item){
            
        }
        return ;       
    }
}
