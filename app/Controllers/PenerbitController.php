<?php

namespace App\Controllers;
use App\Models\PenerbitModel;

class PenerbitController extends BaseController
{
    public function index()
    {
        $model = new PenerbitModel();
        $data['penerbit'] = $model->findAll();
        return view('penerbit/index', $data);
    }


public function create()
{
    return view('penerbit/create');
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