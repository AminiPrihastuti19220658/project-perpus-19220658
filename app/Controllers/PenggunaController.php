<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class PenggunaController extends BaseController
{

    public function index(){
        return view('pengguna/table', [
            'daftar_pengguna' => (new PenggunaModel())->findAll()
        ]);
    }

    public function create()
    {
        $data = [
            'email' => $this->request->getPost('email'),
            'nama_lengkap'         => $this->request->getPost('nama_lengkap'),
            'kata_sandi'         => $this->request->getPost('kata_sandi')
        ]; 

        $model = new PenggunaModel();
        $id = (int)$this->request->getPost('id');

        if($id > 0){
            $model->update($id, $data);
        }else{
            $model->insert($data);
        }

        return redirect()->to(base_url('pengguna'));
    }

    public function form(){
        return view('pengguna/form');
    }

    public function edit($id){
        $r = (new PenggunaModel())->where('id', $id)->first();
        return view('pengguna/form', [
            'data' => $r
        ]);
    }

    public function hapus(){
        $id = $this->request->getPost('id');
        $m = new PenggunaModel();
        $m->delete($id);
        return redirect()->to(base_url('pengguna'));
    }
}
