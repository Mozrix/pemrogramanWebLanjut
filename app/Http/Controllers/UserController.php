<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\JurusanModel;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function store(Request $request)
    {
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
            'jurusan_id' => $request->input('jurusan_id'),
        ]);
        return redirect()->to('/user');
    }

    public function create()
    {
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $jurusanModel = new JurusanModel();
        $jurusan = $jurusanModel->getJurusan();
        $data = [
            'title' => 'Tambah User',
            'kelas' => $kelas,
            'jurusan' => $jurusan,
        ];
        return view('create_user', $data);
    }

    public function index()
    {
        $data = [
            'title' => 'list user',
            'users' => $this->userModel->getUser(),
        ];
        return view('list', $data);
    }
}
