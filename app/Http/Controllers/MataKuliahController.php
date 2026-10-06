<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliahModel;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Mata Kuliah',
            'description' => 'Daftar Mata Kuliah',
            'mks' => MataKuliahModel::all(),
        ];

        return view('list_mk', $data);
    }

    public function create()
    {
        return view('create_mk', ['title' => 'Tambah Mata Kuliah']);
    }

    public function store(Request $request)
    {
        MataKuliahModel::create([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        return redirect()->to('/matakuliah');
    }

    public function edit($id)
    {
        $mk = MataKuliahModel::findOrFail($id);
        return view('edit_mk', ['title' => 'Edit Mata Kuliah', 'mk' => $mk]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer|min:1|max:10',
        ]);

        $mk = MataKuliahModel::findOrFail($id);
        $mk->update([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        return redirect()->to('/matakuliah')->with('success', 'Mata kuliah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mataKuliah = MataKuliahModel::findOrFail($id);
        $mataKuliah->delete();

        return redirect()->to('/matakuliah')->with('success', 'Mata kuliah berhasil dihapus.');
    }
}
