<?php

namespace App\Controllers;
use App\Models\PeminjamanModel;

class PeminjamanController extends BaseController
{
    public function index()
    {
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->findAll();
        return view('peminjaman/index', $data);
    }


public function create()
{
    return view('peminjaman/create');
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