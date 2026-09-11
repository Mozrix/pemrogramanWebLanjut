<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $data = [
            'nama' => 'Noval',
            'npm' => '2457052004',
            'kelas' => 'SI_Angkatan_24'
        ];
        return view('profile', $data);
    }
}
