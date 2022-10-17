@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Jenis barang
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jenis_barang.update', $jenis_barang->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" class="form-control  @error('nama_barang') is-invalid @enderror"
                                    name="nama_barang" value="{{ $jenis_barang->nama_barang }}">
                                @error('nama_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Ketahanan Barang</label>
                                <input type="text" class="form-control  @error('ketahanan') is-invalid @enderror"
                                    name="ketahanan" value="{{ $jenis_barang->ketahanan }}">
                                @error('ketahanan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lama Pemakaian</label>
                                <input type="text" class="form-control  @error('lama_pemakaian') is-invalid @enderror"
                                    name="lama_pemakaian" value="{{ $jenis_barang->lama_pemakaian }}">
                                @error('lama_pemakain')
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
