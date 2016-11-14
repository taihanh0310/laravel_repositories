<?php

//https://bosnadev.com/2015/03/26/using-repository-pattern-in-laravel-5-eloquent-relations-and-eager-loading/
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;

class Album extends Model
{
    protected $table = "albums";
    protected $fillable = [
        'title',
        'genre_id'
    ];
    
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
