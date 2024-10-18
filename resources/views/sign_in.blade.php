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
        <form action="/register" method="POST"> <!-- Assuming there's a register endpoint -->
            <input type="email" class="form-input" placeholder="Alamat email" required aria-label="Alamat email">
            <button type="submit" class="form-button">Lanjutkan</button>
        </form>
    
        <div class="or-divider">ATAU</div>
    
        <div class="social-login">
            <a href="/bebras/redirect" class="social-login-button">
                <img src="img/google-icon.png" alt="Google logo" class="social-icon">
                <span>Lanjutkan dengan Google</span>
            </a>
    
            <a href="/facebook-login" class="social-login-button">
                <img src="img/facebook-icon.png" alt="Facebook logo" class="social-icon">
                <span>Lanjutkan dengan Facebook</span>
            </a>
    
            <a href="/github-login" class="social-login-button">
                <img src="img/github-icon.png" alt="GitHub logo" class="social-icon">
                <span>Lanjutkan dengan GitHub</span>
            </a>
        </div>
    
        <a href="/login" class="login-link">Sudah punya akun? Masuk</a>
    </div>
</body>
</html>
