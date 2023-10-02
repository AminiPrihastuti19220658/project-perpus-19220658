<?php

namespace App\Controllers;

use App\Models\KategoriaModel;


class KategoriController extends BaseController
{
    public function index()
    {
        $model = new KategoriaModel();
        $data['kategori'] = $model->findAll();
        return view('kategori/index', $data);
    }


public function create()
{
    return view('kategori/create');
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