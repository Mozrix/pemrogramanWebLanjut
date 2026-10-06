@extends('layout.app')

@section('content')
<div class="card" style="max-width: 600px; margin: 0 auto;">
    <div class="card-header">
        <h1>Edit Mata Kuliah</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_mk">Nama Mata Kuliah:</label>
                <input type="text" name="nama_mk" id="nama_mk" class="form-control" value="{{ $mk->nama_mk }}" required>
            </div>
            <div class="form-group">
                <label for="sks">Jumlah SKS:</label>
                <input type="number" name="sks" id="sks" class="form-control" value="{{ $mk->sks }}" min="1" max="6" required>
            </div>
            <div style="display: flex; gap: 0.75rem; align-items: center; margin-top: 1.5rem;">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ url('/matakuliah') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection