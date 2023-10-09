<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;

class KategoriController extends BaseController
{
    public function index()
    {
        return view('kategorii/table', [
            'daftar_kategorii' => (new KategoriModel()) ->findAll()
        ]);
    }

    public function create()
    {
        $data = [
            'kategori' => $this->request->getPost('kategori'),
            'kode_ddc' => $this->request->getPost('kode_ddc'),
        ];

        $model = new KategoriModel();
        $id = (int)$this->request->getPost('id');

        if($id > 0){
            $model->update($id, $data);
        }else{
            $model->insert($data);
        }

        return redirect()->to(base_url('kategori'));
    }

    public function form(){
        return view('kategorii/form');
    }

    public function edit($id){
        $r = (new KategoriModel())->where('id', $id)->first();
        return view('kategorii/form', [
            'data' => $r
        ]);
    }

    public function hapus(){
        $id = $this->request->getPost('id');
        $m = new KategoriModel();
        $m->delete($id);
        return redirect()->to(base_url('kategori'));
    }
}
