<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;
use App\Repositories\Repository;
use App\User;
/**
 * Description of UserRepository
 *
 * @author nthanh
 */
class UserRepository extends Repository
{
    public function model()
    {
        return User::class;
    }
}
