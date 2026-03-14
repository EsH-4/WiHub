<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Wiki') - Website</title>
  <link rel="stylesheet" href="{{ asset('css/github-dark.css') }}">
</head>

<body class="gh-bg">
  <nav class="gh-nav animate-fade-in">
    <a href="{{ route('articles.index') }}" class="gh-nav-brand">WiHub</a>

    <div class="gh-nav-links">
      <a href="{{ route('articles.index') }}" class="gh-nav-link">All Articles</a>

      @auth
        <a href="{{ route('articles.create') }}" class="gh-nav-link">New Article</a>
        <a href="{{ route('dashboard') }}" class="gh-nav-link">Dashboard</a>

        <form method="POST" action="{{ route('logout') }}" class="gh-nav-form">
          @csrf
          <button type="submit" class="gh-btn gh-btn-danger gh-btn-sm">Logout</button>
        </form>
      @else
        <a href="{{ route('login') }}" class="gh-nav-link">Login</a>
        <a href="{{ route('register') }}" class="gh-nav-link">Register</a>
      @endauth
    </div>
  </nav>

  <main class="gh-container">
    @if(session('success'))
      <div class="gh-alert gh-alert-success animate-fade-in-up">
        {{ session('success') }}
      </div>
    @endif

    @yield('content')
  </main>
</body>
</html>
