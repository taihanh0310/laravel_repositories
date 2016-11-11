<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;
use App\Repositories\Repository;
use App\Genre;
/**
 * Description of GenreRepository
 *
 * @author nthanh
 */
class GenreRepository extends Repository
{
    public function model()
    {
        return Genre::class;
    }
}
