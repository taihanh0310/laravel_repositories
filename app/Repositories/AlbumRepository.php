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
        $data = [
            [
                'id' => '1', 
                'artist_id' => '1',
                'genre_id' => '1',
                'title' => 'For Those About To Rock We Salute You',
                'price' => '8.99'
            ],
            [
                'id' => '2', 
                'artist_id' => '1',
                'genre_id' => '1',
                'title' => 'For Those About To Rock We Salute You',
                'price' => '8.99'
            ],
            [
                'id' => '3', 
                'artist_id' => '1',
                'genre_id' => '1',
                'title' => 'For Those About To Rock We Salute You',
                'price' => '8.99'
            ],
            [
                'id' => '4', 
                'artist_id' => '1',
                'genre_id' => '1',
                'title' => 'For Those About To Rock We Salute You',
                'price' => '8.99'
            ],
            [
                'id' => '5', 
                'artist_id' => '1',
                'genre_id' => '1',
                'title' => 'For Those About To Rock We Salute You',
                'price' => '8.99'
            ],
            [
                'id' => '6', 
                'artist_id' => '1',
                'genre_id' => '1',
                'title' => 'For Those About To Rock We Salute You',
                'price' => '8.99'
            ],
            
            [
                'id' => '7', 
                'artist_id' => '2',
                'genre_id' => '1',
                'title' => 'For Those About To Rock We Salute You',
                'price' => '8.99'
            ],
            [
                'id' => '8', 
                'artist_id' => '2',
                'genre_id' => '1',
                'title' => 'For Those About To Rock We Salute You',
                'price' => '8.99'
            ],
            [
                'id' => '9', 
                'artist_id' => '1',
                'genre_id' => '1',
                'title' => 'For Those About To Rock We Salute You',
                'price' => '8.99'
            ],
            [
                'id' => '10', 
                'artist_id' => '1',
                'genre_id' => '1',
                'title' => 'For Those About To Rock We Salute You',
                'price' => '8.99'
            ],
            [
                'id' => '11', 
                'artist_id' => '1',
                'genre_id' => '1',
                'title' => 'For Those About To Rock We Salute You',
                'price' => '8.99'
            ],
            [
                'id' => '12', 
                'artist_id' => '1',
                'genre_id' => '1',
                'title' => 'For Those About To Rock We Salute You',
                'price' => '8.99'
            ],
        ];
        
        foreach($data as $art)
        {
            $this->create([
                'id' => $art['id'],
                'artist_id' => $art['artist_id'],
                'genre_id' => $art['genre_id'],
                'title' => $art['title'],
                'price' => $art['price']
            ]);
        }
    }

    public function showDetail($id){
        return $this->with('genre','artist')->find($id);
    }
    
    public function fetchListAlbum($condition = null)
    {
        return $this->with('genre','artist')->all();
    }
    
    public function updateAlbum($id, $data)
    {
        return $this->update($data, $id);
    }
    
    public function storeAlbum($data){
        return $this->create($data);
    }

}
