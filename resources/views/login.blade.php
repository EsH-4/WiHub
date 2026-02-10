<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- GitHub Dark Style -->
  <link rel="stylesheet" href="{{ asset('css/github-dark.css') }}">
</head>

<body class="gh-bg">
  <main class="gh-auth-page">
    <section class="gh-card gh-auth-card">

      <!-- Header -->
      <header>
        <h1 class="gh-title">Masuk ke Akun</h1>
        <p class="gh-subtitle">Silakan masukkan email dan kata sandi Anda</p>
      </header>

      <!-- Error -->
      @if($errors->any())
        <div class="gh-alert gh-alert-danger">
          {{ $errors->first() }}
        </div>
      @endif

      <!-- Form -->
      <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <div class="gh-form-group">
          <label for="email" class="gh-label">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            class="gh-input"
            placeholder="nama@contoh.com"
            value="{{ old('email') }}"
            required
            autofocus
          >
        </div>

        <div class="gh-form-group">
          <label for="password" class="gh-label">Kata Sandi</label>
          <input
            type="password"
            id="password"
            name="password"
            class="gh-input"
            placeholder="••••••••"
            required
          >
        </div>

        <button type="submit" class="gh-btn gh-btn-primary gh-btn-block">
          Masuk
        </button>
      </form>

      <!-- Footer -->
      <footer style="margin-top: 1.25rem; text-align: center;">
        <p class="gh-muted">
          Belum punya akun?
          <a href="{{ route('register') }}" class="gh-link">Daftar</a>
        </p>

        <a href="/" class="gh-link" style="font-size: 0.875rem;">
          ← Kembali ke Beranda
        </a>
      </footer>

    </section>
  </main>
</body>
</html>
