<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebras Indonesia</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
<!-- 
    <h1>Welcome, {{ $name }}</h1>
    <p>Your Google ID: {{ $googleId }}</p> -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="{{ asset('img/logo-bebras.png') }}" alt="Bebras Indonesia">
            </div>
            <ul class="nav-links">
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/tentang_bebras') }}">Tentang Bebras</a></li>
                <li><a href="sign-in">Sign In</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Gerakan PANDAI</h1>
                <p>Pengajar Era Digital Indonesia</p>
                <p>Supported by <strong>Google.org</strong></p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Bebras Indonesia</p>
    </footer>
</body>
</html>
