<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'luggage',
        'doors',
        'passengers',
        'price',
        'published',
        'image',
        'cat_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'car_id');
    }
}
