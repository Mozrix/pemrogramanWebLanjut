@extends('layout.app')

@section('content')
<div class="card" style="max-width: 600px; margin: 0 auto;">
    <div class="card-header">
        <h1>Buat Pengguna Baru</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama" required>
            </div>
            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" name="npm" id="npm" class="form-control" placeholder="Masukkan NPM" required>
            </div>
            <div class="form-group">
                <label for="kelas_id">Kelas:</label>
                <select name="kelas_id" id="kelas_id" class="form-control" required>
                    <option value="" disabled selected>Pilih Kelas</option>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jurusan_id">Jurusan:</label>
                <select name="jurusan_id" id="jurusan_id" class="form-control" required>
                    <option value="" disabled selected>Pilih Jurusan</option>
                    @foreach ($jurusan as $jurusanItem)
                        <option value="{{ $jurusanItem->id }}">{{ $jurusanItem->nama_jurusan }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Buat Pengguna</button>
        </form>
    </div>
</div>
@endsection
