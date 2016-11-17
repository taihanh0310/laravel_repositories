<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;
use App\Order;
use App\Repositories\Repository;
/**
 * Description of OrderRepository
 *
 * @author nthanh
 */
class OrderRepository extends Repository
{
    public function model()
    {
        return Order::class;
    }
}
