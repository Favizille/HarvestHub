<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function shop(){
        return $this->belongsTo(Shop::class, "shop_id", "id");
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
