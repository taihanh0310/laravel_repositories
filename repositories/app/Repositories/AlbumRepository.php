<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;
use App\Repositories\Repository;
use App\Album;
/**
 * Description of AlbumRepository
 *
 * @author nthanh
 */
class AlbumRepository extends Repository
{
    public function model()
    {
        return Album::class;
    }
    
    public function dummyData()
    {
        for($i = 1; $i <10; $i++){
            $this->create([
                'title' => 'nhan san ' . $i,
                'genre_id' => $i 
            ]);
        }
    }

    public function showDetail($id){
        return $this->find($id);
    }
}
