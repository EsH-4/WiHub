<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/github-dark.css') }}">
</head>
<body class="discord-bg" style="min-height: 100vh; display: flex; align-items: center; justify-content: center;">
    <div class="discord-card animate-fade-in-up" style="max-width: 520px; width: 100%; margin: 2rem;">
        <div class="welcome-hero">
            <h1>Welcome to the Website</h1>
            <p>
                Ini adalah website sederhana yang dibuat menggunakan Laravel.
                Silakan masuk atau daftar untuk melanjutkan.
            </p>
            <div class="welcome-actions">
                <a href="{{ route('articles.index') }}" class="btn-welcome-primary">Lihat Artikel</a>
                <a href="{{ route('login') }}" class="btn-welcome-secondary">Login</a>
                <a href="{{ route('register') }}" class="btn-welcome-secondary">Daftar</a>
            </div>
        </div>
    </div>
</body>
</html>
