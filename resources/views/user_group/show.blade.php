@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Pengguna
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Level</label>
                            <input type="text" class="form-control " name="role" value="{{ $user_group->role }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control " name="nama" value="{{ $user_group->nama }}" readonly>
                        </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('user_group.index') }}" class="btn btn-primary" type="submit" style="margin-left: 1.2rem">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
