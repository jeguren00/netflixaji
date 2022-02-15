<?php

namespace App\Http\Controllers;

use App\Http\Resources\GenreResource;
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

    public function getGenre(Request $request) {
        $genre = genre::find($request->id);
        if (!$genre) {
            return response()->json('No existe el género', 200);
        }
        
        return new GenreResource($genre);
    }

    public function getGenresSearch() {
        $generes = $this->genres->genres($this->query)->get(); 
        return view("searchResults")->with(['generes' => $generes]);
    }
}
