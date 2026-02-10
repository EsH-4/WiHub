@extends('layouts.app')

@section('title', 'Semua Artikel')

@section('content')
<link rel="stylesheet" href="{{ asset('css/github-dark.css') }}">
<div class="gh-page">
  <div class="gh-page-header animate-fade-in-up">
    <h1 class="gh-h1">Semua Artikel</h1>

    @auth
      <a href="{{ route('articles.create') }}" class="gh-btn gh-btn-primary">
        + Buat Artikel Baru
      </a>
    @endauth
  </div>

  <form method="GET" action="{{ route('articles.index') }}" class="gh-search animate-fade-in-up animate-delay-1">
    <input
      type="text"
      name="q"
      value="{{ request('q') }}"
      placeholder="Cari artikel..."
      class="gh-input"
    >
    <button type="submit" class="gh-btn gh-btn-secondary">
      Cari
    </button>
  </form>

  @forelse($articles as $article)
    <article class="gh-article-card animate-fade-in-up" style="animation-delay: {{ min($loop->index * 0.08, 0.5) }}s;">
      <h2 class="gh-article-title">
        <a href="{{ route('articles.show', $article) }}" class="gh-link">
          {{ $article->title }}
        </a>
      </h2>

      <p class="gh-article-meta">
        Oleh {{ $article->user->name }} · {{ $article->created_at->format('d M Y') }}
      </p>

      <p class="gh-article-excerpt">
        {{ Str::limit(strip_tags($article->content), 150) }}
      </p>

      <a href="{{ route('articles.show', $article) }}" class="gh-link gh-readmore">
        Baca selengkapnya →
      </a>
    </article>
  @empty
    <div class="gh-empty animate-fade-in-up">
      <p>Belum ada artikel.</p>
      @auth
        <a href="{{ route('articles.create') }}" class="gh-btn gh-btn-primary">
          Buat Artikel Pertama
        </a>
      @endauth
    </div>
  @endforelse

  @if($articles->hasPages())
    <div class="gh-pagination animate-fade-in">
      {{ $articles->withQueryString()->links() }}
    </div>
  @endif
</div>
@endsection
