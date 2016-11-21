<?php

//https://bosnadev.com/2015/03/26/using-repository-pattern-in-laravel-5-eloquent-relations-and-eager-loading/

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;
use App\Artist;
use App\Untils\LContants;

class Album extends Model
{
    
    protected $table = "albums";
    protected $fillable = [
        'title',
        'genre_id',
        'artist_id',
        'price',
        'album_art_url'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
    
    public function getAlbumUrl()
    {
        if(!empty($this->attributes['album_art_url'])){
            return "/images/".$this->attributes['album_art_url'];
        }
        return LContants::DEFAULT_IMAGE;
    }
}
