<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category',
        'quantity',
        'price',
        'inStock',
        'inOrder',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
