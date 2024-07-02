<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=5,IE=9" ><![endif]-->
<!DOCTYPE html>
<html>
<head>
<title>ブログ</title>
<meta charset="utf-8"/>
</head>
<body>
    <h1>Blog title</h1>

    @foreach ($posts as $post)
        <!--<div class ='posts'>
            <h2 class 'title'>{{$post -> title}}</h2>
            <p class = 'body'>{{$post -> body}}</p>
        </div>-->
        <h2 class='title'>
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        </h2>
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="button" onclick="deletePost({{ $post->id }})">投稿削除</button> 
</form>
    @endforeach-->
    
    <a href='/posts/create'>記事の作成</a>
    
    <div class = 'paginate'>
        {{$posts -> links()}}
    </div>
    
    
    <script>
    function deletePost(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
    </script>
</body>
</html>