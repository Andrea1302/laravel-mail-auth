<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function deleteVideogame($id){
        $videogame = Videogame::FindOrFail($id);

        $videogame -> delete();
        // $videogame -> save();

        return redirect() -> route('home');
    }
}
