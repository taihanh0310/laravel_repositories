<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;
use App\Repositories\Repository;
use App\Artist;
/**
 * Description of ArtistRepository
 *
 * @author nthanh
 */
class ArtistRepository extends Repository
{
    public function model()
    {
        return Artist::class;
    }
    
    public function fetchListArtist(){
        return $this->all();
    }
    
    public function dummyData(){
        $data = [
            ['id' => '1', 'name' => 'AC/DC'],
            ['id' => '2', 'name' => 'Accept'],
            ['id' => '3', 'name' => 'Aerosmith'],
            ['id' => '4', 'name' => 'Alanis Morissette'],
            ['id' => '5', 'name' => 'Alice In Chains'],
            ['id' => '6', 'name' => 'Antônio Carlos Jobim'],
            ['id' => '7', 'name' => 'Apocalyptica'],
            ['id' => '8', 'name' => 'Audioslave'],
            ['id' => '9', 'name' => 'Billy Cobham'],
            ['id' => '10', 'name' => 'Black Label Society'],
        ];
        
        foreach($data as $art)
        {
            $this->create([
                'id' => $art['id'],
                'name' => $art['name']
            ]);
        }
    }
}
