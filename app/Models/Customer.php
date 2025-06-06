<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

     public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function cart(){
        return $this->hasOne(Cart::class, 'cart_id', 'id');
    }
}
