<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;//Request内のカスタマイズしたPostRequestをインポート
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
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(PostRequest $request, Post $post)//ユーザーからのリクエストを扱う場合、Requestインスタンスを利用
    {
        $input = $request['post'];//$request['post']で、postをキーにもつリクエストパラメータを取得。キーはHTMLのFormタグ内で定義した各入力項目のname属性と一致する。今回の場合$input は[ 'title' => 'タイトル', 'body' => '本文' ]のような配列型式になる。
        $post->fill($input)->save();//$post->fill($input)とすることで、store関数が実行時点で空だったPostインスタンスのプロパティを、受け取ったキーごとに上書きできる。fillを実行する時、PostModel側でfillableというプロパティにfillが可能なプロパティを指定しておく必要あり。save()でDBへデータを追加
        return redirect('/posts/' . $post->id);//今回保存したpostのIDを含んだURLにリダイレクトさせる
    }
    
    public function edit(Post $post)
    {
        return view('posts.edit')/*ここだけでedit.blade→の中身は返せている*/->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();//fill →　saveを利用して、差分がある場合のみ更新を実行できる
        return redirect('/posts/' . $post->id);//今回保存したpostのIDを含んだURLにリダイレクトさせる
    }
    
    public function delete(Post $post)
    {
    $post->delete();//delete ブログ投稿を削除している
    return redirect('/');//ブログ投稿一覧にリダイレクト
    }
}
