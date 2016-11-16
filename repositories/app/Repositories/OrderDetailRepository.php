<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;
use App\Repositories\Repository;
use App\OrderDetail;
/**
 * Description of OrderDetailRepository
 *
 * @author nthanh
 */
class OrderDetailRepository extends Repository
{
    public function model()
    {
        return OrderDetail::class;
    }

//put your code here
}
