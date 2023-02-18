<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;
    
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /* Relacion uno a muchos*/
    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    /* Relacion uno a muchos inversa*/
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /* Relacion muchos a muchos */
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    /* Relacion uno a muchos polimorfica*/
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
