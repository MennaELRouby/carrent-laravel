<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'website',
        'content',
        'car_id',
    ];
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
