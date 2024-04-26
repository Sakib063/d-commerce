<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buyer extends User
{
    use HasFactory;

    protected $fillable=[
        'home_address',
    ];

    protected function user():BelongsTo
    {
        return $this->belongsto(User::class);
    }
}
