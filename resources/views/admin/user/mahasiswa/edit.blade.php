@extends('admin.partials.layout')
@section('title', 'Edit Mahasiswa')

@section('content')
<div id="main">
    <div class="page-heading">
        <h3>Edit Mahasiswa</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Edit Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.user.mahasiswa.update', $mahasiswa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control" value="{{ $mahasiswa->name }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" value="{{ $mahasiswa->username }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label>Tempat, Tanggal Lahir</label>
                                <input type="text" name="ttl" class="form-control" value="{{ $mahasiswa->ttl }}">
                            </div>

                            <div class="form-group mb-3">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control">{{ $mahasiswa->alamat }}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label>Angkatan</label>
                                <input type="text" name="angkatan" class="form-control" value="{{ $mahasiswa->angkatan }}">
                            </div>

                            <div class="form-group mb-3">
                                <label>Program Studi</label>
                                <input type="text" name="program_study" class="form-control" value="{{ $mahasiswa->program_study }}">
                            </div>

                            <div class="form-group mb-3">
                                <label>Keterangan</label>
                                <textarea name="keterangan" class="form-control">{{ $mahasiswa->keterangan }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('admin.user.mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
