@extends('admin.partials.layout')
@section('title', 'List Mahasiswa')

@section('content')
<main class="main-content">
    <div class="position-relative iq-banner">
        @include('admin.partials.header')
        <div class="iq-navbar-header" style="height: 215px;">
            <div class="container-fluid iq-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h1>Hello, {{ Auth::user()->name }}</h1>
                                <p>We are on a mission to help developers like you build successful projects for FREE.</p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-link btn-soft-light">
                                    <svg class="icon-20"> ... </svg>
                                    Announcements
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iq-header-img">
                <img src="{{ asset('adm/assets/images/dashboard/top-header.png') }}" alt="header" class="img-fluid w-100 h-100 animated-scaleX">
            </div>
        </div>
    </div>

    <div class="container-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Table Mahasiswa</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMahasiswaModal">Tambah Mahasiswa</button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                                <table id="datatable" class="table table-striped" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>TTL</th>
                                        <th>Alamat</th>
                                        <th>Angkatan</th>
                                        <th>Program Studi</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($mahasiswas as $mahasiswa)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $mahasiswa->username }}</td>
                                        <td>{{ $mahasiswa->name }}</td>
                                        <td>{{ $mahasiswa->ttl }}</td>
                                        <td>{{ $mahasiswa->alamat }}</td>
                                        <td>{{ $mahasiswa->angkatan }}</td>
                                        <td>{{ $mahasiswa->program_study }}</td>
                                        <td>{{ $mahasiswa->keterangan }}</td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editMahasiswaModal{{ $mahasiswa->id }}">Edit</button>
                                            <form action="{{ route('admin.mahasiswa.destroy', $mahasiswa->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>

                                    {{-- Modal Edit --}}
                                    <div class="modal fade" id="editMahasiswaModal{{ $mahasiswa->id }}" tabindex="-1" aria-labelledby="editMahasiswaModalLabel{{ $mahasiswa->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <form action="{{ route('admin.mahasiswa.update', $mahasiswa->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Mahasiswa</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row g-3">
                                                            <div class="col-md-6">
                                                                <label class="form-label">Nama</label>
                                                                <input type="text" name="name" class="form-control" value="{{ $mahasiswa->name }}" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">NIM</label>
                                                                <input type="text" name="username" class="form-control" value="{{ $mahasiswa->username }}" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Tempat, Tanggal Lahir</label>
                                                                <input type="text" name="ttl" class="form-control" value="{{ $mahasiswa->ttl }}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Alamat</label>
                                                                <input type="text" name="alamat" class="form-control" value="{{ $mahasiswa->alamat }}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Angkatan</label>
                                                                <input type="text" name="angkatan" class="form-control" value="{{ $mahasiswa->angkatan }}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Program Studi</label>
                                                                <input type="text" name="program_study" class="form-control" value="{{ $mahasiswa->program_study }}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Keterangan</label>
                                                                <input type="text" name="keterangan" class="form-control text-uppercase" value="{{ $mahasiswa->keterangan }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-success">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    @empty
                                    <tr>
                                        <td colspan="9" class="text-center">Data tidak tersedia</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Tambah Mahasiswa --}}
    <div class="modal fade" id="addMahasiswaModal" tabindex="-1" aria-labelledby="addMahasiswaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('admin.mahasiswa.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Mahasiswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">NIM</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tempat, Tanggal Lahir</label>
                                <input type="text" name="ttl" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Angkatan</label>
                                <input type="text" name="angkatan" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Program Studi</label>
                                <input type="text" name="program_study" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control text-uppercase">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
