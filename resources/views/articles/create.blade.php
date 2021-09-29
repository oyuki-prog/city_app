<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>街自慢:新規記事投稿</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
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
    <h1>新規記事投稿</h1>
    <form action="/articles" method="POST">
        @csrf
        <p>
            <label for="title">タイトル</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </p>
        <p>
            <label for="prefecture">県</label>
            <input type="text" name="prefecture" value="{{ old('prefecture') }}">
            <label for="cities">市町村</label>
            <input type="text" name="cities" value="{{ old('cities') }}">
        </p>
        <p>
            <label for="tag">タグ</label>
            <input type="text" name="tag" value="{{ old('tag') }}">
        </p>
        <p>
            <label for="body">本文</label>
            <textarea name="body"></textarea>
        </p>
        <input type="submit" value="投稿">
    </form>
</body>
</html>