@extends('layout.app')

@section('content')
<div class="page-header">
    <h1 class="page-title">Daftar Pengguna</h1>
    <a href="{{ route('user.create') }}" class="btn btn-primary">+ Tambah Pengguna</a>
</div>

<div class="card">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->npm }}</td>
                        <td>{{ $user->nama_kelas }}</td>
                        <td>{{ $user->nama_jurusan }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center; color: var(--text-muted); padding: 2rem;">
                            Belum ada data pengguna.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection