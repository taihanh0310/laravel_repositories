<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Album;

class Genre extends Model
{
    protected $table = "genres";
    protected $fillable = [
        'name',
        'decscription'
    ];

    public function albums()
    {
    	return $this->hasMany(Album::class, 'genre_id', 'id');
    }
}
