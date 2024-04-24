<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_Man extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'region',
        'phone',
        'transport',
        'order_status',
    ];
}
