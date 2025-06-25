@extends('partials.layout')
@section('title','Beranda')
@section('content')
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background vh-100">

        <img src="{{ asset('frontend/assets/img/world-dotted-map.png')}}" alt="" class="hero-bg" data-aos="fade-in">

        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">Solusi Cepat & Cerdas untuk Surat Menyurat Kampus</h2>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Kelola surat masuk dan keluar kampus Anda dengan lebih mudah, aman, dan efisien. Aplikasi ini
                        dirancang khusus untuk kebutuhan administrasi perguruan tinggi—otomatis, cepat, dan tepat
                        sasaran. Temukan surat Anda hanya dalam hitungan detik.
                    </p>

                    <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        <input type="text" class="form-control" placeholder="Masukkan Nomor Surat">
                        <button type="submit" class="btn btn-success px-5">Cari</button>
                    </form>


                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="232"
                                    data-purecounter-duration="0" class="purecounter">232</span>
                                <p>Instansi & Fakultas Telah Terlayani</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                    data-purecounter-duration="0" class="purecounter">521</span>
                                <p>Surat Diterbitkan Setiap Minggu</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="1453"
                                    data-purecounter-duration="0" class="purecounter">1453</span>
                                <p>Permintaan Diproses dengan Cepat</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="0"
                                    class="purecounter">32</span>
                                <p>Staf Profesional Siap Melayani</p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{ asset('frontend/assets/img/hero-img.svg')}}" class="img-fluid mb-3 mb-lg-0" alt="">
                </div>

            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->

    <!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section vh-100">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                    data-aos-delay="200">
                    <img src="{{ asset('img/01.jpeg')}}" class="img-fluid" alt="">
                    <a href="https://youtu.be/-yzsM09CnxM?si=Vk_oXKS6Qh0Q3qBp" class="glightbox pulsating-play-btn"></a>
                </div>

                <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                    <h3>Tentang Kami</h3>
                    <p>
                        Kami hadir sebagai solusi modern dalam pengelolaan surat menyurat di lingkungan perguruan
                        tinggi. Dengan sistem yang cepat, transparan, dan terintegrasi, kami membantu mahasiswa, dosen,
                        dan staf kampus mengurus surat-surat penting dengan lebih mudah—di mana saja dan kapan saja.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h5>Terintegrasi dan Mudah Digunakan</h5>
                                <p>
                                    Aplikasi kami dirancang khusus untuk memenuhi kebutuhan administrasi kampus secara
                                    efisien—tanpa ribet, tanpa antri.
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-fullscreen-exit"></i>
                            <div>
                                <h5>Proses Cepat, Status Real-Time</h5>
                                <p>
                                    Pantau proses surat Anda secara langsung. Dapatkan notifikasi dan update setiap
                                    langkahnya hingga selesai.
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-broadcast"></i>
                            <div>
                                <h5>Dukungan Tim Profesional</h5>
                                <p>
                                    Tim kami siap membantu dengan pelayanan terbaik—mulai dari konsultasi hingga
                                    penyelesaian surat yang kompleks.
                                </p>
                            </div>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Pertanyaan Mahasiswa</span>
            <h2>FAQ Seputar Pengajuan Surat</h2>
            <p>Bingung soal cara bikin surat aktif kuliah, cuti, atau magang? Tenang, semua jawaban yang kamu butuhkan
                ada di sini.</p>
        </div>


        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <div class="faq-container">

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Bagaimana cara mengajukan surat secara online?</h3>
                            <div class="faq-content">
                                <p>
                                    Sangat mudah! Cukup login ke aplikasi, pilih jenis surat yang kamu butuhkan, isi
                                    formulir pengajuan, dan unggah dokumen pendukung. Setelah itu, tinggal tunggu
                                    verifikasi dari pihak kampus.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Dokumen apa saja yang perlu disiapkan?</h3>
                            <div class="faq-content">
                                <p>
                                    Tergantung jenis surat. Untuk Surat Aktif Kuliah cukup KRS dan KTM. Untuk Surat
                                    Penelitian, kamu perlu proposal dan surat izin dari dosen pembimbing. Semua sudah
                                    dijelaskan di setiap form pengajuan.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Berapa lama proses pembuatan surat?</h3>
                            <div class="faq-content">
                                <p>
                                    Rata-rata surat selesai dalam waktu 1–3 hari kerja. Namun bisa lebih cepat
                                    tergantung antrian dan kelengkapan dokumen yang kamu kirim.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Bagaimana saya tahu status surat saya?</h3>
                            <div class="faq-content">
                                <p>
                                    Kamu bisa cek status langsung melalui dashboard. Notifikasi juga akan dikirim ke
                                    email atau aplikasi saat surat sudah selesai dan siap diunduh.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apakah saya bisa mengambil surat fisik?</h3>
                            <div class="faq-content">
                                <p>
                                    Tentu! Selain versi digital, kamu juga bisa memilih untuk mengambil surat fisik di
                                    bagian Tata Usaha setelah mendapatkan notifikasi bahwa surat telah selesai diproses.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>


                    </div>

                </div>

            </div>

        </div>
        <div class="modal fade" id="modalPengajuan" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('welcome.surat.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Ajukan Surat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="jenis_surat_id" id="jenisSuratId">
                        <div class="mb-3">
                            <label>Jenis Surat</label>
                            <input type="text" id="jenisSuratNama" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label>Keperluan</label>
                            <textarea name="keperluan" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Ajukan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.open-form');

            buttons.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const jenisId = this.getAttribute('data-id');
                    const jenisNama = this.getAttribute('data-nama');

                    document.getElementById('jenisSuratId').value = jenisId;
                    document.getElementById('jenisSuratNama').value = jenisNama;

                    let modal = new bootstrap.Modal(document.getElementById('modalPengajuan'));
                    modal.show();
                });
            });
        });
    </script>

    </section><!-- /Faq Section -->

</main>
@endsection