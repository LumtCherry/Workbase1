<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf<!--CSRFトークンフィールド　formformタグを使う時は必須-->
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/><!--name部分は入れ子構造にすることによって、サーバ側で扱う時、post => [ 'title' => 'aaaa', 'body' => 'bbbb']というような形で、postの配列に入れ子で扱うことができる。old内には直前で入力していた内容が入っている-->
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p><!--赤文字でバリデーションエラーの英文を表示する-->
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="本文を入力">{{ old('post.body') }}</textarea><!--old内には直前で入力していた内容が入っている-->
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p><!--赤文字でバリデーションエラーの英文を表示する-->
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>