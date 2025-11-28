<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = ['nombre', 'descripcion', 'precio', 'stock', 'status'];
   public function category() { return $this->belongsTo(Category::class); }
      public function scopePrecioMinimo($query, $min) {
       return $query->where('precio', '>=', $min);
   }

   protected static function factory() {
        return ProductFactory::new();
    }
}

