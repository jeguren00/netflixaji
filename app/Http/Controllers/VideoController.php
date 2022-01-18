<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\View\View;
use App\Models\genre;


class VideoController extends Controller
{
    //
    private $video;
    private $query;
    private $genre;
    private $queryGen;


    public function __construct()
    {
        $this->video = new Video();
        $this->genre = new genre();
        $this->query = $this->video->query();
        $this->queryGen = $this->genre->query();
    }

    public function fillHome() {
        $databaseQuery = $this->video->scopeVideos($this->query)->get();
        return view("moviesList")->with(['videos' => $databaseQuery ]);
    }

    public function getVideos() {
        $generes = $this->genre->genres($this->queryGen)->get();
        $videos = $this->video->videos($this->query)->get();
        $pelis = $this->video->pelis($this->query)->get();
        $series = $this->video->series($this->query)->get();

        return view("moviesList")->with(['videos' => $videos])->with(['pelis' => $pelis])->with(['series' => $series])->with(['generes' => $generes]);
    }

    public function viewStream() {
        $id = $_GET['id'];
        $video = $this->video->findById($this->query, $id)->get();
        
        return view("viewStreaming")->with(['video' => $video]);
    }

    public function listChapters() {
        $id = $_GET['id'];
        $video = $this->video->findById($this->query, $id)->get();
        $title=$video[0]->title;
        
        $chapters = $this->video->findByTitle($title)->orderBy('season')->orderBy('chapter')->get();
        $seasons = $chapters->last()->season;

        return view("serie")->with(['chapters' => $chapters])->with(['seasons' => $seasons]);
    }

    public function getFavourites() {
        // $userId = Auth::user()->userId;

        return view('userFavourites'); // ->with(['userId' => $userId]);
    }
}
