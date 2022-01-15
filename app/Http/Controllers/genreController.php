<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genre;


class genreController extends Controller
{
    private $query;
    private $genres;

    public function __construct()
    {
        $this->genres = new genre();
        $this->query = $this->genres->query();
    }

    public function getGenres() {
        $generes = $this->genres->genres($this->query)->get(); 
        return view("homeUnregistered")->with(['generes' => $generes]);
    }

    public function getGenresSearch() {
        $generes = $this->genres->genres($this->query)->get(); 
        return view("searchResults")->with(['generes' => $generes]);
    }
}
