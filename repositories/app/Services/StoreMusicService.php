<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Services;
use App\Repositories\AlbumRepository;
use App\Repositories\GenreRepository;
/**
 * Description of StoreMusicService
 *
 * @author nthanh
 */
class StoreMusicService
{
    private $albumRepos;
    private $genreRepos;
    //put your code here
    
    public function __construct(AlbumRepository $al, GenreRepository $gen)
    {
        $this->albumRepos = $al;
        $this->genreRepos = $gen;
    }
}
