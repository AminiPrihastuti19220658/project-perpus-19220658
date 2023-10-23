<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class BukuController extends BaseController
{

    public function index(){
        return view('buku/table', [
            'daftar_buku' => (new BukuModel())->findAll()
        ]);
    }

    public function create()
    {
        $data = [
            'judul' => $this->request->getPost('judul'),
            'edisi'         => $this->request->getPost('edisi'),
            'cetakan'         => $this->request->getPost('cetakan'),
            'sinopsis'         => $this->request->getPost('sinopsis'),
            'halaman'         => $this->request->getPost('halaman'),
            'penulis'         => $this->request->getPost('penulis'),
            'tahun'         => $this->request->getPost('tahun'),
            'cover_file'         => $this->request->getPost('cover_file'),
            'tb_kategori_id'         => $this->request->getPost('tb_kategori_id'),
            'tb_penerbit_id'         => $this->request->getPost('tb_penerbit_id')
        ]; 

        $model = new BukuModel();
        $id = (int)$this->request->getPost('id');

        if($id > 0){
            $model->update($id, $data);
        }else{
            $model->insert($data);
        }

        return redirect()->to(base_url('buku'));
    }

    public function form(){
        return view('buku/form');
    }

    public function edit($id){
        $r = (new BukuModel())->where('id', $id)->first();
        return view('buku/form', [
            'data' => $r
        ]);
    }

    public function hapus(){
        $id = $this->request->getPost('id');
        $m = new BukuModel();
        $m->delete($id);
        return redirect()->to(base_url('buku'));
    }
}