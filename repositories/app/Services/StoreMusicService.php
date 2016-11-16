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
    //put your code here
    
    public function __construct(AlbumRepository $al, 
        GenreRepository $gen,
        ArtistRepository $art)
    {
        $this->albumRepos = $al;
        $this->genreRepos = $gen;
        $this->artistRepos = $art;
    }

    public function albumDetail($id){
        return $this->albumRepos->showDetail($id);
    }
    
    public function editAlbum($id)
    {
        $album = $this->albumDetail($id);
        $genres = $this->fetchListGenre();
        $artists = $this->fetchListArtist();
        
        return compact('album','genres','artists');
    }

    public function fetchListGenre(){
        return $this->genreRepos->fetchListGenre();
    }
    
    public function fetchListArtist(){
        return $this->artistRepos->fetchListArtist();
    }

        public function fetchListAlbum($condition = null){
        return $this->albumRepos->fetchListAlbum();
    }

    public function getBrowse($genre_name){
        return $this->genreRepos->getBrowse($genre_name);
    }

    public function dummnyData(){
    	$this->genreRepos->dummyData();
    	$this->albumRepos->dummyData();
        $this->artistRepos->dummyData();
    }
}
