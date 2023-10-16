<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KoleksiBukuModel;

class KoleksiBukuController extends BaseController
{

    public function index(){
        return view('koleksibuku/table', [
            'daftar_koleksibuku' => (new KoleksiBukuModel())->findAll()
        ]);
    }

    public function create()
    {
        $data = [
            'nomor_koleksi' => $this->request->getPost('nomor_koleksi'),
            'status_koleksi'         => $this->request->getPost('status_koleksi'),
            'tb_buku_id'         => $this->request->getPost('tb_buku_id'),


        ]; 

        $model = new KoleksiBukuModel();
        $id = (int)$this->request->getPost('id');

        if($id > 0){
            $model->update($id, $data);
        }else{
            $model->insert($data);
        }

        return redirect()->to(base_url('koleksibuku'));
    }

    public function form(){
        return view('koleksibuku/form');
    }

    public function edit($id){
        $r = (new KoleksiBukuModel())->where('id', $id)->first();
        return view('koleksibuku/form', [
            'data' => $r
        ]);
    }

    public function hapus(){
        $id = $this->request->getPost('id');
        $m = new KoleksiBukuModel();
        $m->delete($id);
        return redirect()->to(base_url('koleksibuku'));
    }
}