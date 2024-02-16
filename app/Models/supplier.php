<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    protected $fillable = [
        'supplier_name',
        'phone_number',
        'email',
        'created_at',
        'updated_at'
    ];
}
