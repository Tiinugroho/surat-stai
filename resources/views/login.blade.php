<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | STAI Sulthan Syarif Hasyim</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('adm/dist/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('adm/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('adm/dist/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('adm/dist/assets/css/pages/auth.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>

<body>
    <div id="auth">

        <div class="row vh-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo mb-5">
                        <a href="index.html" class=""><img src="{{ asset('img/logo2.png') }}"
                                alt="Logo" class="w-100 h-100"></a>
                    </div>
                    <h1 class="text-success">Log In</h1>
                    <p class="fs-4 mb-5">Silahkan Login Untuk Masuk.</p>

                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <small class="fs-6"><span class="text-danger">*</span> Gunakan NIM/NIDN untuk username</small>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" id="username" name="username" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" id="password" name="password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button class="btn btn-success btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                    
                </div>
            </div>
        </div>

    </div>
</body>

</html>
