<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $fillable = [
        'title','description','slug','size','color','price','category_id','rate','position','active','image','type'
    ];

    public function categories(){
        return $this->belongsToMany(Category::class,'category_product','product_id','category_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
