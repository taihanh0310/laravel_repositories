<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Store;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ['name', 'short_desc', 'long_desc', 'price', 'store_id', 'user_id'];
    
    public function  store() {
        return $this->belongsTo(Store::class);
    }
}
