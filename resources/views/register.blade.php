<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <link rel="stylesheet" href="{{ asset('css/github-dark.css') }}">
</head>

<body class="discord-bg discord-auth-page" style="min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 24px;">
  <div class="discord-auth-card animate-fade-in-up" style="margin: 0 auto;">
    <div class="auth-header">
      <h1>Create Account</h1>
      <p class="subtitle">Fill in the form below to register</p>
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
        <label for="name">Full Name</label>
        <input
          type="text"
          id="name"
          name="name"
          class="discord-input"
          placeholder="John Doe"
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
          placeholder="you@example.com"
          value="{{ old('email') }}"
          required
        >
      </div>

      <div class="discord-form-group">
        <label for="password">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          class="discord-input"
          placeholder="Min. 5 characters"
          required
        >
      </div>

      <button type="submit" class="btn-discord btn-discord-success">
        Register
      </button>
    </form>

    <div class="auth-footer">
      <p class="discord-muted" style="font-size: 0.875rem;">
        Already have an account?
        <a href="{{ route('login') }}" class="discord-link">Login</a>
      </p>
      <a href="/" class="discord-back-link">← Back to Home</a>
    </div>
  </div>
</body>
</html>
