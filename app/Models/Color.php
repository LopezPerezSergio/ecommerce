<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    /* Relacion muchos a muchos */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    /* Relacion uno a muchos */
    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    
}
