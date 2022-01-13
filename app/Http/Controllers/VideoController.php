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
}
