@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Tambah Hasil Panen Sawit Baru</div>
        <div class="card-body">
            <form method="POST" action="{{ route('hasil-panen-sawit.store') }}">
                @csrf
                <div class="form-group row mt-2">
                    <label for="tanggal_panen" class="col-md-4 col-form-label text-md-right">Tanggal
                        Panen</label>
                    <div class="col-md-6">
                        <input id="tanggal_panen" type="date"
                            class="form-control @error('tanggal_panen') is-invalid @enderror" name="tanggal_panen"
                            value="{{ old('tanggal_panen') }}" required>
                        @error('tanggal_panen')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="jumlah_tandan" class="col-md-4 col-form-label text-md-right">Jumlah
                        Tandan</label>
                    <div class="col-md-6">
                        <input id="jumlah_tandan" type="number"
                            class="form-control @error('jumlah_tandan') is-invalid @enderror" name="jumlah_tandan"
                            value="{{ old('jumlah_tandan') }}" required>
                        @error('jumlah_tandan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="berat_tandan" class="col-md-4 col-form-label text-md-right">Berat Tandan</label>
                    <div class="col-md-6">
                        <input id="berat_tandan" type="number"
                            class="form-control @error('berat_tandan') is-invalid @enderror" name="berat_tandan"
                            value="{{ old('berat_tandan') }}" required>
                        @error('berat_tandan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="karyawan_id" class="col-md-4 col-form-label text-md-right">ID Karyawan</label>
                    <div class="col-md-6">
                        <input id="karyawan_id" type="text"
                            class="form-control @error('karyawan_id') is-invalid @enderror" name="karyawan_id"
                            value="{{ old('karyawan_id') }}" required>
                        @error('karyawan_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Tambah Data
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
