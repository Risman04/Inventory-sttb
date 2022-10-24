@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Jenis Barang
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control " name="nama_barang" value="{{ $jenis_barang->nama_barang }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Merk</label>
                            <input type="text" class="form-control " name="merk" value="{{ $jenis_barang->merk }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ketahanan</label>
                            <input type="text" class="form-control " name="ketahanan" value="{{ $jenis_barang->ketahanan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lama Pemakaian</label>
                            <input type="text" class="form-control " name="lama_pemakaian" value="{{ $jenis_barang->lama_pemakaian }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="text" class="form-control " name="jumlah" value="{{ $jenis_barang->jumlah }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat</label>
                            <input type="text" class="form-control " name="tempat" value="{{ $jenis_barang->tempat }}" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('jenis_barang.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
