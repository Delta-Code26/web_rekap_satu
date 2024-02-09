@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Edit Hasil Panen Sawit</div>

        <div class="card-body">
            <form method="POST"
                action="{{ route('hasil-panen-sawit.update', ['hasilPanenSawit' => $hasilPanenSawit->id]) }}">
                @csrf
                @method('PUT')

                <div class="form-group row mt-2">
                    <label for="tanggal_panen" class="col-md-4 col-form-label text-md-right">Tanggal
                        Panen</label>

                    <div class="col-md-6 mt-2">
                        <input id="tanggal_panen" type="date"
                            class="form-control @error('tanggal_panen') is-invalid @enderror" name="tanggal_panen"
                            value="{{ old('tanggal_panen', $hasilPanenSawit->tanggal_panen->format('Y-m-d')) }}" required>

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
                            value="{{ old('jumlah_tandan', $hasilPanenSawit->jumlah_tandan) }}" required>

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
                            value="{{ old('berat_tandan', $hasilPanenSawit->berat_tandan) }}" required>

                        @error('berat_tandan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Update Hasil Panen Sawit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
