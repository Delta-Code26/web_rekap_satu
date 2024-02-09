@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Create New Karyawan</div>

        <div class="card-body">
            <form method="POST" action="{{ route('karyawan.store') }}">
                @csrf

                <div class="form-group row mt-2">
                    <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>

                    <div class="col-md-6">
                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                            name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-2">
                    <label for="posisi" class="col-md-4 col-form-label text-md-right">Posisi</label>

                    <div class="col-md-6">
                        <input id="posisi" type="text" class="form-control @error('posisi') is-invalid @enderror"
                            name="posisi" value="{{ old('posisi') }}" required autocomplete="posisi">

                        @error('posisi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- <div class="form-group row mt-2">
                    <label for="gaji" class="col-md-4 col-form-label text-md-right">Gaji</label>

                    <div class="col-md-6">
                        <input id="gaji" type="number" class="form-control @error('gaji') is-invalid @enderror"
                            name="gaji" value="{{ old('gaji') }}" required autocomplete="gaji">

                        @error('gaji')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> --}}

                <div class="form-group row mb-0  mt-2">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Create Karyawan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
