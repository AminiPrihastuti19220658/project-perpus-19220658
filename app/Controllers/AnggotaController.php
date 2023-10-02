<?php

namespace App\Controllers;
use App\Models\AnggotaModel;

class AnggotaController extends BaseController
{
    public function index()
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->findAll();
        return view('anggota/index', $data);
    }


public function create()
{
    return view('anggota/create');
}

Public function store()
{

}

public function edit($id)
{

}

public function update($id)
{

}

public function delete($id)
{
    
}
}