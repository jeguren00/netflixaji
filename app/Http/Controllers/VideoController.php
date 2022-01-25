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
        $generes = $this->genre->genres($this->queryGen)->get();
        
        return view("viewStreaming")->with(['video' => $video])->with(['generes' => $generes]);
    }

    public function listChapters() {
        $id = $_GET['id'];
        $video = $this->video->findById($this->query, $id)->get();
        $title=$video[0]->title;
        
        $chapters = $this->video->findByTitle($title)->orderBy('season')->orderBy('chapter')->get();
        $seasons = $chapters->last()->season;

        $generes = $this->genre->genres($this->queryGen)->get();

        return view("serie")->with(['chapters' => $chapters])->with(['seasons' => $seasons])->with(['generes' => $generes]);
    }

    public function addToFavourites(Request $request) {
        $videoId = $_GET['id'];
        if ($request->session()->get('favourites') != null) {
            foreach ($request->session()->get('favourites') as $item) {
                if ($item->idVideo === intval($videoId)) {
                    return redirect(url()->previous());
                }
            }
        }

        $video = $this->video->findById($this->query, $videoId)->get();

        $favourites = $request->session()->get('favourites', []);
        array_push($favourites, $video[0]);
        $request->session()->put('favourites', $favourites);

        return redirect(url()->previous());
    }

    public function listFavourites(Request $request) {
        $generes = $this->genre->genres($this->queryGen)->get();
        $favourites = $request->session()->get('favourites');
        if ($favourites === null) {
            $favourites = [];
        }
        return view('userFavourites')->with(['videos' => $favourites])->with(['generes' => $generes]);
    }

    public function deleteFavourite(Request $request) {
        $id = $_GET['id'];
        $favourites = $request->session()->get('favourites');
        foreach ($favourites as $key => $favourite) {
            if ($favourite->idVideo === intval($id)) {
                unset($favourites[$key]);
                $request->session()->put('favourites', $favourites);
            }
        }
        return redirect(url()->previous());
    }

    public function deleteAllFavourites(Request $request) {
        $request->session()->forget('favourites');
        return redirect(url()->previous());
    }
}
