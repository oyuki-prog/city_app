@extends('layouts.app')

@section('title', '住めば都 - ユーザーページ')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('ログインに成功しました') }}
                    <div class="button-group d-flex mt-3">
                        <a href="{{ route('articles.index') }}" class="btn btn-primary d-block">{{ __('記事一覧を見る') }}</a>
                        <a href="{{ route('articles.create') }}" class="btn btn-success d-block ml-3">{{ __('記事を投稿する') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
