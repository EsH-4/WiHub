<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - {{ $user->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/github-dark.css') }}">
</head>

<body class="gh-bg">
    <div class="gh-page">

        <!-- TOP BAR -->
        <div style="display:flex; justify-content: space-between; align-items:center; margin-bottom: 16px;">
            
            <a href="{{ route('dashboard') }}" class="gh-btn gh-btn-secondary">
                ← Back
            </a>

            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="gh-btn gh-btn-danger">
                        Logout
                    </button>
                </form>
            @endauth

        </div>

        <!-- USER PROFILE -->
        <div class="gh-article-card animate-fade-in-up">
            <h1 class="gh-h1">{{ $user->name }}</h1>

            <p class="gh-muted">
                Joined {{ $user->created_at?->format('d M Y') }}
                • {{ $articles->count() }} articles
            </p>
        </div>

        <!-- ARTICLES -->
        <div class="animate-fade-in-up animate-delay-1">
            <h2 class="gh-h1" style="font-size: 20px; margin-bottom: 16px;">
                Articles by {{ $user->name }}
            </h2>

            @forelse ($articles as $article)
                <div class="gh-article-card">
                    <h3 class="gh-article-title">
                        <a href="{{ route('articles.show', $article->id) }}">
                            {{ $article->title }}
                        </a>
                    </h3>

                    <p class="gh-article-meta">
                        {{ $article->created_at?->format('d M Y') }}
                    </p>

                    <p class="gh-article-excerpt">
                        {{ \Illuminate\Support\Str::limit($article->content, 150) }}
                    </p>

                    <a href="{{ route('articles.show', $article->id) }}" class="gh-readmore">
                        Read more →
                    </a>
                </div>
            @empty
                <div class="gh-empty">
                    Belum ada artikel.
                </div>
            @endforelse
        </div>

    </div>
</body>
</html>
