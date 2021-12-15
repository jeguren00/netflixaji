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
    public function __construct()
    {
        $this->video = new Video();
    }

    public function fillHome() {
        $query = $this->video->query();
        $databaseQuery = $this->video->scopePelis($query)->get();
        return view("moviesList")->with(['videos' => $databaseQuery ]);
    }
}
