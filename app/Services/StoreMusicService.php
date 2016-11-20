<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Services;
use App\Repositories\AlbumRepository;
use App\Repositories\GenreRepository;
use App\Repositories\ArtistRepository;
use App\Repositories\UserRepository;
/**
 * Description of StoreMusicService
 *
 * @author nthanh
 */
class StoreMusicService
{
    private $albumRepos;
    private $genreRepos;
    private $artistRepos;
    private $userRepos;
    //put your code here
    
    public function __construct(
        AlbumRepository $al, 
        GenreRepository $gen,
        ArtistRepository $art,
        UserRepository $user
        )
    {
        $this->albumRepos = $al;
        $this->genreRepos = $gen;
        $this->artistRepos = $art;
        $this->userRepos = $user;
    }

    public function albumDetail($id){
        return $this->albumRepos->showDetail($id);
    }
    
    public function createAlbum(){
        $genres = $this->fetchListGenre();
        $artists = $this->fetchListArtist();
        return compact('genres','artists');
    }
    
    public function storeAlbum($data){
        return $this->albumRepos->storeAlbum($data);
    }

    public function editAlbum($id)
    {
        $album = $this->albumDetail($id);
        $genres = $this->fetchListGenre();
        $artists = $this->fetchListArtist();
        
        return compact('album','genres','artists');
    }
    
    public function updateAlbum($id, $data)
    {
        return $this->albumRepos->updateAlbum($id, $data);
    }

    public function fetchListGenre(){
        return $this->genreRepos->fetchListGenre();
    }
    
    public function fetchListArtist(){
        return $this->artistRepos->fetchListArtist();
    }

        public function fetchListAlbum($condition = null){
        return $this->albumRepos->fetchListAlbum($condition);
    }

    public function getBrowse($genre_name){
        return $this->genreRepos->getBrowse($genre_name);
    }

    public function dummnyData(){
    	$this->genreRepos->dummyData();
    	$this->albumRepos->dummyData();
        $this->artistRepos->dummyData();
        $this->userRepos->dummyData();
    }
}
