@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Ruangan
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama ruangan</label>
                            <input type="text" class="form-control " name="nama_ruangan" value="{{ $ruangan->nama_ruangan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">kapasitas ruangan</label>
                            <input type="text" class="form-control " name="kapasitas_ruangan" value="{{ $ruangan->kapasitas_ruangan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gedung</label>
                            <input type="text" class="form-control " name="gedung" value="{{ $ruangan->gedung }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <input type="text" class="form-control " name="lokasi" value="{{ $ruangan->lokasi }}" readonly>
                        </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('ruangan.index') }}" class="btn btn-primary" type="submit" style="margin-left: 1.2rem">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
