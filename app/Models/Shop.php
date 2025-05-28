<?php

namespace App\Models;

use App\Models\Farmer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $guarded = [];

    public function farmer(){
        return $this->belongsTo(Farmer::class, "farmer_id", "id");
    }

    public function products (){
        return $this->hasMany(Product::class);
    }

    
}
