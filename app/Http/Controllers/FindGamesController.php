<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;

class FindGamesController extends Controller
{
     // Searching
     public function findGames(Request $req){
        if(is_null($req->keyword)){
            $req->validate([
                'keyword' => 'required'
              ]);
            return redirect('find');
        }else{
            $games = Games::where('title', 'LIKE',"%$req->keyword%")
                            ->orWhere('description','LIKE',"%$req->keyword%")->paginate(15);  //pagination(number)
            return view('find',[
                "games" => $games,
            ]);
        }
    }
}
