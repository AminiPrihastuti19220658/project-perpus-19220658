<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Loginanggota extends BaseController
{
    public function index()
    {
        //
        return view('loginanggota/login');
    }


    public function login(){}

    public function ceklogin(){
        $email = request()->getPost('email');
        $katansandi = request()->getPost('katasandi');

        $m = new AnggotaModel();
        $r = $m->where('email', $email)
               ->where('katasandi', $katansandi)->first();
        if($r == null){
            return "Gagal login";
        }else{
            session()->set('anggotaa', $r); 
            return redirect()->to(base_url('/'));
        }
    }

        public function lupa_password(){}

        public function daftaranggotabaru(){}
   

    public function logout(){
        return view('anggotalogin/login');
    }

}
