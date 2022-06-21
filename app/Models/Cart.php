<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    
    protected $fillable = ['gameId','userId'];

    public function gamedetail(){
        return $this->belongsTo(Games::class, 'gameId');
    }
    
    public function userdetail(){
        return $this->belongsTo(User::class, 'userId');
    }
}
