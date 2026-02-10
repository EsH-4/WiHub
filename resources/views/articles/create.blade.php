@extends('layouts.app')

@section('title', 'Buat Artikel Baru')

@section('content')
<div class="discord-card animate-fade-in-up" style="max-width: 700px;">
    <h1 style="color: #F2F3F5; margin-bottom: 1.5rem; font-size: 1.5rem;">Buat Artikel Baru</h1>

    @if($errors->any())
        <div class="discord-alert-error">
            <ul style="margin: 0; padding-left: 1.25rem;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('articles.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" id="title" name="title" class="discord-input" value="{{ old('title') }}" placeholder="Judul artikel" required autofocus>
        </div>
        <div class="form-group">
            <label for="content">Konten</label>
            <textarea id="content" name="content" class="discord-input" placeholder="Tulis isi artikel di sini..." required>{{ old('content') }}</textarea>
        </div>
        <div style="display: flex; gap: 0.75rem;">
            <button type="submit" class="btn-discord btn-discord-success">Simpan Artikel</button>
            <a href="{{ route('articles.index') }}" class="btn-discord btn-discord-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection
