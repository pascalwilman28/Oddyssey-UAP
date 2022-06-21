<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class GameController extends Controller
{
    public function Game($id)
    { 
        $sGames = Games::find(Crypt::decrypt($id));
        $mGames = Games::where('categoryId','=',$sGames->categoryId)
                        ->where('id','!=',decrypt($id))
                        ->skip(0)
                        ->take(3)
                        ->get();

        $Review = Review::where('gameId','=',decrypt($id))
                        ->orderBy("created_at", "desc")
                        ->orderBy("id", "desc")
                        ->skip(0)
                        ->take(3)
                        ->get();

        $recommended = Review::where('gameId','=', decrypt($id))
                        ->where('review','=',1)
                        ->count();

        $notrecommended = Review::where('gameId','=', decrypt($id))
                        ->where('review','=',0)
                        ->count();

        return view('game', ["game"=>$sGames,
                            "moreGames"=>$mGames, 
                            "Review" => $Review,
                            "Recommended" => $recommended,
                            "NotRecommended" => $notrecommended]);
    }
}
