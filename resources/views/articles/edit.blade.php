@extends('layouts.app')

@section('title', '住めば都 - 記事編集')

@section('content')
    {{-- {{ dd($article->user_id) }} --}}
    <div class="container">
        <h1 class="title">記事編集</h1>
        @if ($errors->any())
            <div class="error">
                <p>
                    <b>{{ count($errors) }}件のエラーがあります。</b>
                </p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/articles/{{ $article->id }}" method="POST" class="mt-5">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" name="title" value="{{ old('title', $article->title) }}">
            </div>
            <div class="d-flex">
                <div class="w-50 form-group">
                    <label for="prefecture">県</label>
                    <input type="text" name="prefecture" value="{{ old('prefecture', $article->prefecture) }}">
                </div>
                <div class="w-50">
                    <label for="cities">市町村</label>
                    <input type="text" name="cities" value="{{ old('cities', $article->cities) }}">
                </div>
            </div>
            <div class="form-group">
                <label for="tag">タグ</label>
                <input type="text" name="tag" value="{{ old('tag', $article->tag) }}">
            </div>
            <div class="form-group">
                <label for="body">本文</label>
                <textarea name="body" rows="20">{{ old('body', $article->body) }}</textarea>
            </div>
            <input type="submit" value="更新する" class="btn btn-success rounded-pill ml-auto d-block">
        </form>
    </div>
@endsection
