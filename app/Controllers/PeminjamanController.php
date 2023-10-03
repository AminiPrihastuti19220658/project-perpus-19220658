<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PeminjamanModel;

class PeminjamanController extends BaseController
{
    public function index()
    {
        // Menampilkan daftar pengguna
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->findAll();

        return view('peminjaman/index', $data);
    }

    public function create()
    {
        // Menampilkan form tambah pengguna
        return view('peminjaman/create');
    }

    public function store()
    {
        // Menyimpan data pengguna baru
        $model = new PeminjamanModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'email'    => $this->request->getPost('email'),
        ];
        $model->insert($data);

        return redirect()->to('/peminjaman');
    }

    public function edit($id)
    {
        // Menampilkan form edit pengguna
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->find($id);

        return view('peminjaman/edit', $data);
    }

    public function update($id)
    {
        // Memperbarui data pengguna
        $model = new PeminjamanModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'email'    => $this->request->getPost('email'),
        ];
        $model->update($id, $data);

        return redirect()->to('/peminjaman');
    }

    public function delete($id)
    {
        // Menghapus pengguna
        $model = new PeminjamanModel();
        $model->delete($id);

        return redirect()->to('/peminjaman');
    }
}
