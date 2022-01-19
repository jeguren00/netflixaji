<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\genre;
use App\Models\genreXvideo;
use Illuminate\Support\Facades\DB;



class searchController extends Controller
{
    private $query;
    private $video;
    private $genre;
    private $genXVid;
    private $genXVidQuery;



    function __construct(){
        $this->video = new Video();
        $this->genre = new genre();
        $this->genXVid = new genreXVideo();
        $this->query = $this->video->query();
        $this->genreQuery = $this->genre->query();
        $this->genXVidQuery = $this->genXVid->query();
    }

    public function getResultsWithGen($genre) {

        //Si recibe ID esto desaparece
        $idOfGenreChosed = $this->genre->scopeGenres($this->genreQuery)->where('name', $genre)->value('idGenere');

        $movies = $this->video->query();   /// SELECT * FROM VIDEO WHERE
        $movies->type("movie");     //type=movies
        $movies->genere($idOfGenreChosed); // AND genere=2
        $movies->joinGeneres(); // JOIN () JOIN
        $listMovies= $movies->get();  // ;
        



        

        $moviesOfThisGenre = $this->genXVid->VideoAmbGenre($this->genXVidQuery)->where('idGenere',$idOfGenreChosed)->where('type','movie')->get();
        $seriesOfThisGenre = $this->genXVid->VideoAmbGenre($this->genXVidQuery)->where('idGenere',$idOfGenreChosed)->where('type','serie')->where('season','0')->where('chapter','0')->get();

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
