@extends('admin.partials.layout')
@section('title', 'Daftar Mahasiswa')

@section('content')
    <div id="main">
        <div class="page-heading">
            <h3>Daftar Mahasiswa</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible show fade">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif


                    <div class="card">
                        <div class="card-header">
                            <h4>Data Mahasiswa</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.user.mahasiswa.create') }}" class="btn btn-primary">
                                    Tambah Mahasiswa
                                </a>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#importModal">
                                    Import Mahasiswa
                                </button>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>TTL</th>
                                            <th>Alamat</th>
                                            <th>Angkatan</th>
                                            <th>Program Studi</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mahasiswas as $index => $mahasiswa)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $mahasiswa->name }}</td>
                                                <td>{{ $mahasiswa->username }}</td>
                                                <td>{{ $mahasiswa->ttl }}</td>
                                                <td>{{ $mahasiswa->alamat }}</td>
                                                <td>{{ $mahasiswa->angkatan }}</td>
                                                <td>{{ $mahasiswa->program_study }}</td>
                                                <td>{{ $mahasiswa->keterangan }}</td>
                                                <td>
                                                    <form
                                                        action="{{ route('admin.user.mahasiswa.destroy', $mahasiswa->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Yakin ingin hapus data ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>

        <!-- Modal Import -->
        <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ route('admin.import.users') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="importModalLabel">Import Mahasiswa</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="file" class="form-label">Pilih File (.xlsx / .csv)</label>
                                <input type="file" name="file" id="file" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Upload & Import</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
