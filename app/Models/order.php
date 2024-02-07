<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    // モデルに関連付けるテーブル
    protected $table = 'orders';

    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録・更新可能なカラムの指定
    protected $fillable = [

        'name',
        'price',
        'description',
        'created_at',
        'updated_at'
    ];
}
