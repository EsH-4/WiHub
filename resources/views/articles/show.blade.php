@extends('layouts.app')

@section('title', $article->title)

@section('content')
<link rel="stylesheet" href="{{ asset('css/github-dark.css') }}">
<div class="gh-page">
  <article class="gh-article-detail animate-fade-in-up">
    <h1 class="gh-article-detail-title">
      {{ $article->title }}
    </h1>

    <p class="gh-article-detail-meta">
      Oleh {{ $article->user->name }} ·
      Terakhir diperbarui {{ $article->updated_at->format('d M Y H:i') }}
    </p>

    <div class="gh-article-detail-content">
      {{ $article->content }}
    </div>

    @auth
      @if($article->user_id === auth()->id())
        <div class="gh-article-actions">
          <a href="{{ route('articles.edit', $article) }}" class="gh-btn gh-btn-secondary">
            Edit
          </a>

          <form
            method="POST"
            action="{{ route('articles.destroy', $article) }}"
            onsubmit="return confirm('Yakin ingin menghapus artikel ini?');"
          >
            @csrf
            @method('DELETE')
            <button type="submit" class="gh-btn gh-btn-danger">
              Hapus
            </button>
          </form>
        </div>
      @endif
    @endauth
  </article>

  <a href="{{ route('articles.index') }}" class="gh-back-link animate-fade-in-up">
    ← Kembali ke Daftar Artikel
  </a>
</div>
@endsection
