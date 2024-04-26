<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller extends User
{
    use HasFactory;

    protected $fillable=[
        'shop_address',
        'shop_name',
    ];

    protected function user():BelongsTo
    {
        return $this->belongsto(User::class);
    }
}
