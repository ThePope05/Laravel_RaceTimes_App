<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'country',
        'length',
    ];

    public function times()
    {
        return $this->hasMany(Time::class);
    }
}
