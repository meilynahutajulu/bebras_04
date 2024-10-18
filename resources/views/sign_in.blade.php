<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun</title>
    <link rel="stylesheet" href="{{ asset('css/sign-in.css') }}">
</head>
<body>
    <div class="register-container">
        <h2>Buat Akun</h2>
        <input type="email" class="form-input" placeholder="Alamat email">
        <button class="form-button">Lanjutkan</button>
        <p>Sudah punya akun? <a href="/login" class="login-link">Masuk</a></p>
        <div class="or-divider">ATAU</div>
        <div class="social-login-button">
            <img src="{{ asset('img/google-icon.png') }}" alt="Google"> Lanjutkan dengan Google
        </div>
        <div class="social-login-button">
            <img src="{{ asset('img/facebook-icon.png')}}" alt="Facebook"> Lanjutkan dengan Facebook
        </div>
        <div class="social-login-button">
            <img src="{{ asset('img/github-icon.png')}}" alt="Github"> Lanjutkan dengan Github
        </div>
    </div>
</body>
</html>
