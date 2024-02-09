@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Daftar Karyawan</div>

        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Karyawan</a>
            </div>
            @if ($karyawan->count() > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Posisi</th>
                            <th>Gaji</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->posisi }}</td>
                                <td>{{ $item->gaji }}</td>
                                <td>
                                    <a href="{{ route('karyawan.edit', ['karyawan' => $item->id]) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('karyawan.destroy', ['karyawan' => $item->id]) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Tidak ada data karyawan.</p>
            @endif
        </div>
    </div>

@endsection
