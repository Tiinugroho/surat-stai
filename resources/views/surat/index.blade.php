@extends('partials.layout')
@section('title', 'Surat Saya')

@section('content')
    <main class="main">

        <section id="hero" class="hero section dark-background vh-100">

            <img src="{{ asset('frontend/assets/img/world-dotted-map.png') }}" alt="" class="hero-bg" data-aos="fade-in">

            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Daftar Pengajuan Surat Saya</h2>
                    <p>Berikut adalah daftar surat yang pernah kamu ajukan beserta status prosesnya.</p>
                </div>

                <div class="table-responsive" data-aos="fade-up" data-aos-delay="200">
                    <table class="table table-hover table-bordered">
                        <thead class="table-success">
                            <tr>
                                <th>No</th>
                                <th>Jenis Surat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($surats as $index => $surat)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $surat->jenisSurat->nama_surat }}</td>
                                    <td>
                                        <!-- Tombol Detail -->
                                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#detailModal{{ $surat->id }}">
                                            <i class="bi bi-eye"></i> Detail
                                        </button>

                                        <!-- Tombol Print -->
                                        @if ($surat->file_surat_jadi)
                                            <a href="{{ asset('storage/surat_jadi/' . $surat->file_surat_jadi) }}" target="_blank"
                                                class="btn btn-sm btn-primary">
                                                <i class="bi bi-printer"></i> Print
                                            </a>
                                        @else
                                            <button class="btn btn-sm btn-secondary" disabled>
                                                <i class="bi bi-printer"></i> Print
                                            </button>
                                        @endif
                                    </td>
                                </tr>

                                <!-- Modals Detail -->

                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Belum ada pengajuan surat.</td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>
            </div>

            <div class="modal fade" id="detailModal{{ $surat->id }}" tabindex="-1"
                aria-labelledby="modalLabel{{ $surat->id }}" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title text-black" id="modalLabel{{ $surat->id }}">Detail Surat</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body text-black">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Jenis Surat</th>
                                    <td>{{ $surat->jenisSurat->nama_surat }}</td>
                                </tr>
                                <tr>
                                    <th>Keperluan</th>
                                    <td>{{ $surat->keperluan }}</td>
                                </tr>
                                <tr>
                                    <th>Status Kaprodi</th>
                                    <td>
                                        <span class="badge 
                                    @if ($surat->status_kaprodi == 'proses') bg-warning
                                    @elseif($surat->status_kaprodi == 'disetujui') bg-success
                                    @elseif($surat->status_kaprodi == 'ditolak') bg-danger
                                    @else bg-secondary @endif">
                                            {{ ucfirst($surat->status_kaprodi ?? 'belum') }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status Lektor</th>
                                    <td>
                                        <span class="badge 
                                    @if ($surat->status_lektor == 'proses') bg-warning
                                    @elseif($surat->status_lektor == 'disetujui') bg-success
                                    @elseif($surat->status_lektor == 'ditolak') bg-danger
                                    @else bg-secondary @endif">
                                            {{ ucfirst($surat->status_lektor ?? 'belum') }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Dibuat Tanggal</th>
                                    <td>{{ $surat->created_at->format('d M Y') }}</td>
                                </tr>
                                @if ($surat->file_surat_jadi)
                                    <tr>
                                        <th>File Surat Jadi</th>
                                        <td>
                                            <a href="{{ asset('storage/surat_jadi/' . $surat->file_surat_jadi) }}"
                                                class="btn btn-sm btn-primary" target="_blank">Download</a>
                                        </td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
@endsection