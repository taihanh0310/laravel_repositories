<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Services;

use App\Repositories\CartRepository;
use App\Repositories\CartItemRepository;
use App\Repositories\OrderRepository;
use App\Repositories\OrderDetailRepository;

/**
 * Description of ShoppingCartService
 *
 * @author NTHanh
 */
class ShoppingCartService
{

    private $cartRep;
    private $cartItemRep;
    private $checkoutRep;
    private $orderRep;
    private $orderDetailRep;

    public function __construct(
    CartRepository $cartRep, CartItemRepository $cartItemRep, OrderRepository $orderRep, OrderDetailRepository $orderDetailRep)
    {
        $this->cartRep = $cartRep;
        $this->cartItemRep = $cartItemRep;
        $this->orderRep = $orderRep;
        $this->orderDetailRep = $orderDetailRep;
    }
    
    
    /**
     * 
     * @param type $cart_id
     * @param type $user_id
     * @return array
     */
    public function showCartList($user_id){
        $cart = $this->cartRep->showCartList($user_id);
        $items = array();
        if($cart){
            $items = $this->cartItemRep->showListItem($cart->id);
        }
        return compact('cart','items');
    }

    public function addOrder($data)
    {
        $order_id = $this->orderRep->addOrder($data);
        if($order_id){
            if($this->addOrderDetail($order_id, $data['cart_id'])){
                if($this->removeCart($data['cart_id'])){
                    $data['cart_id'];
                }
            }
        }
        return false;
    }

    public function removeCart($cart_id)
    {
        if($this->cartRep->removeCart($cart_id) && $this->cartItemRep->deleteCartItemWithCart($cart_id)){
            return true;
        }
        return false;
    }

    public function addOrderDetail($order_id, $cart_id)
    {
        $rawData = $this->cartItemRep->showListItem($cart_id);
        $count = 0;
        foreach ($rawData as $item) {
            $count = $count + 1;
            $data = [
                        'order_id' => $order_id,
                        'album_id' => $item->album_id,
                        'quantity' => $item->quantity,
                        'unit_price' => $item->album->price
                    ];
            $result[] = $this->orderDetailRep->addOrderDetail($data);
        }
        if(count($result) == $count){
            return $order_id;
        }
        return false;
    }
}
