@extends('layouts.app')

@section('title', '住めば都 - ' . $article->title)

@section('content')
    <div class="container">
        <a href="{{ route('user', ($user[$article->user_id - 1]->user->name)) }}">{{ ($user[$article->user_id - 1]->user->name) }}</a>による記事
        <h1 class="title my-4">{{ $article->title }}</h1>
        <p>
            {{ $article->prefecture . '  ' }}
            {{ $article->cities }}
        </p>
        <p>{{ $article->tag }}</p>
        <p class="mt-5 mb-5">{{ $article->body }}</p>

        <div class="button-group d-flex">
            <button type="button" onclick="location.href='/articles'" class="btn btn-primary rounded-pill">記事一覧へ戻る</button>
            @if ($article->user_id == $user_id)
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-success rounded-pill ml-3">編集する</a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="記事を削除する" onclick="if(!confirm('本当に削除しますか？')){return false};" class="btn btn-danger rounded-pill ml-3">
                </form>
            @endif
        </div>
    </div>
@endsection
