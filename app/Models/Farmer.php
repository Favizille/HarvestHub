<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\User;
use App\Models\Review;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function shop(){
        return $this->hasOne(Shop::class, "shop_id", "id");
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
