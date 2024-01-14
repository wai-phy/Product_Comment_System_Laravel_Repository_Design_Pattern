<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        'picture','title','price','description'
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
