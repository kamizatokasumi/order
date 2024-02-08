<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    // モデルに関連付けるテーブル
    protected $table = 'orders';

    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    //
    protected $fillable = ['user_id', 'name', 'description', 'volume', 'amount_of_money'];

    //  商品名テーブルとの外部キー制約
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    //  ユーザーテーブルとの外部キー制約
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
