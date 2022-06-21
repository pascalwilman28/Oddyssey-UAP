<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    { 
        $fGames = DB::table("games")
                ->select("games.*",DB::raw('COUNT(reviews.review) as total_review'))
                ->join("reviews","reviews.gameId","=","games.id")
                ->where('reviews.review','=',1)
                ->groupBy("games.id","games.title","games.categoryId","games.price","games.game_image","games.description","games.created_at","games.updated_at")
                ->orderBy('total_review','desc')
                ->having("total_review",">",0)
                ->skip(0)->take(5)
                ->get();

        $hGames = DB::table("games")
                ->select("games.*",'categories.categoryName',DB::raw('COUNT(carts.id) as total_purchased'))
                ->join("carts","carts.gameId","=","games.id")
                ->join("categories","games.categoryId","=","categories.id")
                ->where('carts.purchased_at','!=',NULL)
                ->whereBetween('purchased_at',[Carbon::today()->subDays(7),Carbon::now()])
                ->groupBy("games.id","games.title","games.categoryId","categories.categoryName","games.price","games.game_image","games.description","games.created_at","games.updated_at")
                ->orderBy('total_purchased','desc')
                ->having("total_purchased",">",0)
                ->skip(0)->take(8)
                ->get();

        return view('home', ["featuredGames"=>$fGames,"hotGames"=>$hGames]);
    }
}
