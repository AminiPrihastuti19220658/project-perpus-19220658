<?php

namespace App\Controllers;

use App\Models\KoleksiBukuModel;


class KoleksiBukuController extends BaseController
{
    public function index()
    {
        $model = new KoleksiBukuModel();
        $data['koleksibuku'] = $model->findAll();
        return view('koleksibuku/index', $data);
    }


public function create()
{
    return view('koleksibuku/create');
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