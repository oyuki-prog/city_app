@extends('layouts.app')

@section('title', '住めば都 - ' . $user->name . 'のページ')

@section('content')

    <div class="container">
        <div class="d-flex">
            <p class="temp">ユーザー名：</p>
            <p class="ml-3">{{ $user->name }}</p>
        </div>
        <div class="d-flex">
            <p class="temp">出身県：</p>
            <p class="ml-3">{{ $user->prefecture }}</p>
        </div>
    </div>

@endsection
