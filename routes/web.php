<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('posts.index');
});*/

Route::get('/',[PostController::class,'index']);

Route::get('/posts/create', [PostController::class ,'create']);
// '/posts/create'にGetリクエストが来たら、PostControllerのcreateメソッドを実行する  /post/{post}より上に書かないといけない。そうしないと{post}内にcreateが入り動作がおかしくなる

Route::post('/posts', [PostController::class, 'store']);
// '/posts'にPostリクエストが来たら、PostControllerのstoreメソッドを実行する

Route::get('/posts/{post}', [PostController::class ,'show']);
// '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する

Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
// '/posts/{対象データのID}/edit'にGetリクエストが来たら、PostControllerのeditメソッドを実行する

Route::put('/posts/{post}', [PostController::class, 'update']);
// '/posts/{対象データのID}'にPutリクエストが来たら,PostControllerのupdateメソッドを実行する

Route::delete('/posts/{post}', [PostController::class,'delete']);
// '/posts/{対象データのID}'にDeleteリクエストが来たら,PostControllerのdeleteメソッドを実行する
