<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat_name',

    ];
    public function car()
    {
        return $this->hasMany(Car::class, 'cat_id');
    }
}
