@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<link rel="stylesheet" href="{{ asset('css/github-dark.css') }}">
<div class="gh-page">
  <div class="gh-dashboard-card animate-fade-in-up">
    <h1 class="gh-h1">Dashboard</h1>

    <p class="gh-dashboard-subtitle">
      Welcome, {{ auth()->user()->name ?? auth()->user()->email }}!
    </p>

    <div class="gh-dashboard-links">
      <a href="{{ route('articles.index') }}" class="gh-link">View All Articles</a>
      <span class="gh-separator">·</span>
      <a href="{{ route('articles.create') }}" class="gh-link">Create New Article</a>
    </div>

    <form method="POST" action="{{ route('logout') }}" class="gh-dashboard-logout">
      @csrf
      <button type="submit" class="gh-btn gh-btn-danger">Logout</button>
    </form>
  </div>
</div>
@endsection
