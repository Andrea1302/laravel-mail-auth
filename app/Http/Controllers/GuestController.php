<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;
use Illuminate\Support\Facades\Mail;
use App\Mail\VideogameDeleteMail;
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
        Mail::to('test@test.com')->send(new VideogameDeleteMail());
        return redirect() -> route('home');
    }
}
