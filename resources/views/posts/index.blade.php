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
    @endforeach-->
    
    <a href='/posts/create'>記事の作成</a>
    
    <div class = 'paginate'>
        {{$posts -> links()}}
    </div>
</body>
</html>