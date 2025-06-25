@extends('admin.partials.layout')
@section('title', 'Daftar Jenis Surat')

@section('content')
    <div id="main">
        <div class="page-heading">
            <h3>Daftar Jenis Surat</h3>
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
                            <h4>Data Jenis Surat</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.surat.jenis.create') }}" class="btn btn-primary">
                                    Tambah Jenis Surat
                                </a>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Jenis Surat</th>
                                            <th>Kode Jenis Surat</th>
                                            <th>Deskripsi</th>
                                            <th>Template Surat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jenisSurat as $index => $surat)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $surat->nama_surat }}</td>
                                                <td>{{ $surat->kode_surat }}</td>
                                                <td>{{ $surat->deskripsi }}</td>
                                                <td>{{ $surat->file_template }}</td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <a href="{{ route('admin.surat.jenis.edit', $surat->id) }}"
                                                            class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </a>
                                                        <form
                                                            action="{{ route('admin.surat.jenis.destroy', $surat->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Yakin ingin hapus data ini?')"
                                                            class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
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

    </div>
@endsection
