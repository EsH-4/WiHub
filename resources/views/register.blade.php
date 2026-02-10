<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun</title>
  <link rel="stylesheet" href="{{ asset('css/github-dark.css') }}">
</head>

<body class="discord-bg discord-auth-page">
  <div class="discord-auth-card animate-fade-in-up">
    <div class="auth-header">
      <h1>Buat Akun Baru</h1>
      <p class="subtitle">Isi formulir berikut untuk mendaftar</p>
    </div>

    @if($errors->any())
      <div class="discord-alert-error animate-fade-in">
        <ul style="margin: 0; padding-left: 1.25rem;">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('register.submit') }}" class="auth-form">
      @csrf

      <div class="discord-form-group">
        <label for="name">Nama Lengkap</label>
        <input
          type="text"
          id="name"
          name="name"
          class="discord-input"
          placeholder="Komar Susanto"
          value="{{ old('name') }}"
          required
          autofocus
        >
      </div>

      <div class="discord-form-group">
        <label for="email">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          class="discord-input"
          placeholder="nama@gmail.com"
          value="{{ old('email') }}"
          required
        >
      </div>

      <div class="discord-form-group">
        <label for="password">Kata Sandi</label>
        <input
          type="password"
          id="password"
          name="password"
          class="discord-input"
          placeholder="Min. 5 karakter"
          required
        >
      </div>

      <button type="submit" class="btn-discord btn-discord-success">
        Daftar
      </button>
    </form>

    <div class="auth-footer">
      <p class="discord-muted" style="font-size: 0.875rem;">
        Sudah punya akun?
        <a href="{{ route('login') }}" class="discord-link">Masuk</a>
      </p>
      <a href="/" class="discord-back-link">← Kembali ke Beranda</a>
    </div>
  </div>
</body>
</html>
