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



    function __construct(){
        $this->video = new Video();
        $this->genre = new genre();
        $this->genXVid = new genreXVideo();
    }

    public function getResultsWithGen($genreId) {
        $movies = $this->video->query();   /// SELECT * FROM VIDEO WHERE
        $movies->type("movie"); // WHERE TYPE = movie
        $movies->JoinGeneres($genreId); // JOIN WITH GenreXVideo, WHERE $genreId = genreXVideo.genreId
        $listMovies= $movies->get(); //;
        
        $series = $this->video->query(); /// SELECT * FROM VIDEO WHERE
        $series->Series(); // WHERE TYPE = serie
        $series->JoinGeneres($genreId); // JOIN WITH GenreXVideo, WHERE $genreId = genreXVideo.genreId
        $listSeries = $series->get(); //;

        //old
        //$moviesOfThisGenre = $this->genXVid->VideoAmbGenre($this->genXVidQuery)->where('idGenere',$idOfGenreChosed)->where('type','movie')->get();
        //$seriesOfThisGenre = $this->genXVid->VideoAmbGenre($this->genXVidQuery)->where('idGenere',$idOfGenreChosed)->where('type','serie')->where('season','0')->where('chapter','0')->get();

        //query retriving list of genres for the dropdown
        $generes = $this->genre->genres($this->query)->get(); 

        //return
        return view("searchResults")->with(['movies' => $listMovies ])->with(['series' => $listSeries ])->with(['generes' => $generes])->with(['searchPattern' => $genreId]);
    }

    public function getResultsWithText(Request $request) {
        $inputText = $request->input('searchBox');

        //old
        //$moviesOfThisGenre = $this->video->pelis($this->query)->where('title', 'like', '%'.$inputText.'%')->get();
        //$seriesOfThisGenre = $this->video->series($this->query)->where('title', 'like', '%'.$inputText.'%')->get();

        $movies = $this->video->query(); /// SELECT * FROM VIDEO WHERE
        $movies->type("movie"); // WHERE TYPE = movie
        $movies->Title($inputText); // WHERE title like %.$inputText.%
        $listMovies= $movies->get(); //;
        
        $series = $this->video->query(); /// SELECT * FROM VIDEO WHERE
        $series->Series(); // WHERE TYPE = serie
        $series->Title($inputText); // WHERE title like %.$inputText.%
        $listSeries = $series->get(); //;

        //query retriving list of genres for the dropdown
        $generes = $this->genre->genres($this->query)->get(); 

        //return
        return view("searchResults")->with(['movies' => $listMovies ])->with(['series' => $listSeries ])->with(['generes' => $generes])->with(['searchPattern' => $inputText]);
    }
}
