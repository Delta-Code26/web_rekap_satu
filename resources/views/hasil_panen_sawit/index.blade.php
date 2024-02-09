@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Daftar Hasil Panen Sawit</div>

        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('hasil-panen-sawit.create') }}" class="btn btn-primary">Tambah Hasil Panen
                    Sawit
                    Baru</a>
            </div>
            @if ($hasilPanenSawit->count() > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tanggal Panen</th>
                            <th>Jumlah Tandan</th>
                            <th>Berat Tandan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hasilPanenSawit as $item)
                            <tr>
                                <td>{{ $item->tanggal_panen->format('d/m/Y') }}</td>
                                <td>{{ $item->jumlah_tandan }}</td>
                                <td>{{ $item->berat_tandan }}</td>
                                <td>
                                    <a href="{{ route('hasil-panen-sawit.edit', ['hasilPanenSawit' => $item->id]) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('hasil-panen-sawit.destroy', ['hasilPanenSawit' => $item->id]) }}"
                                        method="POST" style="display: inline;">
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
                <p>Tidak ada data hasil panen sawit.</p>
            @endif
        </div>
    </div>

@endsection
