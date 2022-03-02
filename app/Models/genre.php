<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description'];


        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'genres';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idGenere';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function video() {
        return $this->hasManyThrough(Video::class, genreXvideo::class);
    }

    public function scopeGenres($query){
        return $query;
    }

}
