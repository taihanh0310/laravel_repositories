<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Interfaces;

//https://bosnadev.com/2015/03/07/using-repository-pattern-in-laravel-5/
/**
 *
 * @author nthanh
 */
interface RepositoryInterface
{
    //put your code here
    public function all($columns = array('*'));
    public function paginate($perPage = 15, $columns = array('*'));
    public function create(array $data);
    public function update(array $data, $id);
    public function delete($id);
    public function find($id, $columns = array('*'));
    public function findBy($field, $value, $columns = array('*'));
}
