<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;
use App\Repositories\Repository;
use App\Cart;
/**
 * Description of CartRepository
 *
 * @author nthanh
 */
class CartRepository extends Repository
{
    public function model()
    {
        return Cart::class;
    }

    public function addCart($album_id){}
    public function removeItem($album_id){}
    public function removeCart($cart_id){}
    public function updateItem($condition){}
    public function showCartList($user_id)
    {
    	
    }
}
