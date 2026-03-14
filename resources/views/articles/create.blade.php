@extends('layouts.app')

@section('title', 'Create New Article')

@section('content')
<div class="gh-page">
    <div class="discord-card animate-fade-in-up" style="max-width: 700px;">
        <h1 class="gh-h1" style="margin-bottom: 1.5rem;">Create New Article</h1>

        @if($errors->any())
            <div class="gh-alert gh-alert-danger animate-fade-in">
                <ul style="margin: 0; padding-left: 1.25rem;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('articles.store') }}">
            @csrf

            <div class="gh-form-group">
                <label for="title">Title</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    class="gh-input"
                    value="{{ old('title') }}"
                    placeholder="Article title"
                    required
                    autofocus
                >
            </div>

            <div class="gh-form-group">
                <label for="content">Content</label>
                <textarea
                    id="content"
                    name="content"
                    class="gh-textarea auto-resize"
                    placeholder="Write your article content here..."
                    required
                >{{ old('content') }}</textarea>
            </div>

            <div class="gh-form-actions">
                <button type="submit" class="gh-btn gh-btn-primary">
                    Save Article
                </button>
                <a href="{{ route('articles.index') }}" class="gh-btn gh-btn-secondary">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>

<style>
.auto-resize {
    resize: none;
    overflow: hidden;
    min-height: 140px;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const textarea = document.getElementById("content");

    function autoResize() {
        textarea.style.height = "auto";
        textarea.style.height = textarea.scrollHeight + "px";
    }

    textarea.addEventListener("input", autoResize);

    autoResize();
});
</script>

@endsection