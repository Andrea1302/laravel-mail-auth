<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;

class ApiController extends Controller
{
    public function getVideogames(){
        $videogames = Videogame::All();

        return json_encode($videogames);
    }
}
