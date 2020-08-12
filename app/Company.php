<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];
     public function customers()
     {
         return $this->hasmany(Customer::class);
     }
    // public function scopeActive($query)
    // {
    //     return $query->where('active',1);
    // }
    
}
