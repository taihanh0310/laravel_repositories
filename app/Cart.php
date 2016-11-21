<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\CartItem;
use App\Album;

class Cart extends Model
{

    protected $table = "carts";
    protected $fillable = ['user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'cart_id', 'id');
    }

    public function getTotalPrice()
    {
        $total= 0;
        $items = $this->cartItems;
        if($items){
            foreach($items as $item){
                $total+= ($item->album->price * $item->quantity); 
            }
        }

        return $total;
    }

}
