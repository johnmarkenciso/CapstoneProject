<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false){
            $query->where('product_tags', 'like', '%' . request('tag'). '%');
        }
        if($filters['fruits'] ?? false){
            $query->where('product_tags', 'like', 'fruits');
        }
    }
}
