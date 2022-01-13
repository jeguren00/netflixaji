<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;


class searchController extends Controller
{
    function __construct(){
        $this->user = new Video();
    }

    public function getResultsWithGen($genre) {
        echo $genre;
    }

    public function getResultsWithText(Request $request) {
        $inputText = $request->input('searchBox');
        echo $inputText;
    }
    
}
