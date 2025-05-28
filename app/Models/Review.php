<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded  = [];

    public function farmer(){
        return $this->belongsTo(Farmer::class, 'farmer_id', 'id');
    }
}
