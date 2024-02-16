<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    protected $fillable = [
        'product_name',
        'unit_price',
        'created_at',
        'updated_at'
    ];
}
