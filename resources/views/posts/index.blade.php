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
        <div class ='posts'>
            <h2 class 'title'>{{$post -> title}}</h1>
            <p class = 'body'>{{$post -> body}}</p>
        </div>
    @endforeach
    
    <div class = 'paginate'>
        {{$posts -> links()}}
    </div>
</body>
</html>