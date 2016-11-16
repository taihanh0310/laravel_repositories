<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;
use App\Album;

class CartItem extends Model
{
    protected $table = "carts_item";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'album_id', 'cart_id'
    ];
    
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
 
    public function product()
    {
        return $this->belongsTo(Album::class);
    }
}
