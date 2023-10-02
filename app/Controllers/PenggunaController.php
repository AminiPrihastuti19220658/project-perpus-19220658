<?php

namespace App\Controllers;
use App\Models\PenggunaModel;
use CodeIgniter\Commands\Utilities\Publish;

class PenggunaController extends BaseController
{
    public function index()
    {
        $model = new PenggunaModel();
        $data['pengguna'] = $model->findAll();
        return view('pengguna/index', $data);
    }


public function create()
{
    return view('pengguna/create');
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