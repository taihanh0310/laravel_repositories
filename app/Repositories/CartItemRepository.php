<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;
use App\Repositories\Repository;
use App\CartItem;
/**
 * Description of CartItemRepository
 *
 * @author nthanh
 */
class CartItemRepository extends Repository
{
    public function model()
    {
        return CartItem::class;
    }
    
    public function showListItem($cart_id)
    {
        $items = $this->with('album')->findBy('cart_id',$cart_id)->get();
        return $items;
    }

    public function deleteCartItemWithCart($cart_id)
    {
    	return $this->findBy('cart_id',$cart_id)->delete();
    }

    public function removeCartItem($id)
    {
    	$this->delete($id);
    }
}
