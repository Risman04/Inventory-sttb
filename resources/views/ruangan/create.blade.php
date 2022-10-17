@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Ruangan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('ruangan.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Ruangan</label>
                                <input type="text" class="form-control  @error('nama_ruangan') is-invalid @enderror"
                                    name="nama_ruangan">
                                @error('nama_ruangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kapasitas Ruangan</label>
                                <input type="text" class="form-control  @error('kapasitas_ruangan') is-invalid @enderror"
                                    name="kapasitas_ruangan">
                                @error('kapasitas_ruangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Gedung</label>
                                <input type="text" class="form-control  @error('gedung') is-invalid @enderror"
                                    name="gedung">
                                @error('gedung')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lokasi</label>
                                <input type="text" class="form-control  @error('lokasi') is-invalid @enderror"
                                    name="lokasi">
                                @error('lokasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
