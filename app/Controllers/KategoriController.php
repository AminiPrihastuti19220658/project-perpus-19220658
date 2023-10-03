<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;

class KategoriController extends BaseController
{
    public function index()
    {
        // Menampilkan daftar pengguna
        $model = new KategoriModel();
        $data['kategori'] = $model->findAll();

        return view('kategori/index', $data);
    }

    public function create()
    {
        // Menampilkan form tambah pengguna
        return view('kategori/create');
    }

    public function store()
    {
        // Menyimpan data pengguna baru
        $model = new KategoriModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'email'    => $this->request->getPost('email'),
        ];
        $model->insert($data);

        return redirect()->to('/kategori');
    }

    public function edit($id)
    {
        // Menampilkan form edit pengguna
        $model = new KategoriModel();
        $data['kategori'] = $model->find($id);

        return view('kategori/edit', $data);
    }

    public function update($id)
    {
        // Memperbarui data pengguna
        $model = new KategoriModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'email'    => $this->request->getPost('email'),
        ];
        $model->update($id, $data);

        return redirect()->to('/kategori');
    }

    public function delete($id)
    {
        // Menghapus pengguna
        $model = new KategoriModel();
        $model->delete($id);

        return redirect()->to('/kategori');
    }
}
