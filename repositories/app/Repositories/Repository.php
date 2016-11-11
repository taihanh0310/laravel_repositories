<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;
use App\Interfaces\RepositoryInterface;
use Illuminate\Support\Facades\App;
use App\Repositories\RepositoryException;

/**
 * Description of Repository
 *
 * @author nthanh
 */
abstract class Repository implements RepositoryInterface
{
    private $app;
    protected $model;
    
    abstract function model();
    
    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    public function makeModel()
    {
        $model = $this->app->make($this->model());

        if(!$model instanceof Model)
        {
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        return $this->model = $model;
    }
    
    /**
     * @param array $columns
     * @return mixed
     */
    public function all($columns = array('*')) {
        return $this->model->get($columns);
    }
    
    public function paginate($perPage = 15, $columns = array('*')) {
        return $this->model->paginate($perPage, $columns);
    }
    
    public function create(array $data) {
        return $this->model->create($data);
    }
    
    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute="id") {
        return $this->model->where($attribute, '=', $id)->update($data);
    }
    
    /**
     * @param $id
     * @return mixed
     */
    public function delete($id) {
        return $this->model->destroy($id);
    }
    
    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = array('*')) {
        return $this->model->find($id, $columns);
    }
    
    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

}