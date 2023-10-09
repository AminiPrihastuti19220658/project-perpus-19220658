<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PeminjamanModel;

class PeminjamanController extends BaseController
{
    public function index()
    {
        return view('peminjaman/table', [
            'daftar_peminjaman' => (new PeminjamanModel()) ->findAll()
        ]);
    }

    public function create()
    {
        $data = [
            'tgl_peminjaman' => $this->request->getPost('tgl_peminjaman'),
            'tgl_pengembalian' => $this->request->getPost('tgl_pengembalian'),
            'denda' => $this->request->getPost('denda'),
        ];

        $model = new PeminjamanModel();
        $id = (int)$this->request->getPost('id');

        if($id > 0){
            $model->update($id, $data);
        }else{
            $model->insert($data);
        }

        return redirect()->to(base_url('peminjaman'));
    }

    public function form(){
        return view('peminjaman/form');
    }

    public function edit($id){
        $r = (new PeminjamanModel())->where('id', $id)->first();
        return view('peminjaman/form', [
            'data' => $r
        ]);
    }

    public function hapus(){
        $id = $this->request->getPost('id');
        $m = new PeminjamanModel();
        $m->delete($id);
        return redirect()->to(base_url('peminjaman'));
    }
}
