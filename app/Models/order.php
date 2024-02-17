<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class order extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'supplier_id',
        'product_id',
        'status_id',
        'user_id',
        'volume',
        'description',
        'created_at',
        'updated_at'
    ];

    //  商品名テーブルとの外部キー制約
    public function product()
    {
        return $this->belongsTo(product::class);
    }

    //  ユーザーテーブルとの外部キー制約
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    //  取引先テーブルとの外部キー制約
    public function supplier()
    {
        return $this->belongsTo(supplier::class);
    }

    //  ステータステーブルとの外部キー制約
    public function status()
    {
        return $this->belongsTo(status::class);
    }

    // 更新処理
    public function orderupdate($request, $update)
    {
        $result = $update->fill([
            'supplier_id' => $request->supplier_id,
            'product_id' => $request->product_id,
            'status_id' => $request->product_id,
            'user_id' => $request->product_id,
            'volume' => $request->volume,
            'description' => $request->description,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
        ])->save();
        return $result;
    }
}
