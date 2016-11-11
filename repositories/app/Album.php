<?php

//https://bosnadev.com/2015/03/26/using-repository-pattern-in-laravel-5-eloquent-relations-and-eager-loading/
namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "users";
}
