@extends('layouts.app')

@section('title', 'Edit: ' . $article->title)

@section('content')
<link rel="stylesheet" href="{{ asset('css/github-dark.css') }}">
<div class="gh-page">
  <div class="gh-form-card animate-fade-in-up">

    <h1 class="gh-h1 gh-form-title">Edit Article</h1>

    @if($errors->any())
      <div class="gh-alert gh-alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('articles.update', $article) }}">
      @csrf
      @method('PUT')

      <div class="gh-form-group">
        <label for="title" class="gh-label">Title</label>
        <input
          type="text"
          id="title"
          name="title"
          class="gh-input"
          value="{{ old('title', $article->title) }}"
          required
          autofocus
        >
      </div>

      <div class="gh-form-group">
        <label for="content" class="gh-label">Content</label>
        <textarea
          id="content"
          name="content"
          class="gh-textarea"
          required
        >{{ old('content', $article->content) }}</textarea>
      </div>

      <div class="gh-form-actions">
        <button type="submit" class="gh-btn gh-btn-primary">
          Save Changes
        </button>

        <a href="{{ route('articles.show', $article) }}" class="gh-btn gh-btn-secondary">
          Cancel
        </a>
      </div>
    </form>

  </div>
</div>
@endsection
