<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login/login');
    }

    public function ceklogin(){
        $email = request()->getPost('email');
        $katasandi = request()->getPost('katasandi');

        $m = new PenggunaModel();
        $r = $m->where('email', $email)
               ->where('katasandi', $katasandi)->first();
        if($r == null){
            return "Gagal login";
        }else{
            session()->set('pengguna', $r); 
            return redirect()->to(base_url('/'));
        }
    }

    public function lupa_password(){

    }

    public function daftaranggotabaru(){
        
    }

    public function logout(){
        return view('login/login');
    }

}

class Login extends BaseController
{
    public function Daftar()
    {
        
    }

    public function Masuk()
    {

    }

    public function Lupa_Katasandi()
    {

    }
}
