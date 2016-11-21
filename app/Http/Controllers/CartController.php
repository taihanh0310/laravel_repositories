<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\CartItem;
use App\Services\ShoppingCartService;

class CartController extends AdminController
{
    private $shoppingCartSev;
    public function __construct(ShoppingCartService $cartRep)
    {
        parent::__construct();
        $this->shoppingCartSev = $cartRep;
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
        $datas = $this->shoppingCartSev->showCartList(Auth::user()->id);
        $cart = $datas['cart'];
        $items = $datas['items'];
        return view('cart.show',['cart' => $cart, 'items' => $items]);
    }
 
    public function removeItem($id){
 
        CartItem::destroy($id);
        return redirect(route('cart.list'));
    }
}
