<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'year',
        'power',
        'torque',
        'weight',
    ];

    public function times()
    {
        return $this->hasMany(Time::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
