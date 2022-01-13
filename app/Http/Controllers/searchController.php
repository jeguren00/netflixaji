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
        $videosOfThisGenre = $this->video->scopeVideos($this->query)->where('idGenere',$idOfGenreChosed)->get();

        echo $videosOfThisGenre;
    }

    public function getResultsWithText(Request $request) {
        $inputText = $request->input('searchBox');
        $videosLikeTitle = $this->video->scopeVideos($this->query)->where('title', 'like', '%'.$inputText.'%')->get();

        echo $videosLikeTitle;
    }
}
