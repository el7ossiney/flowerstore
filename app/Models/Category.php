<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;
    protected $fillable = [
        'title','description','brand_id','subcategory_id','position','active'
    ];
    public function brands(){
        return $this->belongsTo(Brand::class,'brand_id','id')->withDefault();
    }
    public function products(){
        return $this->belongsToMany(Product::class , 'category_product','category_id','product_id');
    }
}
