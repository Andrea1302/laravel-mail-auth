<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;
use Illuminate\Support\Facades\Mail;
use App\Mail\VideogameDeleteMail;
use App\Mail\VideogameDeleteMailAdmin;

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
        $user = Auth::user();
        Mail::to(Auth::user()-> email)->send(new VideogameDeleteMail($videogame,$user));
        Mail::to('admin@miosito.com')->send(new VideogameDeleteMailAdmin($videogame));

        return redirect() -> route('home');
    }
}
