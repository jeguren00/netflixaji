<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\View\View;

class VideoController extends Controller
{
    //
    private $video;
    private $query;

    public function __construct()
    {
        $this->video = new Video();
        $this->query = $this->video->query();
    }

    public function fillHome() {
        $databaseQuery = $this->video->scopePelis($this->query)->get();
        return view("moviesList")->with(['videos' => $databaseQuery ]);
    }

    public function getVideos() {
        $videos = $this->video->videos($this->query)->get();
        $pelis = $this->video->pelis($this->query)->get();

        return view("moviesList")->with(['videos' => $videos])->with(['pelis' => $pelis]);
    }
}
