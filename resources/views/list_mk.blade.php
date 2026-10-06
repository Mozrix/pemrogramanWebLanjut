@extends('layout.app')

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Daftar Mata Kuliah</h1>
        @if (!empty($description))
            <p style="color: var(--text-muted); font-size: 0.9rem; margin-top: 0.25rem;">
                {{ $description }}
            </p>
        @endif
    </div>
    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">+ Tambah Mata Kuliah</a>
</div>

<div class="card">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th style="width: 80px; text-align: center;">No</th>
                    <th>Nama Mata Kuliah</th>
                    <th style="width: 130px; text-align: center;">SKS</th>
                    <th style="width: 130px; text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mks as $mk)
                    <tr>
                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                        <td><strong>{{ $mk->nama_mk }}</strong></td>
                        <td style="text-align: center;">
                            <span class="badge badge-sks">{{ $mk->sks }} SKS</span>
                        </td>
                        <td style="text-align: center;" class="flex items-stretch justify-center gap-2">
                            <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus mata kuliah ini?')">Hapus</button>
                            </form>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" style="text-align: center; color: var(--text-muted); padding: 2.5rem 1rem;">
                            Belum ada data mata kuliah.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

