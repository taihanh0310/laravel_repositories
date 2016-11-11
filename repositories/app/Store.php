<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;

class Store extends Model
{
    protected $table = "stores";
    protected $fillable = ['name', 'slug', 'site', 'user_id'];
    
    public function member(){
        return $this->belongsTo(User::class);
    }
    
    public function products() {
        return $this->hasMany(Product::class,'store_id','id');
    }
}
