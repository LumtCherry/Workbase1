<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>カリキュラム8-5</title>
    </head>
    <body>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf<!--formタグには必須-->
            @method('PUT')<!--formタグのmethod属性はPOSTを指定したうえで,@method('PUT')を記述することでPutリクエストとして送信できる-->
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}"><!--value属性で前の入力内容を表示-->
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p><!--赤文字でバリデーションエラーの英文を表示する-->
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='textarea' name='post[body]' value="{{ $post->body }}"><!--value属性で前の入力内容を表示-->
                <p class="title__error" style="color:red">{{ $errors->first('post.body') }}</p><!--赤文字でバリデーションエラーの英文を表示する-->
            </div>
            <input type="submit" value="保存">
        </form>
    </body>
</html>