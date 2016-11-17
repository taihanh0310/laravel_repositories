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
        'album_id', 'cart_id', 'quantity'
    ];
    
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
 
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
