<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>街自慢:記事一覧</title>
</head>

<body>
    <h1>記事一覧</h1>
    <ul>
        @foreach ($articles as $article)
            <li><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li>
        @endforeach
    </ul>
    <input type="submit" value="新規記事投稿"  onclick="location.href='/articles/create'">
</body>
</html>