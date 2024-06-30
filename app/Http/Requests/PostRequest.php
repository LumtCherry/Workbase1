<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'post.title' => 'required|string|max:100',//'キー名' => 'ルール1|ルール2|ルール3'で書く。post[title]など入れ子になっている場合は.（ドット）で繋ぐ。
            'post.body' => 'required|string|max:4000',//ルールは左側から評価　エラーがあった段階で返却
        ];
    }
}
