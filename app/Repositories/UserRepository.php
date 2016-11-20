<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;
use App\Repositories\Repository;
use App\User;
use Illuminate\Support\Facades\Hash;
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

    public function dummyData(){
    	$this->create([
    		'name' => 'hanh nguyen',
    		'email' => 'taihanh0310@gmail.com',
    		'password' => Hash::make('1234qwer'),
    	]);
    }
}
