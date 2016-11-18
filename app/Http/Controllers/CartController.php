<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\CartItem;

class CartController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function addItem ($productId){
 
        $cart = Cart::where('user_id',Auth::user()->id)->first();

        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }

        $cartItem = CartItem::where('cart_id',$cart->id)->where('album_id', $productId)->first();
        if(!$cartItem){
            $cartItem  = new Cartitem();
            $cartItem->album_id =$productId;
            $cartItem->cart_id = $cart->id;
            $cartItem->quantity = 1;
            $cartItem->save();
        }
        else{
            $cartItem->quantity = (int) $cartItem->quantity + 1;
            $cartItem->save();
        }
 
        return redirect(route('cart.list'));
 
    }
 
    public function showCart(){
        $cart = Cart::where('user_id',Auth::user()->id)->first();
 
        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }
 
        $items = $cart->cartItems;
        $total= $cart->getTotalPrice();
        
 
        return view('cart.show',['items'=>$items,'total'=>$total]);
    }
 
    public function removeItem($id){
 
        CartItem::destroy($id);
        return redirect('/cart');
    }
}
