<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genreXvideo extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'GenreXVideo';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function scopeVideoAmbGenre($query){
        return $query->leftJoin('videos', 'GenreXVideo.idVideo', '=' ,'videos.idVideo');   
    }

    public function scopeTots($query) {
        return $query;
    }

}
