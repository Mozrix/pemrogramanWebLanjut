@extends('layout.app')

@section('content')
<div class="card" style="max-width: 600px; margin: 0 auto;">
    <div class="card-header">
        <h1>Tambah Mata Kuliah</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_mk">Nama Mata Kuliah:</label>
                <input type="text" name="nama_mk" id="nama_mk" class="form-control" placeholder="Contoh: Pemrograman Web Lanjut" required>
            </div>
            <div class="form-group">
                <label for="sks">Jumlah SKS:</label>
                <input type="number" name="sks" id="sks" class="form-control" min="1" max="6" placeholder="Contoh: 3" required>
            </div>
            <div style="display: flex; gap: 0.75rem; align-items: center; margin-top: 1.5rem;">
                <button type="submit" class="btn btn-primary">Simpan Mata Kuliah</button>
                <a href="{{ url('/matakuliah') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection