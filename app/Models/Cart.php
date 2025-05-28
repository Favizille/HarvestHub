<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded =[];

    public function customer(){
        return $this->belongTo(Customer::class, 'customer_id', 'id');
    }
}
