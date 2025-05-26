@extends('partials.layout')
@section('title','Login')
@section('content')
<main class="main">

    <!-- Login Form Section -->
    <section id="hero" class="hero section py-5 dark-background">
        <img src="{{ asset('frontend/assets/img/world-dotted-map.png')}}" alt="" class="hero-bg" data-aos="fade-in">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <!-- Login Card -->
                    <div class="card shadow-lg rounded-4 mt-5" data-aos="fade-up">
                        <div class="card-body">
                            <h2 class="text-center text-dark mb-4">Login</h2>

                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="mb-4">
                                    <label for="username"
                                        class="form-label @error('username') text-danger @enderror">Username</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                                        id="username" name="username" placeholder="Masukkan Username" required>
                                    @error('username')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @else
                                    <span style="font-size: 0.8rem; font-weight: 600;"">* Username NIM untuk Mahasiswa, NIDN untuk
                                        Pegawai/Dosen</span>
                                    @enderror
                                </div>

                                <div class=" mb-4">
                                        <label for="password"
                                            class="form-label @error('password') text-danger @enderror">Kata
                                            Sandi</label>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" id="password"
                                            name="password" placeholder="Masukkan kata sandi" required>
                                        @error('username')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success">Login</button>
                                </div>
                            </form>

                            <!-- <p class="mt-3 text-center">Belum punya akun? <a href="#">Daftar di sini</a></p> -->
                        </div>
                    </div>
                    <!-- End Login Card -->

                </div>
            </div>
        </div>
    </section><!-- /Login Form Section -->

</main>

@endsection