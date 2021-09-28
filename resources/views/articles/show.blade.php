<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>街自慢:記事詳細</title>
</head>

<body>
    <h1>記事詳細</h1>
    <P>タイトル:{{ $article->title }}</P>
    <p>{{ $article->body }}</p>

    <div class="button-group">
        <input type="button" value="記事一覧へ戻る" onclick="location.href='/articles'">
        <input type="button" value="記事を編集する" onclick="location.href='/articles/{{ $article->id }}/edit'">
        <form action="/articles/{{ $article->id }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="記事を削除する" onclick="if(!confirm('本当に削除しますか？')){return false};">
        </form>
    </div>
</body>

</html>
