@extends('layouts.app')

@section('title', '住めば都 - 記事投稿')

@section('content')
    <div class="container">
        <h1 class="head">新着記事一覧</h1>
        <div class="articles-block">

            @foreach ($articles as $article)
            <div class="article-block pt-2 pb-2">
                <a href="{{ route('user', ($user[$article->user_id - 1]->user->name)) }}">{{ ($user[$article->user_id - 1]->user->name) }}</a>による記事

                <a href="/articles/{{ $article->id }}" class="d-block title">{{ $article->title }}</a>
                {{ $article->prefecture }} {{ $article->cities }}
            </div>

            @endforeach
        </div>
        @if (Auth::check())
            <button onclick="location.href='/articles/create'" class="btn btn-success rounded-pill mt-5">新規記事投稿</button>
        @else
            <button onclick="location.href='/login'" class="btn btn-success rounded-pill mt-5">新規記事投稿</button>
        @endif
    </div>
@endsection
