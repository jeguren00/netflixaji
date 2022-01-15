<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\genre;



class searchController extends Controller
{
    private $query;
    private $video;
    private $genre;


    function __construct(){
        $this->video = new Video();
        $this->genre = new genre();
        $this->query = $this->video->query();
        $this->genreQuery = $this->genre->query();
    }

    public function getResultsWithGen($genre) {
        $idOfGenreChosed = $this->genre->scopeGenres($this->genreQuery)->where('name', $genre)->value('idGenere');

        $moviesOfThisGenre = $this->video->pelis($this->query)->where('idGenere',$idOfGenreChosed)->get();
        $seriesOfThisGenre = $this->video->series($this->query)->where('idGenere',$idOfGenreChosed)->get();

        $generes = $this->genre->genres($this->query)->get(); 
        return view("searchResults")->with(['movies' => $moviesOfThisGenre ])->with(['series' => $seriesOfThisGenre ])->with(['generes' => $generes])->with(['searchPattern' => $genre]);

    }

    public function getResultsWithText(Request $request) {
        $inputText = $request->input('searchBox');
        $moviesOfThisGenre = $this->video->pelis($this->query)->where('title', 'like', '%'.$inputText.'%')->get();
        $seriesOfThisGenre = $this->video->series($this->query)->where('title', 'like', '%'.$inputText.'%')->get();

        $generes = $this->genre->genres($this->query)->get(); 

        return view("searchResults")->with(['movies' => $moviesOfThisGenre ])->with(['series' => $seriesOfThisGenre ])->with(['generes' => $generes])->with(['searchPattern' => $inputText]);
    }
}
