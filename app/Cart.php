<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\CartItem;

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
        $items = $this->cartItems;
        $total= 0;

        foreach($items as $item){
            $total+=$item->album->price;
        }

        return $total;
    }

}
