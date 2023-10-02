<?php

namespace App\Controllers;
use App\Models\BukuModel;

class BukuController extends BaseController
{
    public function index()
    {
        $model = new bukuModel();
        $data['buku'] = $model->findAll();
        return view('buku/index', $data);
    }


public function create()
{
    return view('buku/create');
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