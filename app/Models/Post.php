<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;//論理削除のためのやつ

class Post extends Model
{
    use SoftDeletes;//論理削除をするためのコマンド　発行されるSQLがUPDATE文になり、deleted_atに実行日時が設定される。
                    //論理削除が有効になっているモデルでは、deleted_atに値が設定されると以降は削除扱いとなり、検索等で引っかからないようになる。
    use HasFactory;
    
    public function getByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    //カリキュラム8-4
    protected $fillable = [
    'title',
    'body',
    ];//Controllerでfillを使う際に必要な記述
}


