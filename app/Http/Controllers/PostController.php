<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;//Postモデル内のPostクラスをインポート

class PostController extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
    }
}
