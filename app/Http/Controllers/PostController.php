<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;//Postモデル内のPostクラスをインポート

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')/*ここだけでindex.bladeの中身は返せている*/->with(['posts' => $post->getPaginateByLimit()]);
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    public function show(Post $post)
    {
        return view('posts.show')/*→ここだけでshow.blade→の中身は返せている*/->with(['post' => $post]);
        //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
}
