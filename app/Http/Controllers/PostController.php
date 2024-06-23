<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;//Postモデル内のPostクラスをインポート

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')/*ここだけでindex.bladeの中身は返せている*/->with(['posts' => $post->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
}
