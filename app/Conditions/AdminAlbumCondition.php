<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Conditions;
use App\BaseAbstractBean;
/**
 * Description of AdminAlbumCondition
 *
 * @author nthanh
 */
class AdminAlbumCondition extends BaseAbstractBean
{
    public $keyword;
    public $limit;
    public $sortType;
    
    public function getKeyWord()
    {
        return $this->keyword;
    }
    
    public function getLimit(){
        return $this->limit;
    }
    
    public function getSortType()
    {
        return "created_at desc";
    }
}
