<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'categoryId',
        'price',
        'game_image',
        'description',
    ];

    public function categories(){
        return $this->belongsTo(Categories::class, 'categoryId');
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function getCreatedAtAttribute($value) {
        return Carbon::parse($value)->format('d F, Y');
    }
}
