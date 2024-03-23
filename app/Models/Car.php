<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'body_type',
        'make',
        'model',
        'year',
        'price',
        'daily_rate',
        'color',
        'seats',
        'engine_capacity',
        'image'
    ];
}
