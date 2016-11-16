<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Album;

class Artist extends Model
{
    protected $table = "artists";
    
    protected $fillable = [
        'name'
    ];
    
    public function albums()
    {
        return $this->hasMany(Album::class, 'artist_id', 'id');
    }
}
